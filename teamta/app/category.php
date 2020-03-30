<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';

    public function typeOfNew()
    {
        return $this->hasMany('App\typeOfNew', 'id_cate', 'id');
    }

    public function post()
    {
        return $this->hasManyThrough('App\post', 'App\typeOfNew', 'id_cate', 'id_post', 'id');
    }
}
