@extends('layouts.app')

@section('content')

<section class="premier-bloc">
    <div class="container">
        <div class="contact1">
            <div class="text">
                <h2 class="title2">Le Nippon Kempo, une histoire</h2><br><br>
                <p>
                    L'histoire du Nippon Kempo (ou nihon kempo) remonte aux années 1930, période où le Japon se préparait militairement et socialement à des temps incertains.
                    C'est à cette époque plus précisement en 1932 que Muneomi Sawayama, un expert en arts martiaux japonais, a fondé le Nippon Kempo.
                </p>
                <p>
                    Nippon Kempo signifie littéralement "<strong>méthode du poing du Japon</strong>" (Kempo = "méthode du poing").
                </p>
                <p>
                    Sawayama a développé le Nippon Kempo en intégrant diverses techniques de combat japonaises traditionnelles telles que le karaté, le jujitsu, le judo, le kendo et d'autres formes de combat à mains nues. 
                    Il a cherché à créer un système d'autodéfense moderne et complet qui pourrait être adapté aux besoins changeants de la société japonaise.
                </p>
                <p>
                    Sa particularité réside dans sa tenue vestimentaire qui ressemble à une tenue de Kendo.
                    En effet, la tenu d'un kempokas (Bogu) est composé d'une cuirasse (DO), d'un casque (Men), d'une paire de gant et d'une coquille
                </p>
                <p>
                    Lors d'une démonstration fait au centre de Tokyo en 1953, maitre Sawayama avec ses soxiante-dix élèves, ont causé un boulversement dans le milieu des arts martiaux japonais.
                </p>
                <p>
                    Le Nippon Kempo se caractérise par son approche holistique de la défense personnelle, qui comprend des techniques de coups de poing, de coups de pied, de projections, de luxations et de contrôles au sol. 
                    Cet art martial met également l'accent sur le développement mental et spirituel de ses pratiquants, en les encourageant à cultiver des valeurs telles que la discipline, le respect, la persévérance et l'esprit d'équipe.
                </p>
                <p>
                    Au fil des ans, le Nippon Kempo a gagné en popularité au Japon et à l'étranger, attirant des praticiens de divers horizons. Des organisations et des fédérations ont été créées pour promouvoir et réglementer la pratique de cet art martial, contribuant ainsi à sa diffusion à travers le monde.
                </p>
                <p>
                    Aujourd'hui, le Nippon Kempo est pratiqué dans de nombreux pays et continue d'évoluer, s'adaptant aux besoins et aux contextes culturels de ses pratiquants. Il reste fidèle à ses racines japonaises tout en s'ouvrant à de nouvelles influences et en s'inscrivant dans la tradition des arts martiaux modernes.
                </p>            
            </div>
            <div class="image">
                <img src="/image/sawayama.jpg" alt="Sensei Muneomi Sawayama">
            </div>
        </div> <br><br>

        <div class="contact2">
            <div class="image">
                <img src="/image/ali.png" alt="Sensei Ali Zoubiri">
            </div>
            <div class="text">
                <h2 class="title2">Le Nippon Kempo, en France</h2><br><br>
                <p>
                    L'histoire du Nippon Kempo en France se fera 30 ans plus tard cependant il a suscité un intérêt croissant parmi les pratiquants d'arts martiaux en raison de sa philosophie et de ses techniques distinctives.
                </p>
                <p>
                    Suite à cette décoverte, un professeur de judo nommé Ali Zoubiri deviendra l’ambassadeur du Nippon Kempo en France et un ambassadeur à travers le monde. 
                    Durant l'année 2018, Ali Zoubiri fut reconnu par la All Japan Fédération de Nippon Kempo, 7D (dan), ce qui lui permet d'être le plus haut gradé de Nippon Kempo hors Japon.
                </p>
                <p>
                    Au fil des ans, le Nippon Kempo s'est développé en France grâce à l'engagement de ses pratiquants et de ses enseignants. 
                    Des fédérations et des associations ont été fondées pour organiser des compétitions, des stages et des événements visant à renforcer la communauté du Nippon Kempo et à promouvoir son enseignement à travers le pays.
                    Une des fédérations les plus importantes en France est présidé par l'ambassadeur du Nippon Kempo en France. Cette assicoiation est l'ANKF (Association Nippon Kempo France) qui gére une quinzaine de club en France, elle est la représentante officielle de la Fédération de Nippon Kempo Ren Mei.
                </p>
                <p>
                    Aujourd'hui, le Nippon Kempo continue de prospérer en France, avec de nombreux clubs offrant des cours pour les enfants et les adultes de tous niveaux. 
                    Il est apprécié non seulement pour ses techniques de combat efficaces, mais aussi pour les valeurs qu'il véhicule, telles que le respect, la discipline et la camaraderie. 
                    Le Nippon Kempo a trouvé sa place dans le paysage riche et diversifié des arts martiaux français, contribuant à enrichir la culture martiale du pays.
                </p>            
            </div>
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
        margin: 0 auto;
        padding: 20px;

    }
    
    .title2 {
        font-size: 2em;;
    }

    .contact1 {
        display: flex;
    }

    .contact2 {
        display: flex;
    }


    .image img {
        height: auto; 
    }

    @media screen and (max-width: 600px) {
        .image img {
            display: none;
        }
    }



</style>

@endsection
