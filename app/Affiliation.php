<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    protected $guarded = [];
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }
}
