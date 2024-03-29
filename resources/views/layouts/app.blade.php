<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budokan Jeanmenil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fbfcfd;">
            <div class="container-fluid">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('accueil') }}">
                      <!--<img src="logo.webp" alt="" width="40" height="34" class="d-inline-block align-text-top">-->
                      Budokan Jeanmenil
                    </a>
                  </div>
                
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!--Menu déroulant-->
                        <!--Nippon Kempo-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Nippon Kempo</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                              <li><a class="dropdown-item" href="{{ route('histoire-nippon') }}">Histoire</a></li>
                              <li><a class="dropdown-item" href="{{ route('kata') }}">Kata</a></li>
                              <li><a class="dropdown-item" href="{{ route('arbitrage') }}">Arbitrage</a></li>
                            </ul>
                        </li>

                        <!--Club-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('club') }}" role="button" aria-expanded="false">Club</a>
                        </li>

                        <!--Calendrier-->
                        <li class="nav-item dropdown">
                            <a class="nav-link"  href="{{ route('calendrier') }}" role="button" aria-expanded="false">Calendrier</a>
                        </li>  

                        <!--Contact-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('contact') }}" role="button" aria-expanded="false">Contact</a>
                        </li>
               
                    </ul>
                </div>
            </div>  
        </nav>

        <main>
          @yield('content')
        </main>
    </div>
    
</body>

<footer>
    <div class="footer-container">
        <p>&copy; 2023-2024 Budokan Jeanmenil. Tous droits réservés.</p>
        <p>Site crée par Kassandra DEMAZIERE</p>
        <ul>
            <li><a href="{{ route('mention') }}">Mentions légales</a></li>
            <li><a href="https://www.facebook.com/budokan.jeanmenil.5">Facebook</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
</footer>

</html>

<style>

    /*Navbar*/
    .navbar-light .navbar-nav .nav-link {
        color: black !important;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
        background-color: #fbfcfd;
    }

    .dropdown-menu-dark .dropdown-item:focus, .dropdown-menu-dark .dropdown-item:hover {
        background-color: lightgray;
    }

    .dropdown-menu-dark .dropdown-item {
        color: #222f3e;
    }


    /*Footer*/
    footer {
        background-color: #fbfcfd;
        padding: 20px 0;
        text-align: center;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    footer p {
        margin-bottom: 10px;
        color: black;
    }

    footer ul {
        list-style-type: none;
        padding: 0;
    }

    footer li {
        display: inline;
        margin: 0 10px;
    }

    footer a {
        color: #333;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }

</style>


<script>
    // Fonction pour bloquer le clic droit sur le site

    //function bloqueClicDroit(event) {
        // Annule l'action par défaut du clic droit
        //event.preventDefault();
    //}

    // Écouteur d'événements pour détecter le clic droit
    //document.addEventListener("contextmenu", bloqueClicDroit);
</script>