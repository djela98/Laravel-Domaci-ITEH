<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\UniverzitetSeeder;
use Database\Seeders\FakultetSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ss = new StudentSeeder;
        $us = new UniverzitetSeeder;
        $fs = new FakultetSeeder;

        $ss->run();
        $us->run();
        $fs->run();
    }
}
