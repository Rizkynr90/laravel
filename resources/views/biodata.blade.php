<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <fieldset>
        <legend><h3>Biodata</h3></legend>
    @if ($nama == null)
        Isi dulu biodata anda
    @elseif ($nama != null)
        Nama : {{$nama}}<br>
    @endif
    @if ($alamat != null)
        Alamat : {{$alamat}}<br>
    @endif
    @if ($jk != null)
        Jenis Kelamin : {{$jk}}<br>
    @endif
    @if ($tb != null)
        Tinggi Badan : {{$tb}}<br>
    @endif
    @if ($bb != null)
        Berat Badan : {{$bb}}
    @endif
</fieldset>
</body>
</html>
