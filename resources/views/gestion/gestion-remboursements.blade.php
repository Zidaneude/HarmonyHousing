<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des remboursements - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('header-dashboard-admin')

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/gestion-proprietaire">Gestion des propriétaires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gestion-locataire">Gestion des locataires</a>
            </li>
            <li class="nav-item active-tab">
                <a class="nav-link" href="/gestion-remboursements">Gestion des remboursements</a>
            </li>
        </ul>

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Gestion des remboursements
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="filter">Filtrer par :</label>
                        <select id="filter" class="form-select">
                            <option value="all">Tous</option>
                            <option value="pending">En attente</option>
                            <option value="approved">Approuvé</option>
                            <option value="rejected">Rejeté</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="search">Rechercher :</label>
                        <input id="search" class="form-control" type="text" placeholder="Nom du locataire, etc.">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Locataire</th>
                                <th>Email</th>
                                <th>Montant à rembourser</th>
                                <th>Raison</th>
                                <th>Date de la demande</th>
                                <th style="width: 110px;">Status</th>
                                <th style="width: 210px;">Opérations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Paul M.</td>
                                <td>paul.m@gmail.com</td>
                                <td>5000 FCFA</td>
                                <td>J'ai changé d'avis.
                                </td>
                                <td>02/07/2023</td>
                                <td><i style="color: orange;" class="fas fa-clock"></i> En attente</td>
                                <td>
                                    <button class="btn btn-success btn-sm"><i class="fas fa-check-circle"></i>
                                        Approuver</button>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i>
                                        Rejeter</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
