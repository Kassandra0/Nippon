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
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h2 class="title2">Contactez-nous</h2><br>
                
                <form action="{{ route('send.email') }}" method="POST" id="emailForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div><br>
                    <div class="form-group">
                        <label for="email">Adresse e-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div><br>
                    <div class="form-group">
                        <label for="message">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Envoyer</button>
                </form>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('emailForm'); // Id du formulaire
        const submitBtn = document.getElementById('submitBtn'); // Id du bouton d'envoi
        const originalText = submitBtn.innerText; // Texte original du bouton

        form.addEventListener('submit', function() {
            submitBtn.innerText = 'Envoi en cours...'; // Changement du texte du bouton pendant l'envoi
        });

        // Réactive le texte du bouton lors de la fin de l'envoi (simulé ici avec un délai de 3 secondes)
        form.addEventListener('submit', function() {
            setTimeout(function() {
                submitBtn.innerText = originalText;
            }, 3000);
        });

        form.addEventListener('submit', function() {
            submitBtn.disabled = true; // Désactive le bouton d'envoi
        });
    });


</script>


@endsection
