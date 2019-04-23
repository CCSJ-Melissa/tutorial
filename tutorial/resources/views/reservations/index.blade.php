<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>All Reservations</h1>
  <ul>
    @foreach ($reservations as $reservation)
      <li>{{$reservation->room_no}} {{$reservation->start_date}}< {{$reservation->end_date}}</li>
      @endforeach
  </ul>
</body>
</html>
