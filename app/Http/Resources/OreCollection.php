<?php

namespace App\Http\Resources;

use App\Http\Resources\OreResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OreCollection extends ResourceCollection
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
            'ores' => OreResource::collection($this->collection)
        ];
    }
}
