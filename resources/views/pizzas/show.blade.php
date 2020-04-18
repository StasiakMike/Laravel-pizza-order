@extends('layouts.app')
@section('content')
{{--
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/LOGO4.png" alt="logo">
        <div class="title m-b-md">
            Pizza Details - {{ $id }}<br>
        </div>

        <div class="links"> 
            <a href="/">&Larr; Back to main page</a>    
            <a href="/about">About</a>
            <a href="/pizzas/create">Add Pizza</a>
            <a href="/pizzas"> List of pizzas &Rarr;</a>
        </div>
    </div>
</div>
--}}
<div class="wrapper pizza-details">
    <h1>Order placed by {{ $pizza->name }}</h1>
    <p class="type"> Pizza type - {{ $pizza->type }}</p>
    <p class="base"> Base - {{ $pizza->base }}</p>
    <p class="toppings">Toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{  $topping }}</li>
        @endforeach
    </ul>
<form action="/pizzas/{{ $pizza->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Order completed / Remove</button>
</form>
</div>
<div class="links"> 
    <a href="{{ route('pizzas.index') }}"> List of orders &Rarr;</a>
</div>
@endsection