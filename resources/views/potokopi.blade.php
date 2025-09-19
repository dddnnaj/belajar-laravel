<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body align="center">
    <table align="center">
        <tr>
            <td><center><h1>{{$potokopi}}</h1></center>
    @foreach ($data as $barang)  <br> 
       nama: {{$barang['barang']}} <br> 
       harga: {{$barang['harga']}}<br> 
       qty:{{$barang['qty']}}<br> 
       @php $subtotal = $barang['qty'] * $barang['harga']; @endphp
       subtotal:{{$subtotal}}   
       @if($subtotal > 150000)
       @else
       @endif   
       <hr>
    @endforeach</td>
        </tr>
    </table>
</body>
</html>