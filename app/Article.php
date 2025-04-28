<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    // protected $fillable = ['title', 'excerpt', 'body'];

    public function path()
    {
        return route("articles.show", $this);
    }
}
