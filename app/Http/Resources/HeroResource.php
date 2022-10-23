<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HeroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return[
            'id' => $this->id,
            'name' => $this->name,
            'powerstats' => new CharacterResource($this->character),
            // 'image' => new ImageResource($this->image),
            'alignment' => $this->alignment,
            'height' => number_format($this->height / 100, 2),
            'weight' => $this->weight,
            'aliases' => $this->aliases,
        ];
    }
}
