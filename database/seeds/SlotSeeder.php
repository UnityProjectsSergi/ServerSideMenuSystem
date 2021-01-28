<?php

use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slots')->insert([
            'health'=>1,


        ]);
        DB::table('slots')->insert([
            'health'=>0.5


        ]);
    }
}
