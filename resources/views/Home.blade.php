<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Train Table</title>
</head>
<body>
    <main>
        <h2>Here Trains</h2>
        <div class="container">
            @foreach ($trains as $train)
                @if ($train->departure_time(Y-m-d) == now(Y-m-d)) {
                    return $train->train_number;
                }            
                @endif                
            @endforeach
        </div>
    </main>
</body>
</html>