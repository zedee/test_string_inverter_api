<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testInverterReturnsCorrectInvertedString()
    {
        $this->get('/invert', [
            'str1' => 'hello',
            'str2' => 'how',
            'str3' => 'are',
            'str4' => 'you',
            'str5' => '?'
        ]);

        $this->seeJsonEquals([
            'result' => ['? uoy era woh olleh']
        ]);
    }
}
