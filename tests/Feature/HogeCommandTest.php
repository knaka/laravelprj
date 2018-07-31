<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;

class HogeCommandTest extends TestCase
{
	/**
	 * A basic test example.
	 *
	 * @return void 
	 */
	public function testHogeCommand()
	{
		Artisan::call('command:hoge', [
			'title' => 'Title1', 
			'author' => 'Author1',
			]);
		$this->assertTrue(true);
	}
}
