<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('reservations')->insert([
         'room_no'=> 100,
         'start_date'=> Carbon::createFromDate(2019, 4, 11),
         'end_date'=> Carbon::createFromDate(2019, 4, 15),
         'amount' => 0,
         'customer_id' => 1
        ]);
     // DB::table('reservations')->insert([
     //     'id' => 9,
     //     // 'last_name' => "Noogie"
     //     // 'first_name' => "Douglas"
     //     'room_type' => "Deluxe"
     //     'date' => "August3"
     //     'is_clean' => true
     // ]);
     // DB::table('reservations')->insert([
     //     'id' => 10,
     //     // 'last_name' => "Cat"
     //     // 'first_name' => "Felix"
     //     'room_type' => "Deluxe"
     //     'date' => "August5"
     //     'is_clean' => false
     // ]);
     // DB::table('reservations')->insert([
     //     'id' => 11,
     //     // 'last_name' => "Thornberry"
     //     // 'first_name' => "Nigel"
     //     'room_type' => "Economy"
     //     'date' => "August6"
     //     'is_clean' => true
     // ]);
     // DB::table('reservations')->insert([
     //     'id' => 12,
     //     // 'last_name' => "Rampant"
     //     // 'first_name' => "Dino"
     //     'room_type' => "Deluxe"
     //     'date' => "August10"
     //     'is_clean' => true
     // ]);
   }

}
