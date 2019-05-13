<?php

namespace App\Http\Resources;

use App\CelestialObject;
use Illuminate\Http\Resources\Json\Resource;

class OreResource extends Resource
{
    public function foo($test)
    {
        $this->test = $test;
        return $this;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'    => $this->id,
            'name'  => json_decode($this->name),
            'celestials' => [
                'planet1' => true,
                'planet2' => false
            ]

            // 'celestials' => CelestialObjectResource::collection(CelestialObject::whereIn('id',json_decode($this->occurrence_obj_id))->get())
        ];
    }
}
