<?php

use App\Models\CutiStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CutiStatusFactory extends Factory
{
    protected $model = CutiStatus::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->word,
            'keterangan' => $this->faker->sentence,
        ];
    }
}
