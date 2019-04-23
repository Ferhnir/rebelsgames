<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = "rg_post_category";

    public function posts()
    {
        return $this->hasMany('App\Posts');
    }
}
