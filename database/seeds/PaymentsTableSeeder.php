<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'user_id' => 1,
            'amount' => 500,
            'created_at' => Carbon::now()->subMinutes(20),
            'updated_at' => Carbon::now()->subMinutes(20)
        ]);

        DB::table('payments')->insert([
            'user_id' => 1,
            'amount' => 1000,
            'created_at' => Carbon::now()->subMinutes(15),
            'updated_at' => Carbon::now()->subMinutes(15)
        ]);

        DB::table('payments')->insert([
            'user_id' => 2,
            'amount' => 1500,
            'created_at' => Carbon::now()->subMinutes(10),
            'updated_at' => Carbon::now()->subMinutes(10)
        ]);

        DB::table('payments')->insert([
            'user_id' => 2,
            'amount' => 2000,
            'created_at' => Carbon::now()->subMinutes(7),
            'updated_at' => Carbon::now()->subMinutes(7)
        ]);

        DB::table('payments')->insert([
            'user_id' => 3,
            'amount' => 2500,
            'created_at' => Carbon::now()->subMinutes(5),
            'updated_at' => Carbon::now()->subMinutes(5)
        ]);

        DB::table('payments')->insert([
            'user_id' => 3,
            'amount' => 3000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
