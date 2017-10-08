<?php

namespace Tests\Unit;

use App\UserProfile;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserProfileTest extends TestCase
{
	// use DatabaseMigrations;
	// use DatabaseTransactions;
	use RefreshDatabase;

    /**     
     * @test
    */
    function it_can_generate_twitter_urls()
    {
    	$profile = factory(UserProfile::class)->create([
    		'twitter' => 'sileence'
    	]);

    	$this->assertSame('https://twitter.com/sileence', $profile->twitter_url);
    }
 
}
