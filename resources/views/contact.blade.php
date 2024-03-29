@extends('layouts.app')

@section('content')

<section class="premier-bloc">
    <div class="container">
        <div class="contact1">
            <div class="left-div">
                <h2 class="title2">Contact</h2><br><br>
                <p>Rachid BENSALAH (Président)</p>
                <p>06.22.67.61.40</p><br><br>
                <p>Hugo HAMANT (Trésorier)</p>
                <p>06.23.05.33.41</p><br><br>
                <p>Mickaël LAGARDE (Secrétaire)</p>
                <p>06.11.24.30.61</p><br><br>
            </div>
            <div class="right-div">

                <h2 class="title2">Contactez-nous</h2><br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="nom">Nom <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div><br>
                    <div class="form-group">
                        <label for="email">Adresse e-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div><br>
                    <div class="form-group">
                        <label for="message">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            
                <?php
                // Vérifier si le formulaire a été soumis
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupération des données du formulaire
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $sujet = $_POST['sujet'];
                    $message = $_POST['message'];
            
                    // Adresse e-mail de destination
                    $to = "kassandra88@live.fr";
                    // Sujet de l'e-mail
                    $subject = "[Nippon Kempo] Demande de renseignement";
                    // Corps de l'e-mail
                    $body = "Nom: $nom\n\n";
                    $body = "Prenom: $nom\n\n";
                    $body .= "Téléphone: $tel\n\n";
                    $body .= "E-mail: $email\n\n";
                    $body .= "Sujet: $sujet\n\n";
                    $body .= "Message:\n$message";
            
                    // Envoi de l'e-mail
                    if (mail($to, $subject, $body)) {
                        echo "Votre message a été envoyé avec succès.";
                    } else {
                        echo "Une erreur s'est produite lors de l'envoi du message.";
                    }
                }
                ?>

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

    }
    
    .title2 {
        font-size: 2em;;
    }

    .contact1 {
        display: flex;
    }

    .left-div {
    flex: 1;
    margin-right: 10px;
    }

    .right-div {
        flex: 1;
        margin-left: 10px; 
    }

    .obligatoire {
        color: red;
    }
    
</style>

@endsection
