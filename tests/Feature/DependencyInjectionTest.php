<?php
namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use App\Data\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DependencyInjectionTest extends TestCase {
    public function testDependencyInjection() {
        $foo=new Foo();
        $bar=new Bar($foo);

        //Constractor
        //Vaiabel bar menggunakan data dari varibel foo
        //Wajib memasukan data "Foo", karena melakukan Injection dari data "Foo" ke dalam "Bar"


        //Function
        //        $bar->setFoo($foo);
        //Atrribute
        //       $bar->forr = $foo;

        self::assertEquals('Foo and Bar', $bar->bar());
    }
}

?>
