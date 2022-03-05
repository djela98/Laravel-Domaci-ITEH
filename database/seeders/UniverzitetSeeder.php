<?php

namespace Database\Seeders;

use App\Models\Univerzitet;
use Illuminate\Database\Seeder;

class UniverzitetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Univerzitet::factory()->count(50)->create();
    }
}
