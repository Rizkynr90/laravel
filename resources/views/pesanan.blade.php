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
        <legend>Data Pesanan</legend>
        @foreach ($pesanan as $data)
            Nama Pelanggan : {{$data->nama_pelanggan}}<br>
            Nama Barang : {{$data->nama_barang}}<br>
            Jumlah Barang : {{$data->qty}}<br>
            Tanggal Pesan : {{$data->tgl_pesan}}<hr>
        @endforeach
    </fieldset>
</body>
</html>
