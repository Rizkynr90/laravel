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
        <br>
            Real Name : {{$single['real_name']}}<br>
            Hero Name : {{$single['hero_name']}}<br>
            Element : {{$single['element']}}<br>
            Gender : {{$single['gender']}}<br>
            Power : {{$single['power']}}<br>

            @if ($single['power'] >= 100)
                @php
                    $ket = "Sangat Kuat";
                @endphp
            @elseif ($single['power'] >= 75)
                @php
                    $ket = "Kuat";
                @endphp
            @elseif ($single['power'] >= 50)
                @php
                    $ket = "Lemah";
                @endphp
            @elseif ($single['power'] <= 20)
                @php
                    $ket = "Manusia Biasa";
                @endphp
            @endif
            Keterangan : <b>{{$ket}}</b><hr>
    </fieldset>
</body>
</html>
