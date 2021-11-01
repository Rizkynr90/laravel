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
        <legend>Data Posts</legend>
        <br>
        @foreach ($posts as $data)
            <strong>{{$data->title}}</strong><br>
            {{$data->content}}
        @endforeach
    </fieldset>
</body>
</html>
