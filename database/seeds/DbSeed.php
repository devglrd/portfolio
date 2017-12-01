<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DbSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gifs')->truncate();
    }
}
