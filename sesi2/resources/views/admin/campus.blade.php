<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($campus as $item)
    <h3>{{$item}}</h3>
    <h5><a href=" {{ route('campus.student', ['campus'=> $item]) }}">Lihat daftar mahasiswa</a></h5>
    @endforeach

</body>
</html>
