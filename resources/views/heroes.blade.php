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
        @foreach ($hero as $data)
            Real Name : {{$data->real_name}}<br>
            Hero Name : {{$data->hero_name}}<br>
            Element : {{$data->element}}<br>
            Gender : {{$data->gender}}<br>
            Power : {{$data->power}}<br>

            @if ($data['power'] >= 100)
                @php
                    $ket = "Sangat Kuat";
                @endphp
            @elseif ($data['power'] >= 75)
                @php
                    $ket = "Kuat";
                @endphp
            @elseif ($data['power'] >= 50)
                @php
                    $ket = "Lemah";
                @endphp
            @elseif ($data['power'] <= 20)
                @php
                    $ket = "Manusia Biasa";
                @endphp
            @endif
            Keterangan : <b>{{$ket}}</b><hr>
        @endforeach
    </fieldset>
</body>
</html>
