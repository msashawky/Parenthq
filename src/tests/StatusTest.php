<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class StatusTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Simple Test for getting the statusCode Route
        $response = $this->call('get', '/api/v1/users/statusCode=authorised');
        $this->assertEquals(200, $response->status());
        $this->assertTrue(true);
    }
}
