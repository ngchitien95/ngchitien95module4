<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class typeOfNews extends Model
{
    protected $table = 'typeOfNew';

    public function category()
    {
        return $this->belongsTo('App\category', 'id_cate', 'id');
    }

    public function post()
    {
        return $this->hasMany('App\post','id_type', 'id');
    }

}
