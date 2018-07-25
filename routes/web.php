<?php

use App\Registration;
use App\Http\Resources\Regist as RegistResource;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'registrationController@index');
Route::resource('registration', 'registrationController');
Route::get('/regist', function () {
    return new RegistResource(Registration::find(1));
});