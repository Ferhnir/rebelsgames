<?php

namespace App\Http\Resources;

use App\FaqCategory;

use  App\Http\Resources\FaqCategoriesResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FaqsResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return FaqResource::collection($this->collection);
    }
}
