<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
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
            'intelligence' => $this->intelligence,
            'strength' => $this->strength,
            'speed' => $this->speed,
            'durability' => $this->durability,
            'power' => $this->power,
            'combat' => $this->combat,
        ];
    }
}
