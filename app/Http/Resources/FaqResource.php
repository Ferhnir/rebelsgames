<?php

namespace App\Http\Resources;

use App\Http\Resources\FaqCategoryResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Carbon;

class FaqResource extends Resource
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
            'question'     => json_decode($this->question),
            'answer'    => json_decode($this->answer)
        ];
    }
}
