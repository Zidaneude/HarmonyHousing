<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des logements - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Gestion des logements
            </div>
            <div class="card-body mt-4">
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="filter">Filtrer par :</label>
                        <select id="filter" class="form-select">
                            <option value="all">Tous</option>
                            <option value="available">Disponible</option>
                            <option value="booked">Réservé</option>
                            <option value="unavailable">Indisponible</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="search">Rechercher :</label>
                        <input id="search" class="form-control" type="text"
                            placeholder="Nom du propriétaire, titre de l'annonce, etc.">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Propriétaire</th>
                                <th scope="col">Titre de l'annonce</th>
                                <th scope="col">Type de logement</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Statut</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simo</td>
                                <td>Appartement moderne au centre-ville</td>
                                <td>Appartement</td>
                                <td>25000 FCFA</td>
                                <td><span><i style="color: green;" class="fas fa-check-circle"></i> Disponible</span>
                                </td>
                                <td>
                                    <button class="btn btn-success btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"><i
                                            class="fas fa-eye"></i> Voir</button>
                                    <button class="btn btn-warning btn-sm"
                                        style="transform: inherit; transition: inherit;">Rendre indisponible</button>

                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>David</td>
                                <td>Chambre confortable avec vue sur la mer</td>
                                <td>Chambre</td>
                                <td>15000 FCFA</td>
                                <td><span><i style="color: orange;" class="fas fa-clock"></i> Réservé</span></td>
                                <td>
                                    <button class="btn btn-success btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"><i
                                            class="fas fa-eye"></i> Voir</button>
                                    <button class="btn btn-danger btn-sm">Annuler la réservation</button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Xavier</td>
                                <td>Appartement meublé très chic</td>
                                <td>Appartement</td>
                                <td>30000 FCFA</td>
                                <td><span><i style="color: red;" class="fas fa-times-circle"></i> Indisponible</span>
                                </td>
                                <td>
                                    <button class="btn btn-success btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"><i
                                            class="fas fa-eye"></i> Voir</button>
                                    <button class="btn btn-primary btn-sm"
                                        style="transform: inherit; transition: inherit;">Rendre disponible</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

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

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
