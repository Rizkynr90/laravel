<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center>
    <table border="1" style="margin-top: 10%">
        <tr>
       <th bgcolor="yellow" colspan="6">Data Heroes</th>
        </tr>
        <tr>
            <th>Real Name</th>
            <th>Hero Name</th>
            <th>Element</th>
            <th>Gender</th>
            <th>Power</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($hero as $data)
        <tr>
            <td>{{$data->real_name}}</td>
            <td>{{$data->hero_name}}</td>
            <td>{{$data->element}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->power}}</td>
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
        <td>{{$ket}}</td>
        </tr>
        @endforeach
    </table>
</center>
</body>
</html>
