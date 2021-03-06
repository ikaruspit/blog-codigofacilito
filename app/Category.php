<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    //estableciendo la relacion entre categoria y articulos
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}
