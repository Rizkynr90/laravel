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
        <legend>Data Pembelian</legend>
        <br>

            Nama Barang : {{$data['nama_barang']}}<br>
            Nama Suplier : {{$data['nama_suplier']}}<br>
            Jumlah Barang : {{$data['qty']}}<br>
            Tanggal : {{$data['tgl']}}<hr>
    </fieldset>
</body>
</html>
