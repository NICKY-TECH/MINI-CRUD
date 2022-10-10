@extends('layout')
@section('content')
<h1 class="text-center my-5">MY FAVOURITES 	&#128523;</h1>
    <div class="container mt-5">
        @foreach ( $food as $dish)
        <div class="row">
            <div class="section">
                <div class="food-details">
                    <p class="food h5">
                        {{ $dish->food }}
                    </p>
                    <p class="ingredient">
                        {{ $dish->ingredient }}
                    </p>
                    <p class="remark">
                        {{ $dish->remark }} 
                        <span class="text-danger">&hearts;</span>
                    </p>
                </div>
                <div class="u-d">
                    <form method="GET" action="/food/{{ $dish->id }}/edit" class="mb-4">
                        <button class="update btn text-white btn-success">
                            Edit
                        </button>
                    </form>
                    <form action="/food/{{ $dish->id }}/edit" method="GET">
                        <button class="delete text-white btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            <hr>
        </div>
            
        @endforeach
    </div>
@endsection