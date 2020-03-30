<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public function post()
    {
        return $this->belongsTo('App\post','id_post','id');
    }

    public function user()
    {
        return $this->belongsTo("App\user",'id_user','id');
    }
}
