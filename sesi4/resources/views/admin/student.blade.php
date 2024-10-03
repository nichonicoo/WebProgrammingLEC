@extends('admin.layout')

@section('content')

<h3>{{$campus}}</h3>
<table class="table table-hover">
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

@endsection
