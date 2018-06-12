<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {
        return $this->BelongsTo('App\User');
    }

    public function post()
    {
        return $this->BelongsTo('App\Post');
    }
}
