<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Taylor',
            'surname' => 'Otwell',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('clients')->insert([
            'name' => 'Mohamed',
            'surname' => 'Said',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('clients')->insert([
            'name' => 'Jeffrey',
            'surname' => 'Way',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('clients')->insert([
            'name' => 'Phil',
            'surname' => 'Parks',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
