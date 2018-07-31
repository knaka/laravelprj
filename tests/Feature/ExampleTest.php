<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
	
	public function testAnotherTest()
	{
		$response = $this->get('/');
		
		$response->assertStatus(200);
	}
	
	public function test2ndAnotherTest()
	{
		$response = $this->get('/');
		
		$response->assertStatus(200);
	}
	
	public function testCinemov()
	{
		$response = $this->get('/cinemov');
		
		$response->assertStatus(200);
	}
	
	public function testFoo()
	{
		$response = $this->get('/foo');
		
		$response->assertStatus(200);
	}
	
	public function testNotFound()
	{
		$response = $this->get('/not_found');
		$response->assertStatus(404);
	}
}
