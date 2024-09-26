<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>{{$campus}}</h3>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
            <tr>
                <th>{{$item['nim']}}</th>
                <th>{{$item['name']}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('campus') }}">back</a>
</body>
</html>
