<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');

        self::assertEquals('Lukita Yapet', $youtube);
    }

    /*
    public function testDefaultEnv()
    {
        $author = env("AUTHOR", "Yapet");

        self::assertEquals('Yapet', $author);
    }
    */
}
