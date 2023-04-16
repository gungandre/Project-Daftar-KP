<?php

namespace Database\Factories;

use App\Models\DivisiModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisiModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = DivisiModel::class;

    public function definition()
    {
        return [
            "nama_divisi" => $this->faker->jobTitle()
        ];
    }
}
