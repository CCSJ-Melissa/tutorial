<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeders extends Seeder
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
    }
}
