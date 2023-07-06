<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body style="margin-top: 70px; background-color: #F8F8FF;">
    @include('commun.header-dashboard-loc')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item active-tab">
                <a class="nav-link" href="/profil-locataire">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mes réservations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Demander un remboursement</a>
            </li>
        </ul>
        <div class="card profile-card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Votre profil
            </div>
            <div class="card-body">
                <div style="text-align: right;">
                    <a style="text-decoration: none;" href="#">Voir mon profil public</a>
                </div>
                <hr>
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
                                <label>Civilité</label><br>
                                <div class="form-check">
                                    <input id="homme" class="form-check-input" type="radio" name="gender"
                                        value="homme" checked>
                                    <label for="homme" class="form-check-label">Homme</label>
                                </div>
                                <div class="form-check">
                                    <input id="femme" class="form-check-input" type="radio" name="gender"
                                        value="femme">
                                    <label for="femme" class="form-check-label">Femme</label>
                                </div>
                            </div>
                        </div>
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
                    <div class="form-group mt-3">
                        <label for="pres">Présentation</label>
                        <textarea id="pres" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <h6>Notifications</h6>
                        <div class="form-check">
                            <input id="in1" class="form-check-input" type="checkbox" value="">
                            <label for="in1" class="form-check-label">
                                Permettre aux propriétaires de me notifier de leurs nouvelles disponibilités</label>
                        </div>
                        <button class="btn btn-ins mt-3">Gérer mes communications</button>
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
