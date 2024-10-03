@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col">
            <div class="mt-4 p-5 bg-primary text-white rounded">
                <h1>Jumbotron example</h1>
                <p>lorem ipsum</p>
            </div>
        </div>
    </div>

    <div class="row mt-2">

        @foreach ($campus as $item)
        <div class="col-4">

            <div class="card" style="width:400px">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUFN6TWWC_D502V5mqEXTXBZWqADp89Rqn6g&s" alt="Card image" style="max-height: 200px;">
                <div class="card-body">
                <h4 class="card-title">{{$item}}</h4>
                <a href=" {{ route('campus.student', ['campus'=> $item]) }}" class="btn btn-outline-primary">See Profile</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>
@endsection
