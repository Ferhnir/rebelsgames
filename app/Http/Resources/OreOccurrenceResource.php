<?php

namespace App\Http\Resources;

use App\CelestialObjCategory;
use App\Http\Resources\CelestialCategoryResource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OreOccurrenceResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'celestials'       => CelestialCategoryResource::collection($this->collection)
            ]
        ];
    }
}
