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
        DB::table('reservations')->insert([
         'room_no'=> 101,
         'start_date'=> Carbon::createFromDate(2019, 4, 16),
         'end_date'=> Carbon::createFromDate(2019, 4, 20),
         'amount' => 0,
         'customer_id' => 2
        ]);
        DB::table('reservations')->insert([
         'room_no'=> 102,
         'start_date'=> Carbon::createFromDate(2019, 4, 21),
         'end_date'=> Carbon::createFromDate(2019, 4, 25),
         'amount' => 0,
         'customer_id' => 3
        ]);
        DB::table('reservations')->insert([
         'room_no'=> 103,
         'start_date'=> Carbon::createFromDate(2019, 4, 26),
         'end_date'=> Carbon::createFromDate(2019, 4, 30),
         'amount' => 0,
         'customer_id' => 4
        ]);
        DB::table('reservations')->insert([
         'room_no'=> 104,
         'start_date'=> Carbon::createFromDate(2019, 4, 31),
         'end_date'=> Carbon::createFromDate(2019, 4, 36),
         'amount' => 0,
         'customer_id' => 5
        ]);
   }

}
