<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = array('id', 'name', 'description','image','popularity','category');
}
