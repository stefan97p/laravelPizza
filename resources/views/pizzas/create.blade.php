@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Pick your pizza!</h1>
    <div class="gallery">
        <div class="column"><img id="img2" src="/img/margarita.jpg" alt="margarta"/></div>
        <div class="column"><img id="img3" src="/img/funghi.jpg" alt="funghi"/></div>
        <div class="column"><img id="img4" src="/img/vegeteriano.jpg" alt="vegeteriano"/></div>
        <div class="column"><img id="img1" src="/img/capricciosa.jpg" alt="capricciosa"/></div>
        <div class="column"><img id="img5" src="/img/quatro.jpg" alt="quatro"/></div>
        <div class="column"><img id="img2" src="/img/pepperoni.jpg" alt="pepperoni"/></div>
        <div class="column"><img id="img2" src="/img/hawaiian.jpg" alt="hawaiian"/></div>
        <div class="column"><img id="img2" src="/img/bbq.jpg" alt="bbq"/></div>
    </div>
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
            <option value="pepperoni">PEPPERONI</option>
            <option value="hawaiian">HAWAIIAN</option>
            <option value="bbq chicken">BBQ CHIKEN</option>
        </select>
        <label for="base">Size:</label>
        <select name="base" id="base">
            <option value="m">M</option>
            <option value="l">L</option>            
        </select>
        <fieldset>
            <label>Extra toppings: </label>
            <input type="checkbox" name="toppings[]" value="ketchup">Ketchup </br>
            <input type="checkbox" name="toppings[]" value="cheese">Cheese </br>
            <input type="checkbox" name="toppings[]" value="pappers">Pappers </br>
            <input type="checkbox" name="toppings[]" value="olives">Olives </br>           
        </fieldset>
        <input id="orderbtn" type="submit" value="Confirm your order">           
    </form>
    
</div>
    
@endsection