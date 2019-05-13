<?php

namespace App\Http\Resources;

use App\Ore;

use Illuminate\Http\Resources\Json\Resource;

class CelestialObjectResource extends Resource
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
            'id'   => $this->id,
            'name' => json_decode($this->name)
        ];
    }

}