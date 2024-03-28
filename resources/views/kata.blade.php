@extends('layouts.app')

@section('content')

<section class="kata" id="kata">
    <h1 class="title1">Programme kata ceinture</h1><br>
    <div class="kata-details">
        <div class="kata1">
            <h3>Ceinture blanche / Ceinture jaune</h3><br />
            <a href="https://www.youtube.com/watch?v=7pelUfLa6Gg&feature=youtu.be" class="btn btn-warning">Go Ompa No Kata</a>
        </div>
        <div class="kata2">
            <h3>Ceinture orange</h3><br />
            <a href="https://www.youtube.com/watch?v=1AmtYhHusNM&feature=youtu.be" class="btn button-orange">Chigeki No Kata</a>
        </div>
        <div class="kata3">
            <h3>Ceinture verte</h3><br />
            <a href="https://www.youtube.com/watch?v=9GYDAGetlkA" class="btn btn-success">San Chigeki No Kata</a>
        </div>
        <div class="kata4">
            <h3>Ceinture bleu</h3><br />
            <a href="https://www.youtube.com/watch?v=kAYBg4UEB_I&feature=youtu.be" class="btn btn-primary">Kyojutu No Kata</a>
        </div>
        <div class="kata5">
            <h3>Ceinture marron</h3><br />
            <a href="https://www.youtube.com/watch?v=LZXasI8cUXk" class="btn button-marron">Karyu No Kata</a>
        </div>
        <div class="kata6">
            <h3>Ceinture noire</h3><br />
            <a href="#" class="btn btn-dark">Kumi Uchi Kadaï</a>
        </div>
    </div>
</section>

<style>
    /*Deuxieme bloc = programme*/
    .title1 {
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 2em;;
    }
    
    .kata{
        padding:30px;
        background-color: lightgray;
        background-position:center;
        color:#fff;
    }

    .kata h1, .kata p{
        text-align:center;
    }

    .kata .v-details{
        margin-top: 30px;
        display:flex;
        flex-wrap:wrap;
        align-items:center;
        justify-content:center;
    }

    .kata-details {
        text-align: center;
    }

    .kata .kata1,
    .kata .kata2,
    .kata .kata3,
    .kata .kata4,
    .kata .kata5,
    .kata .kata6{
        background-color:#fff;
        color:#000;
        padding:20px;
        margin-right: 30px;
        margin-bottom: 20px;
    }

    .button-orange {
        background-color: #F0952E;
    }

    .button-marron {
        background-color: brown;
    }
</style>

@endsection
