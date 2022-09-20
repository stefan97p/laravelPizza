@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">View orders</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src = "/img/pizzalogo.jpg">
        <div class="title m-b-md">           
            The right slice at the right price
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <td><button onclick="location.href='{{ url('pizzas/create') }}'" class="order">PIZZA</button></td>
    </div>
</div>
@endsection