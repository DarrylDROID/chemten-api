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
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama,
            'username' => $request->username,
            'sekolah' => $request->sekolah,
            'kota' => $request->kota,
            'tanggal lahir' => $request->tanggal_lahir
        ];
    }
}
