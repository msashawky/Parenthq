<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ProviderFilterTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Simple Test for getting ProviderFilter Route
        $response = $this->call('get', '/api/v1/users/provider=DataProviderX');
        $this->assertEquals(200, $response->status());
        $this->assertTrue(true);
    }
}
