<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($trains as $train)
<ul>
    <li>azienda: {{ $train->company }}</li>
    <li>stazione di partenza: {{ $train->departure_station }}</li>
    <li>stazione di arrivo: {{ $train->arrival_station }}</li>
    <li>orario di partenza: {{ $train->time_departure }}</li>
    <li>orario di arrivo: {{ $train->time_arrival }}</li>
    <li>codice treno: {{ $train->train_code }} </li>
    <li>numero carrozze: {{ $train->wagons_number}} </li>
    <li>numero carrozze: {{ $train->on_time}} </li>
    <li>numero carrozze: {{ $train->cancelled}} </li>
</ul>
    @endforeach
</body>
</html>