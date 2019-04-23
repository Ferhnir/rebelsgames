<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "rg_posts";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_category_id', 'post_author_id', 'subject', 'excerpt', 'post_content'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function category()
    {
        return $this->belongsTo('App\PostCategory','post_category_id');
    }

    public function author()
    {
        return $this->belongsTo('App\User','post_author_id');
    }
}
