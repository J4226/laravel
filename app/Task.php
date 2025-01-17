<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    
    public function complete($completed = true)
    {
        $this->update(['completed' => $completed]);
    }
    
    
    
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
