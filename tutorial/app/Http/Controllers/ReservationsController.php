<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationsController extends Controller
{
  public function index()
  {
    $reservations = Reservation::all();
    return view ('reservations.index', ['reservations' => $reservations]);
  }

  public function create()
  {

    //dd('hello');
    return view ('reservations.create');
     // $reservation->start_date = new \DateTime($request->input('date'));
     // $reservation->end_date = new \DateTime($request->input('date'));
  }

  public function store()
  {
    // dd('inside store');

    $reservation = new Reservation();

    $reservation->room_no = request('room_no');
    $reservation->start_date = request('start_date');
    $reservation->end_date = request('end_date');
    // dd($customer);
    $reservation->save();

    return redirect('/reservations');
  }
}
