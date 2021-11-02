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
            <tr>
                <td>{{$single->real_name}}</td>
                <td>{{$single->hero_name}}</td>
                <td>{{$single->element}}</td>
                <td>{{$single->gender}}</td>
                <td>{{$single->power}}</td>
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
            <td>{{$ket}}</td>
            </tr>
        </table>
    </center>
</body>
</html>
