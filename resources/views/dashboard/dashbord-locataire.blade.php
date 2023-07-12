<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher mon logement - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Add some CSS to style the button -->
    <style>
        .favorite-btn {
            /* Remove the transparency */
            opacity: 1;
            /* Add a white background */
            background-color: white;
            /* Add a border */
            border: 1px solid #ddd;
            /* Add some padding */
            padding: 8px;
            /* Make it a circle */
            border-radius: 50%;
            /* Adjust the width and height to make it round */
            width: 32px;
            height: 32px;
            /* Center the icon in the button */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Add a hover effect to change the color and fill of the icon */
        .favorite-btn:hover i {
            color: red;
            font-weight: 900;
        }

        .bg-lightblue {
            background-color: #e6f2ff;
        }

        .mb-1 {
            /* Use a smaller margin bottom */
            margin-bottom: 0.25rem;
        }

        /* Ajouter un effet d'ombre portée sur la carte */
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Arrondir les coins de la carte et de l'image */
        .card {
            border-radius: 10px;
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Changer la couleur de fond de la carte au survol */
        .card:hover {
            background-color: #f0f0f0;
        }

        /* Ajouter un peu d'espace entre le texte et les bords de la carte */
        .card-body {
            padding: 20px;
        }

        fieldset {
            /* Add a border around the fieldset */
            border: 1px solid #ddd;
            /* Add some padding around the content */
            padding: 10px;
            /* Add some margin around the fieldset */
            margin: 10px;
        }

        legend {
            /* Add some padding around the legend */
            padding: 5px;
            font-size: 18px;
            font-weight: 500;
        }

        @media (min-width: 992px) {
            .modal-dialog {
                width: 35%;
            }
        }
    </style>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('commun.header-dashboard-loc')
    <div class="container">

        <div class="card shadow-sm border-0 p-2">
            <div class="row my-4">
                <div class="col-md-3 mb-3">
                    <label for="ville" style="font-weight: bold;">Ville</label>
                    <input type="text" id="ville" name="ville" class="form-control" placeholder="Ex: Douala">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="quartier" style="font-weight: bold;">Quartier</label>
                    <input type="text" id="quartier" name="quartier" class="form-control"
                        placeholder="Ex: Bonamoussadi">
                </div>

                <div class="col-md-3">
                    <label style="font-weight: bold;">Type de logement</label>
                    <div class="form-check">
                        <input type="radio" id="apartment" name="type" class="form-check-input" checked>
                        <label for="apartment" class="form-check-label">Appartement</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="room" name="type" class="form-check-input">
                        <label for="room" class="form-check-label">Chambre</label>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-end justify-content-end">
                    <button type="button" class="btn btn-success me-2" data-bs-toggle="modal"
                        data-bs-target="#plus-de-filtres">Plus de filtres</button>
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="plus-de-filtres" tabindex="-1" aria-labelledby="plus-de-filtres-label"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="plus-de-filtres-label">Plus de filtres</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Budget -->
                            <fieldset class="mb-3">
                                <legend>Budget</legend>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="budget-min">Budget min</label>
                                        <input type="number" id="budget-min" name="budget-min" class="form-control"
                                            placeholder="Ex: 10000 FCFA" min="0">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="budget-max">Budget max</label>
                                        <input type="number" id="budget-max" name="budget-max" class="form-control"
                                            placeholder="Ex: 50000 FCFA" min="0">
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Meublé -->
                            <fieldset class="mb-3">
                                <legend>Meublé ?</legend>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="meuble-oui" name="meuble" value="oui"
                                        class="form-check-input">
                                    <label for="meuble-oui" class="form-check-label">Oui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="meuble-non" name="meuble" value="non"
                                        class="form-check-input">
                                    <label for="meuble-non" class="form-check-label">Non</label>
                                </div>
                            </fieldset>

                            <!-- Avec équipements -->
                            <fieldset class="mb-3">
                                <legend>Avec équipements ?</legend>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="equipement-oui" name="equipement" value="oui"
                                        class="form-check-input">
                                    <label for="equipement-oui" class="form-check-label">Oui</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="equipement-non" name="equipement" value="non"
                                        class="form-check-input">
                                    <label for="equipement-non" class="form-check-label">Non</label>
                                </div>
                            </fieldset>

                            <!-- Fréquence de paiement -->
                            <fieldset class="mb-3">
                                <legend>Fréquence de paiement</legend>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="frequence-1-mois" name="frequence" value="1 mois"
                                        class="form-check-input">
                                    <label for="frequence-1-mois" class="form-check-label">1 mois</label>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input type="radio" id="frequence-3-mois" name="frequence" value="3 mois"
                                        class="form-check-input">
                                    <label for="frequence-3-mois" class="form-check-label">3 mois</label>
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <input type="radio" id="frequence-6-mois" name="frequence" value="6 mois"
                                        class="form-check-input">
                                    <label for="frequence-6-mois" class="form-check-label">6 mois</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="frequence-1-an" name="frequence" value="1 an"
                                        class="form-check-input">
                                    <label for="frequence-1-an" class="form-check-label">1 an</label>
                                </div>
                            </fieldset>

                            <!-- Disponibilité -->
                            <fieldset class="mb-3">
                                <legend>Disponibilité</legend>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="dispo-actuellement" name="dispo"
                                        value="actuellement" class="form-check-input">
                                    <label for="dispo-actuellement" class="form-check-label">Actuellement</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="dispo-futur" name="dispo" value="futur"
                                        class="form-check-input">
                                    <label for="dispo-futur" class="form-check-label">Futur</label>
                                </div>
                            </fieldset>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-success">Appliquer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="my-5" style="color:#02469e; font-weight: bold;">+60 logements disponibles</h5>
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-4 shadow-sm btn-primary2" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="/images/bafoussam.jpg" class="card-img-top position-relative" alt="Property image"
                        height="200">
                    <a href="#" class="btn btn-circle btn-white favorite-btn position-absolute top-0 end-0 m-2"
                        onclick="event.stopPropagation()"><i class="far fa-heart"></i></a>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p style="font-size: 15px;" class="mb-1">Appartement</p>
                                <h5 class="card-title" style="font-size: 16px;">Appartement moderne au centre-ville
                                </h5>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text" style="font-size: 21px; line-height: 1"><b>25 500 F</b> <span
                                        style="font-size: 16px;">/ mois</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="card-text" style="font-size: 13px;">65m² - 12 chambres - Meublé
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-lightblue border-0">
                        <p class="card-text text-success" style="font-size: 14px;"><i
                                class="fas fa-check-circle"></i>
                            Disponible <span class="text-dark"> actuellement</span></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-4 shadow-sm btn-primary2" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="/images/appart2.webp" class="card-img-top position-relative" alt="Property image"
                        height="200">
                    <a href="#" class="btn btn-circle btn-white favorite-btn position-absolute top-0 end-0 m-2"
                        onclick="event.stopPropagation()"><i class="far fa-heart"></i></a>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p style="font-size: 15px;" class="mb-1">Chambre</p>
                                <h5 class="card-title" style="font-size: 16px;">Chambre confortable avec vue sur la
                                    mer
                                </h5>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text" style="font-size: 21px; line-height: 1"><b>15 700 F</b> <span
                                        style="font-size: 16px;">/ mois</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="card-text" style="font-size: 13px;">75m² - 9 chambres - Non Meublé
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-lightblue border-0">
                        <p class="card-text text-success" style="font-size: 14px;"><i
                                class="fas fa-check-circle"></i>
                            Disponible <span class="text-dark"> actuellement</span></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-4 shadow-sm btn-primary2" onclick="location.href='#';" style="cursor: pointer;">
                    <img src="/images/dschang.jpg" class="card-img-top position-relative" alt="Property image"
                        height="200">
                    <a href="#" class="btn btn-circle btn-white favorite-btn position-absolute top-0 end-0 m-2"
                        onclick="event.stopPropagation()"><i class="far fa-heart"></i></a>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p style="font-size: 15px;" class="mb-1">Appartement</p>
                                <h5 class="card-title" style="font-size: 16px;">Appartement meublé très chic
                                </h5>
                            </div>
                            <div class="col-md-4">
                                <p class="card-text" style="font-size: 21px; line-height: 1"><b>52 000 F</b> <span
                                        style="font-size: 16px;">/ mois</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="card-text" style="font-size: 13px;">65m² - 12 chambres - Meublé
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-lightblue border-0">
                        <p class="card-text text-success" style="font-size: 14px;"><i
                                class="fas fa-clock text-warning"></i>
                            Disponible à partir du <span class="text-dark"> 16 juil. 2023</span></p>
                    </div>
                </div>
            </div>
        </div> {{-- Fin de la row --}}

        <div class="demo my-5">
            <nav class="pagination-outer" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</body>

</html>
