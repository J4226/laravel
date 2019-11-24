<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Project;

class ProjectTest extends TestCase
{
   
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    
    
    /** @test */
    public function a_user_can_create_a_project()
    {

        $this->withoutExceptionHandling();
        
        //Given
        $this->actingAs(factory('App\User')->create());
        
        //When
        $this->post('/projects', [
            'title' => 'ProjectTitle',
            'description' => 'Description here',
        ]);
        
        
        //Then
        $this->assertDatabaseHas('projects', [
        'title' => 'ProjectTitle',
        'description' => 'Description here',
        ]);
    }
    
    /** @test */
    public function guests_may_not_create_projects()
    {
       // $this->withoutExceptionHandling();
        
        $this->post('/projects')->assertRedirect('/login');
    }
    
}
