<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    
    /** @test */
    public function a_user_can_have_a_project()
    {
        $user = factory('App\User')->create();
        
        $user->project()->create(['title' => 'ProjectTitle']);
        
        
        $this->assertEquals('ProjectTitle', $user->project->title);
    }
}
