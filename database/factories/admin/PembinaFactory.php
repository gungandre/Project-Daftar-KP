<?php

namespace Database\Factories\admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $user = User::factory()->create();

        return [
            "user_id" => $user->id,
            "nama_pembina" => $user->nama_lengkap,
            "alamat" => $this->faker->address(),
            "bagian_kerja" => $this->faker->jobTitle(),
            "no_hp" => $this->faker->phoneNumber(),
            "status" => "aktif"
        ];
    }
}
