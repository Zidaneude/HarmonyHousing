<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('commun.header-dashboard-admin')

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item active-tab">
                <a class="nav-link" href="/profil-admin">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/verification-offres">Vérification des offres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/verification-avis">Vérification des avis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/historique-reservations">Historique des réservations</a>
            </li>
        </ul>
        <div class="card profile-card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Mon Profil admin
            </div>
            <div class="card-body">
                <form action="">
                    <h6 class="card-title">Photo de profil</h6>
                    <div style="display: flex; justify-content: center;">
                        <img height="60" src="images/upload.png" alt="Upload Image" class="mb-2">
                    </div>
                    <div class="dashed-border p-3 mb-3">
                        <input type="file" name="photo-profil" id="photo-profil" accept=".jpg, .jpeg, .png">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Adresse e-mail<span style="color: red;">*</span></label>
                                <input id="email" type="email" class="form-control" required>
                                <a style="text-decoration: none;" href="#" class="mt-1 d-block">Changer mon
                                    adresse email</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="prenom">Prénom<span style="color: red;">*</span></label>
                                <input id="prenom" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nom">Nom<span style="color: red;">*</span></label>
                                <input id="nom" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tel">Numéro de téléphone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <span>
                                        <img src="/images/cameroun.jpg" alt="Cameroon Flag" width="25">
                                    </span>&nbsp;+237</span>
                            </div>
                            <input id="tel" style="background-color: #F8F8FF;" type="tel" class="form-control"
                                id="phoneNumber" required>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-del">Supprimer mon compte</button>
                        <button type="button" class="btn btn-ins">Changer mon mot de passe</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</body>

</html>
