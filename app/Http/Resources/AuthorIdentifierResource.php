<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AuthorIdentifierResource extends Resource
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
            'links' => [
                'self'      => 'I have to add self link of author',
                'related'   => 'I have to add link of all posts written by that author'
            ],
            'data' => [
                'id'   => $this->author->id,
                'name' => $this->author->name
            ]
        ];
    }
}
