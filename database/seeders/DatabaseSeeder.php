<?php

namespace Database\Seeders;

use App\Models\admin\Pembina;
use App\Models\DivisiModel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        Pembina::factory(30)->create();
        DivisiModel::factory(10)->create();
    }
}
