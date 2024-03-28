@extends('layouts.app')

@section('content')

<section class="premier-bloc">
    <div class="container">
        <h2 class="title2">Le Nippon Kempo, une histoire</h2><br>
        <p>Le <strong>Nippon Kempo</strong> ou nihon kempo est un art martial japonais qui fut <strong>créé en 1932</strong> par le professeur <strong>Sawayama Masaru Muneumi</strong>.
        Nippon Kempo signifie littéralement "<strong>méthode du poing du Japon</strong>" (Kempo = "méthode du poing").</p>
        <img src="/image/nippon-kempo-sawayama.jpg" alt="Maitre Sawayama"  class="img-fluid" title="Maitre Sawayama">
        <p>Cet art martial regroupe différentes techniques telles que les percussions (attaques de poings et pieds), les luxations, les projections et le travail au sol.</p>
        <br />
        <p>Sa particularité réside dans sa tenue vestimentaire qui ressemble à une tenue de Kendo.</p>
        <p>En effet, la tenu d'un kempokas (Bogu) est composé d'une cuirasse (DO), d'un casque (Men), d'une paire de gant et d'une coquille</p>
        <img src="/image/tenue.jpg" alt="Bogu"  class="img-fluid">
        <br />
        <p>Lors d'une démonstration fait au centre de Tokyo en 1953, maitre Sawayama avec ses soxiante-dix élèves, ont causé un boulversement dans le milieu des arts martiaux japonais.</p>
        <p>De nos jours, cet discipline est pratiqué dans plus de cent universités, cinquante écoles supérieures, cent clubs, dans l'armée, dans la police et dans les pompiers. En effet, il y a plus de trente milles pratiquant au Japon.</p>
        <br /><br />

        <h2 class="title2">Le Nippon Kempo en France</h2><br>
        <p>Il faut attendre 30 ans plus tard soit en 1984, pour voir l'apparition de cette pratique en France.</p>
        <p>Suite à cette découverte, un professeur de judo nommé Ali Zoubiri deviendra l’ambassadeur du Nippon Kempo en France et à travers le monde. 
            Durant l'année 2018, Ali Zoubiri fut reconnu par la All Japan Fédération de Nippon Kempo, 7D (dan), ce qui lui permet d'être le plus haut gradé de Nippon Kempo hors Japon.</p>
        <p>L'ANKF (Association Nippon Kempo France) gére une quinzaine de club en France, elle est la représentante officielle de la Fédération de Nippon Kempo Ren Mei.</p>
        <p>Les valeurs qui sont représentés à travers cet art sont l’amitié, l’honneur, le respect, la volonté ou encore l’absence de préjugés.</p>
        <img src="/image/ali-zoubiri.jpg" alt="Ali Zoubiri" title="Ali Zoubiri" class="img-fluid">
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

    /*Image histoire*/
    .img-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 25px;
    }

</style>

@endsection
