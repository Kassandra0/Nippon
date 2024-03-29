@extends('layouts.app')

@section('content')

<section class="premier-bloc">
    <div class="container">
        <h2 class="title2">Mentions Légales</h2><br>
        
        <h3>Édition</h3>
        <p><strong>Budokan Jeanmenil</strong></p>
        <p>Association de sport à but non lucratif</p>
        <br>

        <h3>Développement du site</h3>
        <p><strong>Kassandra DEMAZIERE</strong></p>
        <p>kassandra88@live.fr</p>
        <br>
        
        <h3>Hébergement</h3>
        <p><strong>OVH</strong></p>
        <p>2 rue Kellermann, 89100 Roubaix, France</p>
        <p>Capital social : 10 000 000€</p>
        <p>RCS Lille Métropole sous le numéro 424 761 419 00045</p>
        <p>SIRET : 42476141900045</p>
        <p>Code APE : 2620Z</p>
        <br>

        <h3>Propriété intellectuelle</h3>
        <p>Le contenu de ce site est la propriété du Budokan Jeanmenil. Toute reproduction ou utilisation sans autorisation préalable est strictement interdite.</p>
        <br>

        <h3>Protection des données personnelles</h3>
        <p>Les informations collectées à travers ce site sont destinées au Budokan Jeanmenil et ne seront en aucun cas cédées à des tiers. 
            Conformément à la loi "Informatique et Libertés", vous disposez d'un droit d'accès, de modification et de suppression de vos données. 
            Pour exercer ce droit, veuillez nous contacter.
        </p>
        <br>
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
