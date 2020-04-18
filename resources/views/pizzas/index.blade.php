@extends('layouts.app')
@section('content')
{{--
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/LOGO4.png" alt="logo">
        <div class="title m-b-md">
            List of Pizzas<br>   
        </div>

        <div class="links">     
            <a href="/">&Larr; Back to main page</a>
            <a href="/about">About</a>
            <a href="/pizzas/create">Order Pizza</a>
        </div>
    </div>
</div>
--}}
<div class="wrapper pizza-index">
    
    <h1>Pizza orders</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza.svg" alt="logo">
            <h4><a href="/pizzas/{{ $pizza->id }}}">{{ $pizza->name }}</a></h4>
        </div>
    @endforeach
</div>
        

        
       
@endsection
   
