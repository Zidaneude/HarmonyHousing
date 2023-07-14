<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes réservations - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="margin-top: 70px; background-color: #F8F8FF;">
    @include('commun.header-dashboard-prop')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/profil-proprietaire">Mon profil</a>
            </li>
            <li class="nav-item active-tab">
                <a class="nav-link" href="/reservations-prop">Mes réservations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/disponibilite">Mettre à jour la disponibilité</a>
            </li>
        </ul>

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Mes réservations
            </div>
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-12 text-end">
                        <button class="btn btn-primary btn-export" style="width: 160px;">
                            Exporter en PDF <i class="fas fa-file-pdf"></i>
                        </button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="filter">Filtrer par :</label>
                        <select id="filter" class="form-select">
                            <option value="all">Tous</option>
                            <option value="reserved">Réservé</option>
                            <option value="pending">En cours</option>
                            <option value="cancelled">Annulé</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="search">Rechercher :</label>
                        <input id="search" class="form-control" type="text"
                            placeholder="Nom du locataire, date de réservation, etc.">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom du locataire</th>
                                <th scope="col">Type de logement</th>
                                <th scope="col">Titre du logement</th>
                                <th scope="col">Date de réservation</th>
                                <th scope="col">Durée</th>
                                <th scope="col">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="reservation-row">
                                <td>1</td>
                                <td>David</td>
                                <td>Appartement</td>
                                <td>Appartement bon standing</td>
                                <td>30/06/2023</td>
                                <td>1 mois</td>
                                <td><i style="color: green;" class="fas fa-check-circle"></i> Réservé</td>
                            </tr>
                            <tr class="reservation-row">
                                <td>3</td>
                                <td>Roland</td>
                                <td>Chambre</td>
                                <td>Chambre magnifique</td>
                                <td>01/07/2023</td>
                                <td>6 mois</td>
                                <td><i style="color: red;" class="fas fa-times-circle"></i> Annulé</td>
                            </tr>
                            <tr class="reservation-row">
                                <td>3</td>
                                <td>Roland</td>
                                <td>Chambre</td>
                                <td>01/07/2023</td>
                                <td>6 mois</td>
                                <td><i style="color: red;" class="fas fa-times-circle"></i> Annulé</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="demo mt-5">
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
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</body>

</html>
