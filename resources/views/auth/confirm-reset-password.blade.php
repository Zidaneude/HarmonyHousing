<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Réinitialisation du mot de passe - Harmony Housing - La plateforme de réservation en ligne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="pt-5">
    @include('commun.header')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center title-accueil mt-3"
                            style="font-weight: bold; color: #0f0f11;">Réinitialisation de
                            mot de passe</h4>
                        <form id="reset-form">
                            <p class="mt-4">
                                Pour réinitialiser votre mot de passe, veuillez entrer votre nouvelle combinaison
                                ci-dessous.
                            </p>
                            <div class="form-group mt-4">
                                <div class="input-group pb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input style="background-color: #F8F8FF;" placeholder="Nouveau mot de passe"
                                        type="password" class="form-control" id="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group pb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>
                                    <input style="background-color: #F8F8FF;" placeholder="Confirmez le mot de passe"
                                        type="password" class="form-control" id="confirm-password" required>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="submit" class="btn btn-primary">Réinitialiser le mot de passe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('commun.footer')

    <script>
        $("#reset-form").on('submit', function(e) {
            e.preventDefault();

            var password = $("#password").val();
            var confirmPassword = $("#confirm-password").val();

            if (password !== confirmPassword) {
                alert("Les mots de passe ne correspondent pas !");
            } else {
                // Appeler la fonction de réinitialisation de mot de passe ici.
                alert("Le mot de passe a été réinitialisé avec succès !");
                window.location.href = "/connexion-locataire";
            }
        });
    </script>

</body>

</html>
