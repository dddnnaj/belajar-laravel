<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
    andi : {{$andi}} <br>
    budi : {{$budi}} <br>
    citra : {{$citra}}
    rata rata nilai: 
    @if ($nilai> 89)
    satu kelas lulus
    @elseif($nilai < 75)
    satu kelas remedial
    @endif
    </h1>
</body>
</html>