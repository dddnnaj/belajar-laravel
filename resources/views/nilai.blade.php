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
    nama : {{$nama}} <br>
    mapel : {{$mapel}} <br>
    nilai: {{$nilai}} <br>
    status kelulusan : 
    @if ($nilai > 75)
        lulus
    @else
        tidak lulus
    @endif
    </h1>
</body>
</html>