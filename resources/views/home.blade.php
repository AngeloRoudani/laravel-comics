@extends('layouts.app')


@section('title', 'nav')


@section('content')

<div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="card myCard">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{$comic['title']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection