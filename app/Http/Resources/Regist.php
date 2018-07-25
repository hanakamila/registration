<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Regist extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'address' => $this->address,
            'email' => $this->email,
            'photo' => $this->photo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
