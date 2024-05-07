<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnnualLeaveTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_annual_leave_request()
    {
        $data = [
            'tanggal_mulai' => '2024-05-10',
            'tanggal_berakhir' => '2024-05-15',
        ];

        $response = $this->postJson('/annual-leaves', $data);

        $response->assertStatus(201);
    }

    public function test_invalid_annual_leave_request()
    {
        $data = [
            'tanggal_mulai' => 'invalid',
            'tanggal_berakhir' => 'invalid',
          ];

        $response = $this->postJson('/annual-leaves', $data);

        $response->assertStatus(422)
                 ->assertSessionHasErrors(array_keys($this->getAnnualLeaveValidationRules()));

    }
}
