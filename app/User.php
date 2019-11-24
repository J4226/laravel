<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function isVerified()
    {
        return (bool) $this->email_verified_at;
    }
    
    public function isNotVerified()
    {
        return ! $this->isVerified();
    }
    
    public function project()
    {
        return $this->hasMany('App\Project');
    }
    
    public function profile()
    {
      return $this->hasOne(Profile::class);
    }
    
    public function experience()
    {
        return $this->hasOne(Experience::class);
    }
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    
}
