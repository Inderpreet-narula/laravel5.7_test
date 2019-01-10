<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

	public function testHelloWorld() {
		$this->assertTrue(true);
		$this->assertFalse(false);
		$this->assertNotEmpty(['hello']);
		$this->assertEquals(true, true);
	}
}
