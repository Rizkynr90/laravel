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
       <th bgcolor="yellow" colspan="9">Data Heroes</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Real Name</th>
            <th>Hero Name</th>
            <th>Element</th>
            <th>Gender</th>
            <th>Power</th>
            <th>Statements</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach ($hero as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->real_name}}</td>
            <td>{{$data->hero_name}}</td>
            <td>{{$data->element}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->power}}</td>
        @if ($data->power >= 100)
            @php
                $ket = "Powerful";
            @endphp
        @elseif ($data->power >= 75)
            @php
                $ket = "Strong";
            @endphp
        @elseif ($data->power >= 50)
            @php
                $ket = "Weak";
            @endphp
        @elseif ($data->power <= 20)
            @php
                $ket = "Non SuperHero";
            @endphp
        @endif
            <td>{{$ket}}</td>
            <td><button class="btn btn-warning">Show</button></td>
            <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        @endforeach
    </table>
</center>
</body>
</html>
