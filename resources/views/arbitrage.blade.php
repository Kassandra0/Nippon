@extends('layouts.app')

@section('content')

<section class="arbitrage">
    <div class="container">
        <h1 class="title1">Arbitrage</h1><br>
        <div class="arbitrage-details">
            <img src="/image/arbitre.jpg" alt="Arbitrage" class="img-fluid">
        </div>
        <br>
    </div>
</section>

<style>
    .arbitrage{
        background-color: #222f3e;
        color:#fff;
        padding:30px;
        text-align: center;
    }

    .container {
        text-align: center;
        background-color : lightgray;
        color: black;
        border-style: outset;
        border-style: double;
        border-width: thick;
        border-color: #121146;
        border-radius: 15px;
    }
</style>

@endsection
