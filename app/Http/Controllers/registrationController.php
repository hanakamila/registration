<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations=\App\Registration::all();
        return view('index',compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request()->validate([
            'photo' => 'required|image|mimes:jpg,jpeg|max:20480',
        ]) == TRUE) {

            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();

            $fileName = $name . "-600x600.jpg" ;
            Image::make($file)->resize(600, 600);
            $file->move(public_path().'/images/', $fileName);

            $registration= new \App\Registration;
            $registration->name=$request->post('name');
            $registration->birthdate=$request->post('birthdate');
            $registration->address=$request->post('address');
            $registration->email=$request->post('email');
            $registration->photo=$fileName;
            $registration->save();

            return redirect('')->with('success', 'Information has been added');
        }else{
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registration = \App\Registration::find($id);
        return view('edit',compact('registration','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registration= \App\Registration::find($id);
        $registration->name=$request->get('name');
        $registration->address=$request->get('address');
        $registration->email=$request->get('email');
        $registration->save();
        return redirect('')->with('success','Information has been edited');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registration = \App\Registration::find($id);
        $registration->delete();
        return redirect('')->with('success','Information has been  deleted');
    }
}
