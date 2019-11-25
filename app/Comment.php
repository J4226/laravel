<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Likeable;
    
    public function POST()
    {
        return $this->belongsTo(Post::class);
    }
    
   
}
