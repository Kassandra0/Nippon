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
    <p>&copy;Copyright Budokan Jeanmenil. All Rights Reserved | Site crée par Kassandra Demaziere</p>
    <div class="social-media">
        <a href="mailto:nipponkempo03@gmail.com ?subject=[Renseignement]">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question" viewBox="0 0 16 16">
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
                </svg>
            </p>
        </a>
        <a href="https://www.facebook.com/budokan.jeanmenil.5">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
            </p>
        </a>
    </div>
</footer>

</html>

<style>
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
    border: 1px solid white;
    border-radius: 100%;
    padding: 5px;
    text-align: center;
    width: 40px;
    cursor: pointer;
}
</style>