<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes paramètres - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/flavicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="margin-top: 70px; background-color: #F8F8FF;">
    @include('header-dashboard-prop')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item active-tab">
                <a class="nav-link" href="/profil-proprietaire">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Gérer les réservations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Historique de versement</a>
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
                    <!--profil -->
                    <h6 class="card-title">Photo de profil</h6>
                    <div style="display: flex; justify-content: center;">
                        <img height="60" src="images/upload.png" alt="Upload Image" class="mb-2">
                    </div>
                    <div class="dashed-border p-3 mb-3">
                        <input type="file" name="photo-profil" id="photo-profil" accept=".jpg, .jpeg, .png">
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- sexe-->
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
                                <!--email-->
                                <label for="email">Adresse e-mail<span style="color: red;">*</span></label>
                                <input id="email" type="email"  value="{{$proprietaire->email}}"="form-control" required name="email">
                                <a style="text-decoration: none;" href="#" class="mt-1 d-block">Changer mon
                                    adresse email</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <!--prenom-->
                            <div class="form-group">
                                <label for="prenom">Prénom<span style="color: red;">*</span></label>
                                <input id="prenom" type="text" value="{{$proprietaire->nom}}"  class="form-control" required name="prenom">
                            </div>
                        </div>
                        <div class="col">
                            <!--nom -->
                            <div class="form-group">
                                <label for="nom">Nom<span style="color: red;">*</span></label>
                                <input id="nom" type="text" value="{{$proprietaire->prenom}}" class="form-control" required name="nom">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <!--tel-->
                        <label for="tel">Numéro de téléphone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <span>
                                        <img src="/images/cameroun.jpg" alt="Cameroon Flag" width="25">
                                    </span>&nbsp;+237</span>
                            </div>
                            <input id="tel" style="background-color: #F8F8FF;" type="tel" class="form-control"
                                id="phoneNumber" value="{{$proprietaire->telephone}}" required name="telephone">
                        </div>
                    </div>
                    <!-- presentation-->
                    <div class="form-group mt-3">
                        <label for="pres">Présentation</label>
                        <textarea id="pres" value="{{$proprietaire->presentation}}" class="form-control" rows="3" name="presentation"></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <h6>Notifications</h6>
                        <div class="form-check">
                            <input id="in1" class="form-check-input" type="checkbox" value="">
                            <label for="in1" class="form-check-label">Nouvelle demande par Email (Un email vous
                                est envoyé à
                                chaque demande de locataire)</label>
                        </div>
                        <div class="form-check">
                            <input id="in2" class="form-check-input" type="checkbox" value="">
                            <label for="in2" class="form-check-label">Nouvelle demande par SMS (Un sms vous est
                                envoyé à chaque
                                demande de locataire)</label>
                        </div>
                        <div class="form-check">
                            <input id="in3" class="form-check-input" type="checkbox" value="">
                            <label for="in3" class="form-check-label">Nouveau message par Email (Un email vous
                                est envoyé à
                                chaque message de locataire)</label>
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
