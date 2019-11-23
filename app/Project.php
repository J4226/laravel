<?php

namespace App;

//use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use App\Events\ProjectCreated;

class Project extends Model
{
    protected $fillable = [
    
        'title', 'description', 'owner_id',
    
    ];
    
    
    protected $dispatchesEvents = [
        'created' => ProjectCreated::class
    
    ];
    
    
    protected static function boot()
    {
        parent::boot();
        
        static::created(function($project)
        {
         
        });
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    public function addTask($task)
    {
        $this->tasks()->create($task);
    }
}
