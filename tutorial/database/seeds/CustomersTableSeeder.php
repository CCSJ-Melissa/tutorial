<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('customers')->insert([
            'first_name' => "Melissa",
			      'last_name' => "Paradiso",
        ]);
		DB::table('customers')->insert([
            'first_name' => "Jasper",
			      'last_name' => "Paradiso",
        ]);
		DB::table('customers')->insert([
            'first_name' => "Austin",
			      'last_name' => "Paul",
        ]);
    DB::table('customers')->insert([
            'first_name' => "Ross",
            'last_name' => "Baldwin",
        ]);
    DB::table('customers')->insert([
            'first_name' => "Norman",
        	  'last_name' => "Reedus",
        ]);
    }
}
