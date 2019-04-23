<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Carbon;

class PostResource extends Resource
{

    protected $postID;

    public function postMeta($value){
        $this->postID = $value;
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
            'type'          => 'post',
            'id'            => (string)$this->id,
            'attributes'    => [
                'category'      => new PostCategoryResource($this),
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('Y-m-d'),                
                $this->mergeWhen(($this->postID == null), [
                    'excerpt' => json_decode($this->excerpt),
                ]),
                'subject' => json_decode($this->subject),
                $this->mergeWhen(($this->postID != null), [
                    'post_content' => json_decode($this->post_content),
                ]),
            ],
            'author'        => new AuthorIdentifierResource($this)
        ];
    }
}
