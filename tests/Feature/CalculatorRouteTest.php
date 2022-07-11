<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalculatorRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/calculator');

        $response->assertStatus(200);
    }
}
