<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class CurrencyFilterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Simple Test for getting the currency Route
        $response = $this->call('get', '/api/v1/users/currency=EGP');
        $this->assertEquals(200, $response->status());
        $this->assertTrue(true);
    }
}
