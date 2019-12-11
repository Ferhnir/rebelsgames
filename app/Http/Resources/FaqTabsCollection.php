<?php

namespace App\Http\Resources;

use App\Http\Resources\FaqTabsResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FaqTabsCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return FaqTabsResource::collection($this->collection);
    }
}
