<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FooBarServiceProviderTest2 extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     // $response = $this->get('/');

    //     // $response->assertStatus(200);
    // }

    public function testServiceProvider()
    {
          
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);

        self::assertSame($foo1, $foo2);
    }
}
