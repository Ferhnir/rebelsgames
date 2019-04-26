<?php

namespace App\Http\Resources;

use App\Http\Resources\FaqCategoryResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FaqCategoriesResource extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return FaqCategoryResource::collection($this->collection);
    }
}
