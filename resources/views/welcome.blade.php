@extends('layouts.app')

@section('content')

<!--Bloc : image-->
<section class="bloc">
    <div class="top-page">
        <h1 class="title">Budokan Jeanmenil</h1>
    </div>
</section>

 <!--Bloc : résumé + actu-->
 <section class="premier-bloc">
    <div class="row">
        <div class="col-10 col-md-8">
            <h2>Aperçu</h2><br />
            <p>Le Nippon Kempo, une fusion gracieuse d'art martial et de philosophie, incarne l'essence même de la discipline et de la force japonaises. 
            Ancré dans l'héritage martial séculaire du Japon, le Nippon Kempo offre une voie vers la découverte de soi-même, de sa force intérieure et de sa maîtrise.</p>
            <p>À travers des techniques fluides et puissantes, le Nippon Kempo enseigne non seulement les compétences de combat, mais aussi la discipline mentale et émotionnelle. 
                Les kempokas apprennent à canaliser leur énergie et leur concentration, à développer leur agilité et leur flexibilité, et à cultiver un esprit de respect et de bienveillance envers les autres.</p>
            <p>Que ce soit pour renforcer le corps, discipliner l'esprit ou simplement pour découvrir une nouvelle passion, le Nippon Kempo offre un voyage fascinant et enrichissant. 
                Rejoignez-nous dans cette aventure où l'ancien et le moderne se rencontrent dans une harmonie parfaite, et où chaque mouvement est une expression de grâce, de force et de sagesse.</p>
        </div>
        <div class="col-md-4 droite">
            <span class="title-actu">Suivez notre actualité</span>
            <div class="slide-container"><br />
                <img src="/image/club.png" alt="Reprise" class="img-fluid" height="300px" width="500px">
                <p class="actu" style="margin-top: 10px;">Rejoignez-nous pour un voyage captivant vers la maîtrise de soi.</p>
            </div>
            <div class="slide-container"><br />
                <img src="/image/competition(1).png" alt="Compétition 9 Mars 2024 : Matin" class="img-fluid" height="300px" width="500px">
                <p class="actu" style="margin-top: 10px;">Félicitations à tous pour la compétition du 9 Mars 2024</p>
            </div>
            <div class="slide-container"><br />
                <img src="/image/competition(2).png" alt="Compétition 9 Mars 2024 : Après-midi" class="img-fluid" height="300px" width="500px">
                <p class="actu" style="margin-top: 10px;">Félicitations à Mickaël L. qui s'est qualifié pour le Japon</p>
            </div>
            <div class="slide-container"><br />
                <img src="/image/event.png" alt="Prochainement" class="img-fluid" height="300px" width="500px">
                <p class="actu" style="margin-top: 10px;">Convention des arts martiaux le 14 Avril 2024</p>
            </div>

            <!--Pointeur slide-->
            <div class="slide-dot" data-was-processed="true">
                <span class="dot active" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </div>
</section>

<!--Bloc : Informations-->
<section class="informations" id="informations">
    <h1 class="title1">Informations</h1>
    <div class="informations-details">
        <div class="carte">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10609.683080113708!2d6.700949282689574!3d48.33321710526334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479391316a76b6df%3A0x2734f2bb36e3ae07!2sTerrain%20de%20Football!5e0!3m2!1sfr!2sfr!4v1694537132529!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="lieu">
            <h1>Lieu</h1><br />
            <p>Dojo à côté du Terrain de football</p>
            <p>Rue de la Haye Baneau</p>
            <p>88700 Jeanménil</p>
        </div>
        <div class="date">
            <h1>Date</h1><br />
            <p>Enfant/Adultes :</p>
            <p>Samedi</p>
            <p>9h30 à 11h30/12h</p>
        </div>
    </div>
    <div class="d-grid gap-2 contact">
        <a href="#" class="btn btn-primary lien-contact" type="button">Contact</a>
    </div>
</section>

<style>
    /*Page*/
    html{
        scroll-behavior:smooth;
    }

    body{
        margin: 0;
        padding:0;
        font-family: 'Raleway', sans-serif;
    }

    /*Top page*/
    .top-page{
        height:50vh;
        background-image: url('/image/top-page(1).png');
        background-size: cover;
        text-align:center;
        color: white;
    }

    .title {
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 4em;
        text-align: center;
        position: relative;
        top: 30%;
    }

    /*Bloc = résumé + actu*/
    .premier-bloc{
        background-color: #222f3e;
        color:#fff;
        padding:25px;
        display:flex;
        flex-wrap:wrap;
    }
    
    .row {
        width: 100%;
        float: left;
        box-sizing: border-box;
    }

    .premier-bloc .droite {
        text-align: center;
        border: 1px solid white;
    }

    .droite {
        text-align: center;
        margin-top: 1%;
    }

    /*liste*/
    .slide-container {
        max-width: 800px;
        position: relative;
        margin: auto;
    }

    .dot{
        cursor: pointer;
        height: 10px;
        width: 10px;
        margin: 0 2px;
        background-color: #999999;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: black;
    }


    /*Deuxieme bloc = Informations*/
    .title1 {
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 2em;;
    }
    .informations{
        padding:30px;
        background-color: lightgray;
        background-position:center;
        color:#fff;
    }

    .informations h1, .informations p{
        text-align:center;
    }

    .informations .informations-details{
        margin-top: 30px;
        display:flex;
        flex-wrap:wrap;
        align-items:center;
        justify-content:center;
    }

    .informations .carte,
    .informations .date,
    .informations .lieu{
        background-color:#fff;
        color:#000;
        padding:20px;
        margin-right: 30px;
        margin-bottom: 20px;
        text-align: center;
        border-style: outset;
        border-style: double;
        border-width: thick;
        border-color: #121146;
        border-radius: 15px;
    }

    .contact {
        text-align: center;
    }

    .lien-contact {
        border: 1px solid #18212b ;
        border-radius: 15px;
    }


    /*Footer*/
    footer {
        background-color: #18212b;
        padding: 30px;
        color: #fff;
        display: flex;
        flex-wrap:wrap;
        justify-content: space-between;
    }

    footer .social-media{
        display: flex;
    }

    footer .social-media p{
        margin-right: 15px;
        border: 1px solid #fff;
        border-radius: 100%;
        padding: 5px;
        text-align:center;
        width: 30px;
        cursor:pointer;
    }

    .navbar .icon {
        display: none;
    }

    /*Responsive*/
    @media screen and (max-width: 810px){
        .carte {
            display: none;
        }

        .date {
            width: 70%;
        }

        .informations .date,
        .informations .lieu{
            margin-right: 0px;
        }

        .top-page{
            background-image: url('/image/top-page-mobile.png');
        }
        
    }

</style>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide-container");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }

    setInterval("plusSlides(1)", 7000);


    function myFunction() {
        var x = document.getElementById("mynavbar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
            
        }
    }
</script>

@endsection
