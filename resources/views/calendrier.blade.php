@extends('layouts.app')

@section('content')

<section class="premier-bloc">
    <div class="container">
        <h2 class="title2">Calendrier</h2><br>
        <table class="table table-bordered table-striped table-hover table-dark">
            <tbody>
                <tr>
                    <td>Samedi 9 Septembre 2023</td>
                    <td>Réunion pour tous les clubs de nippon kempo français <strong>de 14h30 à 18h00 à Sainte-Marguerite</strong></td>
                </tr>
                <tr>
                    <td>Dimanche 17 Septembre 2023<br></td>
                    <td>Compétition "ALL JAPON CHAMPIONSHIP 2023" au <strong>Japon</strong></td>
                </tr>
                <tr>
                    <td>Samedi 7 Octobre 2023</td>
                    <td>Évènement Décathlon à <strong>Épinal</strong></td>
                </tr>
                <tr>
                    <td>Samedi 25 Novembre 2023</td>
                    <td>Stage d'arbitrage et entraînement de masse dirigé par Monsieur BENSALAH Rachid (CN 5ème dan) et Monsieur MARION Roland (CN 4ème dan)<br>
                        <strong>De 14h00 à 17h00 à Sainte-Marguerite</strong>
                    </td>
                </tr>
                <tr>
                    <td>Dimanche 26 Novembre 2023</td>
                    <td>Compétition interclub<br>
                        <strong>De 13h30 à 19h00 à Châtenois</strong>
                    </td>
                </tr>
                <tr>
                    <td>Samedi 13 Janvier 2023</td>
                    <td>Stage technique dirigé par Monsieur ZOUBIRI Ali (CN 7ème dan)<br>
                        <strong>De 14h00 à 17h00 à Sainte-Marguerite</strong>
                    </td>
                </tr>
                <tr>
                    <td>Samedi 24 Février 2024</td>
                    <td>Stage d'arbitrage dirigé par Monsieur BENSALAH Rachid (CN 5ème dan) et Monsieur MARION Roland (CN 4ème dan)<br>
                        <strong>De 14h00 à 17h00 à Sainte-Marguerite</strong>
                    </td>
                </tr>
                <tr>
                    <td>Samedi 9 Mars 2024</td>
                    <td>Coupe de France<br>
                    Lors de cette compétition, il y aura une sélection pour le championnat mondial de Nippon Kempo à Osaka (Japon) de septembre 2024<br>
                    <strong>13h00 : pesée - 14h00 : compétition à Sainte-Marguerite</strong>
                    </td>
                </tr>
                <tr>
                    <td>Dimanche 14 Avril 2024</td>
                    <td>Convention d'arts martiaux<br>
                        <strong>De 9h00 à 12h00 et de 14h00 à 17h00 à Sainte-Marguerite ou à Saint-Dié-des-Vosges</strong>
                    </td>
                </tr>
                <tr>
                    <td>Samedi 8 Juin 2024</td>
                    <td>Compétition de kata<br>
                        <strong>De 14h00 à 18h30 à Sainte-Marguerite</strong>
                    </td>
                </tr>
            </tbody>
        </table>
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
