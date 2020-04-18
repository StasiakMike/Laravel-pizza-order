
@extends('layouts/layout')
@section('content')
<a href="/login">Login</a>

<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/LOGO4.png" alt="logo">
        <div class="title m-b-md">
            MvdB Pizza House<br>
        </div>
    <p class="mssg">{{ session('mssg') }}</p>

        <div class="links">     
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('pizzas.create') }}">Order Pizza</a>
        </div>
    </div>
</div>

@endsection
    
