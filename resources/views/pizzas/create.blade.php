@extends('layouts.app')
@section('content')

<div class="wrapper create-pizza">
    <h1>Add new order</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">

        <label for="type">Select pizza type</label>
        <select name="type" id="type">
            <option value="Ham & cheese">Ham & cheese</option>
            <option value="Cheese supreme">Cheese supreme</option>
            <option value="Bacon & sausage">Bacon & sausage</option>
            <option value="Vegan">Vegan</option>
        </select>

        <label for="base">Select pizza base</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="crispy thin">Crispy thin</option>
            <option value="thick">Thick</option>
        </select>

        <fieldset>
            <label for="">Choose toppings</label><br>
            <input type="checkbox" name="toppings[]" value="Mozarella">Mozarella <br>
            <input type="checkbox" name="toppings[]" value="Olives">Olives <br>
            <input type="checkbox" name="toppings[]" value="Jalapenio">Jalapenio <br>
            <input type="checkbox" name="toppings[]" value="Kebab">Kebab <br>
            <input type="checkbox" name="toppings[]" value="Prawns">Prawns <br>
            <input type="checkbox" name="toppings[]" value="Curry Sauce">Curry Sauce <br>
        </fieldset>

        <input type="submit" value="Place the Order">

    </form>

</div>

{{--
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/LOGO4.png" alt="logo">
        <div class="title m-b-md">
            Add a Pizza<br>   
        </div>
        <div class="links">     
            <a href="/">&Larr; Back to main page</a>
            <a href="/about">About</a>
            <a href="/pizzas"> List of pizzas &Rarr;</a>
        </div>
    </div>
</div>
--}}
@endsection
   
