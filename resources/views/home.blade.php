<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRAIN</title>
</head>
<body>
    <h1>Treni in partenza</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <p>{{$train->company}}</p>
                <p>{{$train->departure_station}}</p>
                <p>{{$train->arrival_station}}</p>
                <p>{{$train->departure_date}}</p>
            </li>

        @endforeach
    </ul>
</body>
</html>