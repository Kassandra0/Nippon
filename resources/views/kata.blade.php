@extends('layouts.app')

@section('content')

<section class="premier-bloc">
    <div class="container">
        <h2 class="title2">Kata</h2><br>
        <div class="kata-details">

            <div class="kata1">
                <h3>Ceinture blanche / jaune</h3>
                <a href="https://www.youtube.com/watch?v=7pelUfLa6Gg&feature=youtu.be" class="btn btn-warning">Go Ompa No Kata</a>
            </div>
            <br>

            <div class="kata2">
                <h3>Ceinture orange</h3>
                <a href="https://www.youtube.com/watch?v=1AmtYhHusNM&feature=youtu.be" class="btn" style="background-color : orange">Chigeki No Kata</a>
            </div>
            <br>

            <div class="kata3">
                <h3>Ceinture verte</h3>
                <a href="https://www.youtube.com/watch?v=9GYDAGetlkA" class="btn btn-success">San Chigeki No Kata</a>
            </div>
            <br>

            <div class="kata4">
                <h3>Ceinture bleu</h3>
                <a href="https://www.youtube.com/watch?v=kAYBg4UEB_I&feature=youtu.be" class="btn btn-primary">Kyojutu No Kata</a>
            </div>
            <br>

            <div class="kata5">
                <h3>Ceinture marron</h3>
                <a href="https://www.youtube.com/watch?v=LZXasI8cUXk" class="btn" style="background-color: brown">Karyu No Kata</a>
            </div>
            <br>

            <div class="kata6">
                <h3>Ceinture noire</h3>
                <a href="#" class="btn btn-dark">Kumi Uchi Kadaï</a>
            </div>
            <br>
        </div>
    </div>
</section>

<style>
    /*Premier bloc = histoire */
    .premier-bloc{
        background-color: #222f3e;        
        color:#fff;
        padding:30px;
        display:flex;
        flex-wrap:wrap;
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
    
    .title2 {
        font-size: 2em;;
    }

</style>

@endsection
