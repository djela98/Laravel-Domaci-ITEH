<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultet;

class FakultetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fakultet::factory()->count(30)->create();
    }
}
