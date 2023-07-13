<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Inscrivez-vous et découvrez nos centaines de logements !</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">

</head>

<body class="pt-5">
    @include('commun.header')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center title-accueil mt-3"
                            style="font-weight: bold; color: #0f0f11;">Inscription
                            propriétaire</h4>


                        <form method="POST" action="{{ route('inscription.proprietaire.store') }}">
                            @csrf
                            <!-- email                          -->
                            <div class="form-group mt-5">
                                <input style="background-color: #F8F8FF;" placeholder="Adresse e-mail" type="email"
                                    class="form-control" id="email" name="email" required>
                            </div>
                            @error('email')
                                <h6 style="color: red"> {{ $message }}</h6>
                            @enderror


                            <!-- sexe                          -->
                            <div class="form-group my-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="genderMale" value="Homme" required>
                                            <label class="form-check-label" for="genderMale">
                                                Homme
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="genderFemale" value="Femme" required>
                                            <label class="form-check-label" for="genderFemale">
                                                Femme
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- prenom                                -->
                            <div class="form-group my-3">
                                <input style="background-color: #F8F8FF;" placeholder="Prénom" type="text"
                                    class="form-control" id="firstName" name="prenom" required>
                            </div>

                            <!-- nom                          -->
                            <div class="form-group my-3">
                                <input style="background-color: #F8F8FF;" placeholder="Nom" type="text"
                                    class="form-control" id="lastName" name="nom" required>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <span>
                                                <img src="/images/cameroun.jpg" alt="Cameroon Flag" width="25">
                                            </span>&nbsp;+237</span>
                                    </div>
                                    <!-- telephone                          -->
                                    <input style="background-color: #F8F8FF;" placeholder="Numéro de téléphone"
                                        type="tel" class="form-control" id="phoneNumber" name="telephone" required>
                                </div>
                            </div>
                            @error('telephone')
                                <h6 style="color: red"> {{ $message }}</h6>
                            @enderror
                            <div class="form-group mt-3 mb-4">
                                <div class="input-group">
                                    <!-- password                          -->
                                    <input style="background-color: #F8F8FF;" placeholder="Mot de passe" type="password"
                                        class="form-control" id="password" name="password" required>

                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i id="togglePassword" class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('password')
                                    <h6 style="color: red"> {{ $message }}</h6>
                                @enderror
                            </div>


                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dataProcessing" required>
                                <label class="form-check-label" for="dataProcessing">
                                    En m'inscrivant, j'accepte que Harmony Housing recueille et traite mes données
                                    personnelles
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="termsOfUse" required>
                                <label class="form-check-label" for="termsOfUse">
                                    J’accepte sans réserve les <span> <a style="color: #212529;"
                                            href="#">Conditions Générales d’Utilisation</a></span> des services
                                    Harmony Housing
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3">Je m'inscris</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <p class="text-center mt-3">
                                Vous avez déjà un compte ? <a href="/connexion-proprietaire">Je me connecte</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/inscription-locataire" class="btn btn-ins">Je suis locataire</a>
        </div>
    </div>


    @include('commun.footer')

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
