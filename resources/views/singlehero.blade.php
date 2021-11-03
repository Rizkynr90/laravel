<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Heroes</legend>
        ID : {{ $single['id']}}<br>
        Real Name : {{ $single['real_name']}}<br>
        Hero Name : {{ $single['hero_name']}}<br>
        Element : {{ $single['element']}}<br>
        Gender : {{ $single['gender']}}<br>
        Power : {{ $single['power']}}<br>
        @if ($single['power'] >= 100)
                @php
                    $ket = "Powerful";
                @endphp
            @elseif ($single['power'] >= 75)
                @php
                    $ket = "Strong";
                @endphp
            @elseif ($single['power'] >= 20)
                @php
                    $ket = "Weak";
                @endphp
            @else
                @php
                    $ket = "Non SuperHero";
                @endphp
            @endif
                Statement : {{$ket}}<hr>
    </fieldset>
    <a href="{{url('hero')}}">Back</a>
</body>
</html>
