<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Récupérer mon mot de passe - Harmony Housing - La plateforme de réservation en ligne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="pt-5">
    @include('commun.header');

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" id="main-form">
                        <h4 class="card-title text-center title-accueil mt-3"
                            style="font-weight: bold; color: #0f0f11;">Récupération de
                            mot de passe</h4>
                        <form id="recovery-form" method="POST" action="{{route('password.email.l')}}">
                                @csrf
                            <p class="mt-4">
                                Pour récupérer le mot de passe, veuillez remplir le formulaire suivant. Un message
                                courriel vous sera envoyé avec les instructions pour compléter la récupération.
                            </p>
                            <div class="form-group mt-4">
                                <div class="input-group pb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input style="background-color: #F8F8FF;" placeholder="Votre adresse email"
                                        type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="submit" class="btn btn-primary">Récupérer le mot de passe</button>
                            </div>
                            <p style="font-size: 14px;">Si vous ne recevez pas de courriel dans les prochaines minutes,
                                vérifiez votre dossier de
                                courrier indésirable ou de spams.</p>
                            <div class="form-group pt-1">
                                <a href="/connexion-locataire" style="float: left; text-decoration: none;"><span
                                        style="color: #004aad;">Aller à la page de connexion</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('commun.footer')
    <style>
        .success-message {
            color: #008000;
            border: 1px solid #008000;
            border-radius: 10px;
            padding: 2px;
            padding-top: 0px;
            display: flex;
            align-items: center;
        }

        .success-message i {
            margin-right: 10px;
            margin-left: 5px;
        }
    </style>

    <script>
        $("#recovery-form").on('submit', function(e) {
            e.preventDefault();

            // Appeler la fonction d'envoi de courrier électronique ici.

            var message =
                '<h4 class="card-title text-center title-accueil mt-3" style="font-weight: bold; color: #0f0f11;">Récupération de mot de passe</h4>' +
                '<div class="success-message my-5">' +
                '<i class="fas fa-check-circle"></i>' +
                '<p class="mt-3">Le message a été envoyé, vérifier dans votre boîte courriel et suivez les instructions pour compléter la récupération.</p>' +
                '</div>' +
                '<div class="form-group pt-1">' +
                '<a href="/connexion-locataire" style="float: left; text-decoration: none;"><span style="color: #004aad;">Aller à la page de connexion</span></a>' +
                '</div>';
            $("#main-form").html(message);

        });
    </script>
</body>

</html>
