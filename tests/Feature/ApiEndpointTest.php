<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiEndpointTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_endpoints()
    {
        $response = $this->json('POST', '/annual-leaves', $data);
        $response->assertStatus(201);

        $response = $this->json('GET', '/annual-leaves');
        $response->assertStatus(200);

        $response = $this->json('GET', '/annual-leaves/1');
        $response->assertStatus(200);
    }
}
