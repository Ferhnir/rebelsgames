<?php

namespace App\Http\Resources;

use App\Faq;
use App\Http\Resources\FaqsResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FaqCategoryResource extends JsonResource
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
            'id'        => $this->id,
            'name'      => json_decode($this->name),
            'accordion' => $this->accordion,
            'resources' => new FaqsResource(Faq::where( 'faq_category_id', $this->id )->get())
        ];
        
    }
}
