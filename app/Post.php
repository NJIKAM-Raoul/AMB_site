<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'contenu', 'image',
    ];

    // public function user ()
    // {
    //     return $this->belongsTo('App\User');//un seul post appartient a un user
    // }
}
