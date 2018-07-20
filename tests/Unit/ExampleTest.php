<?php

namespace Tests\Unit;

use App\classes\PayCreditCard;
use App\Mondoride;
use App\PayFactory;
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
        $this->assertTrue(true);
    }

    public function test_instance_created(){

        $payment = (new PayFactory())->build(501);

        $this->assertInstanceOf(PayCreditCard::class,$payment);


    }

}
