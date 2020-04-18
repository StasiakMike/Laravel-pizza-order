@extends('layouts/layout')
@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/LOGO4.png" alt="logo">
        <div class="title m-b-md">
            About project<br>
        </div>

        <div class="links">     
            <a href="/">&Larr; Back to main page</a>
            <a href="{{ route('pizzas.create') }}">Order Pizza</a>
        </div>
    </div>
</div>


@endsection