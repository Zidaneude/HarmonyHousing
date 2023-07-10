<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des réservations - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="assets_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets_admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets_admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets_admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets_admin/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets_admin/css/style.css" rel="stylesheet">

    <style>
        .pagination-outer {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('commun.header-dashboard-admin')

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/profil-admin">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/verification-offres">Vérification d'offres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/verification-avis">Modération d'avis</a>
            </li>
            <li class="nav-item active-tab">
                <a class="nav-link" href="/historique-reservations">Historique des réservations</a>
            </li>
        </ul>

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Historique des réservations
            </div>
            <div class="card-body mt-3">
                <div class="mt-2">
                    <button class="btn btn-primary btn-export" style="position: relative; margin-left:85%">
                        Exporter en PDF <i class="fas fa-file-pdf"></i>
                    </button>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="filter">Filtrer par :</label>
                        <select id="filter" class="form-select">
                            <option value="all">Tous</option>
                            <option value="reserved">Réservé</option>
                            <option value="pending">En cours</option>
                            <option value="refunded">Remboursé</option>
                            <option value="cancelled">Annulé</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="search">Rechercher :</label>
                        <input id="search" class="form-control" type="text"
                            placeholder="Nom du locataire, propriétaire, statut, date de réservation, etc.">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Logement</th>
                                <th scope="col">Type de logement</th>
                                <th scope="col">Propriétaire</th>
                                <th scope="col">Nom du locataire</th>
                                <th scope="col">Date de réservation</th>
                                <th scope="col">Durée</th>
                                <th scope="col">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="reservation-row">
                                <td>1</td>
                                <td>83321</td>
                                <td>Appartement</td>
                                <td>Marc</td>
                                <td>David</td>
                                <td>30/06/2023</td>
                                <td>1 mois</td>
                                <td><i style="color: green;" class="fas fa-check-circle"></i> Réservé</td>
                            </tr>
                            <tr class="reservation-row">
                                <td>2</td>
                                <td>83322</td>
                                <td>Studio</td>
                                <td>Julio</td>
                                <td>Paulin</td>
                                <td>07/07/2023</td>
                                <td>3 mois</td>
                                <td><span><i style="color: orange;" class="fas fa-clock"></i> En cours</span>
                                </td>
                            </tr>
                            <tr class="reservation-row">
                                <td>3</td>
                                <td>83323</td>
                                <td>Chambre</td>
                                <td>Clémence</td>
                                <td>Roland</td>
                                <td>05/07/2023</td>
                                <td>6 mois</td>
                                <td><i style="color: red;" class="fas fa-times-circle"></i> Annulé</td>
                            </tr>
                            <tr class="reservation-row">
                                <td>4</td>
                                <td>83324</td>
                                <td>Studio</td>
                                <td>Philippe</td>
                                <td>Ghislain</td>
                                <td>15/07/2023</td>
                                <td>1 an</td>
                                <td><i style="color: blue;" class="fas fa-hand-holding-usd"></i> Remboursé</td>
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
