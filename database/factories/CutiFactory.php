<?php

use App\Models\Cuti;
use App\Models\CutiStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CutiFactory extends Factory
{
    protected $model = Cuti::class;

    public function definition()
    {
        return [
            'tanggal_mulai' => $this->faker->dateTimeThisYear,
            'tanggal_berakhir' => $this->faker->dateTimeThisYear,
            'cuti_status_id' => CutiStatus::factory(),
        ];
    }
}
