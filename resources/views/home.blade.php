@extends('layouts.app')


@section('title')
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@section('content')

@endsection