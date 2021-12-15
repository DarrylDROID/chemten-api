<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'email' => $this->email,
            'password' => $this->password,
            'nama' => $this->nama,
            'username' => $this->username,
            'sekolah' => $this->sekolah,
            'kota' => $this->kota,
            'tanggal_lahir' => $this->tanggal_lahir,
            'role' => $this->role
        ];
    }
}
