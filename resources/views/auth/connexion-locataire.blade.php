<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Connexion locataire - Harmony Housing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body class="pt-5">
    @include('commun.header');

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center title-accueil mt-3"
                            style="font-weight: bold; color: #0f0f11;">Connexion
                            locataire</h4>

                            <div> 
                                @if($errors->any())  
                                    @foreach ($errors->all() as $item)
                                    {{$item}}
                                    @endforeach     
                                @endif
                            </div>
                            <form method="POST" action="{{route('connexion.locataire.store')}}">
                                @csrf
                            
                            <div class="form-group mt-5">
                                <div class="input-group pb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                      <!-- email                -->
                                    <input style="background-color: #F8F8FF;" placeholder="Votre adresse email"
                                        type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                      <!-- password                -->
                                    <input style="background-color: #F8F8FF;" placeholder="Mot de passe" type="password"
                                        class="form-control" id="password" name="password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pt-1">
                                <a href="{{route('password.request.l')}}" style="float: right; text-decoration: none;"><span
                                        style="color: #004aad;">Mot de passe
                                        oublié ?</span></a>
                            </div>
                            <div class="text-center pt-5 pb-3">
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <p class="text-center">
                                Vous n'avez pas de compte ? <a href="{{route('inscription.locataire.create')}}"
                                    style="text-decoration: none;"><span style="color: #004aad;">Inscription
                                        locataire</span></a>
                            </p>
                            <p class="text-center">
                                Vous êtes propriétaire ? <a href="/connexion-proprietaire"
                                    style="text-decoration: none;"><span
                                        style="color: #004aad;">Connectez-vous</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('.toggle-password');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>

    @include('commun.footer')
</body>

</html>
