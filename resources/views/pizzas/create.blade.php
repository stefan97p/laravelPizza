@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Pick your pizza!</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
        <label for="type">Chose your pizza:</label>
        <select name="type" id="type">
            <option value="margarita">MARGATITA</option>
            <option value="funghi">FUNGHI</option>
            <option value="vegeteriano">VEGETERIANO</option>
            <option value="capricosa">CAPRICOSA</option>
            <option value="quatroformaggi">QUATRO FORMAGGI</option>
        </select>
        <label for="base">Size:</label>
        <select name="base" id="base">
            <option value="m">M</option>
            <option value="l">L</option>            
        </select>
        <input type="submit" value="Confirm your order">           
    </form>
</div>
    
@endsection