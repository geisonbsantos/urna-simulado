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
            'id' => $this->id,
            'name' => $this->name,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'profile' => $this->profile->name,
            'profile_id' => $this->profile_id,
            'adress' => $this->adress ? $this->adress->name : null,
            'ibge_code' => $this->adress ? $this->adress->ibge_code : null,
            'adress_id' => $this->adress_id,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
            'abilities' => $this->abilities->pluck('slug'), // Assuming abilities is a collection of Ability models
            'profiles' => $this->profiles,
        ];
    }
}
