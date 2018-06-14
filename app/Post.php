<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
    return $this->BelongsTo('App\User');
    }
    public function place()
    {
        return $this->BelongsTo('App\Place');
    }

    public function likes()
    {
        return $this->HasMany('App\Like');
    }
}
