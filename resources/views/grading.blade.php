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
    nilai : {{$nilai}} <br>
    grade : 
    @if ($nilai> 89)
    A
    @elseif($nilai > 79)
    B 
    @elseif($nilai > 69)
    C
    @elseif($nilai > 59)
    D
    @else
    E
    @endif
    </h1>
</body>
</html>