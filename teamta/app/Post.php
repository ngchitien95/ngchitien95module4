<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;

    protected $table = 'post';

    public function post()
    {
        return $this->belongsTo('App\typeOfNew', 'id_type', 'id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment','id_post','id');
    }

}
