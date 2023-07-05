<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use App\Service\HalloService;
use App\Service\HalloServiceIndonesia;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FooBarServiceProviderTest extends TestCase
{
    public function test_example()
    {
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);

        self::assertSame($foo1,$foo2);

        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        self::assertSame($bar1, $bar2);

        self::assertSame($foo1,$bar1->foo);
        self::assertSame($foo2,$bar2->foo);
    }

 
    public function testPropertySingletons()
    {
        $halloService1 = $this->app->make(HalloService::class);
        $halloService2 = $this->app->make(HalloService::class);

        self::assertSame($halloService1, $halloService2);

        self::assertEquals('Halo Yapet', $halloService1->hallo('Yapet'));
    }

    public function testEmpty()
    {
        seft::assertTrue(true);
    }
}
