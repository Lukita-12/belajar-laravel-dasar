<?php

namespace App\Providers;

use App\Data\Bar;
use App\Data\Foo;
use App\Services\HalloService;
use App\Services\HalloServiceIndonesia;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FooBarServiceProvider extends ServiceProvider implements DeferrableProvider //implements DeferrebleProvider (untuk menambah Deferrable Provider) dan dapat offride methode "provide"
{
    // public array $singletons = [
    //     HalloService::class => HalloServiceIndonesia::class
    // ];

    public function register()  //men-register Foo dan Bar sebagai singleton 
    {
        // echo "FooBarServiceProvider";
        $this->app->singleton(Foo::class, function ($app) {
            return new Foo();
        });
        $this->app->singleton(Bar::class, function ($app) {
            return new Bar($app->make(Foo::class));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    // public function provides() //methode provide
    // {
    //      //setting awal/bawaan dari provide isinya adalah kosong
    //      //Kemudian kita beritahu/masukan return/isinya apa saja
    //     [HalloService::class, Foo::class, Bar::class];
    // }
}
