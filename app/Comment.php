<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coMMENT extends Model
{
    public function POST()
    {
        return $this->belongsTo(Post::class);
    }
}
