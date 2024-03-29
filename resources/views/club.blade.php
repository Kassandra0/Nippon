@extends('layouts.app')

@section('content')

<section class="premier-bloc">
    <div class="container">
        <h2 class="title2">Club</h2><br>
        <p>Le Budokan Jeanménil a été fondé en 1996 par Jean-Claude PECCE et Rachid BENSALAH.</p>
        <p>C'est un lieu où l'esprit traditionnel des arts martiaux japonais rencontre les techniques modernes de combat. 
            Situé à Jeanménil, cet établissement offre un cadre propice à l'apprentissage et au perfectionnement du Nippon Kempo, 
            un art martial qui se distingue par son approche complète du combat, intégrant à la fois des techniques de frappe, de projection et de saisie.</p>
        <p>Dirigé par des instructeurs expérimentés et passionnés, le club vise à développer non seulement les compétences physiques des pratiquants, mais aussi leur mentalité, en cultivant des valeurs telles que le respect, la discipline et la persévérance. 
            Les membres du club ont l'opportunité de s'entraîner dans un environnement sûr et respectueux, adapté à leur niveau de compétence, que ce soit en tant que débutant cherchant à découvrir les bases du Nippon Kempo ou en tant que pratiquant avancé aspirant à perfectionner ses techniques.</p>
        <p>Ce club fait partie de l’Association Nippon Kempo France (ANKF) dont le président du club est l'un des fondateurs de cette association sportive et depuis 2022, le club est affilié à la FFKDA (Fédération Française de Karaté et Disciplines Associées).</p>
        <p>Le club accueille des membres de tous âges à partir de 5 ans et de tous niveaux.</p>
        <p>Que ce soit pour la forme physique, la confiance en soi, ou simplement la passion pour les arts martiaux, le Budokan Jeanménil offre un environnement accueillant et stimulant pour tous ceux qui souhaitent explorer et maîtriser cet art martial fascinant.</p>
    </div>
</section>

<style>

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
