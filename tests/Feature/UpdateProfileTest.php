<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdateProfileTest extends TestCase
{
	use RefreshDatabase;
    /**
    * @test
     */
    public function update_user_profile()
    {
    	$this->withoutExceptionHandling();

    	$user = factory(User::class)->create();
    	
    	$this->actingAs($user)
    		->put('profile', [
    		'bio' => 'Programador de Laravel',
    		'twitter' => 'sileence',
    		'github' => 'sileence'    		
    	])->assertStatus(200);	

    	$this->assertDatabaseHas('profiles', [
    		'user_id' => $user->id,
    		'bio' => 'Programador de Laravel',
    		'twitter' => 'sileence',
    		'github' => 'sileence'
    	]);
    }

    public function test_twitter_account_validation()
    {
    	$user = factory(User::class)->create();
    	
    	$this->put('profile', [
    		'bio' => 'Programador de Laravel',
    		'twitter' => '@{}#',
    		'github' => 'sileence'    		
    	])->assertSessionHasErrors(['twitter']);	

    	$this->assertDatabaseMissing('profiles', [
    		'user_id' => $user->id    		
    	]);
    }	  	  
}
