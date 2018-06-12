<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = array('id', 'name', 'description','image','address','phone_number','email','popularity','category');

    protected $table = 'places';

    public function posts()
    {
        return $this->hasMany('\App\Post');

    }
}
