<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testIsString():void
    {
        $this->assertIsString("Hello, world!");
    }

    public function testStringEqualsHelloWorld(): void
    {
        $this->assertEquals("Hello, world!", "Hello, world!");
    }

    public function testIsBiggestThanNumber(): void
    {
        $first = 5;
        $second = 10;
        $this->assertGreaterThan($first, $second);
    }
}
