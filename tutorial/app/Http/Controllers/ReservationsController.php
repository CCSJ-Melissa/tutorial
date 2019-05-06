<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Customer;

class ReservationsController extends Controller
{
  public function index()
  {
    $reservations = Reservation::all();
    return view ('reservations.index', ['reservations' => $reservations]);
  }

  public function create()
  {
    dd("god help me");
    return view ('reservations.create');

  }

  public function create_reservation($id)
  {
    // dd("god help me");
    // dd($id);
    // dd(customer_id);
    // dd($request);
    // $customer->first_name = request('first_name');
    // $customer->last_name = request('last_name');
    // $last_name = "Jones";
    // $first_name = "Mark";

    // $customers = Customer::all();
    // dd($customers);
    $customer = Customer::find($id);
    // dd($customer);
    // // $data = [
    //   'last_name' => $last_name,
    //   'first_name' => $first_name,
    // ];

    return view ('reservations.create', compact('customer'));

    // return view ('reservations.create', [
    //   'last_name' => $last_name,
    //   'first_name' => $first_name,
    // ]);

  }

  public function store(Request $request,$customer_id)
  {
    // dd('inside store');
     //  $data =[
     //    $request->customer_id,
     //    $request->room_no,
     //    $request->start_date,
     //    $request->end_date,
     //    $request->category,
     //  ];
     // dd($data);
     dd("inside store");
    $reservation = new Reservation();

    $reservation->room_no = request('room_no');
    $reservation->start_date = request('start_date');
    $reservation->end_date = request('end_date');
    $reservation->amount = request('amount');
    $reservation->customer_id = request('customer_id');
    $reservation->category= request('category');
    // // dd($customer);
     $reservation->save();

    return redirect('/customers');
  }
}
