<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des propriétaires - Harmony Housing - La plateforme de réservation en ligne</title>
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
            <li class="nav-item active-tab">
                <a class="nav-link" href="/gestion-proprietaire">Gestion des propriétaires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gestion-locataire">Gestion des locataires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gestion-remboursements">Gestion des remboursements</a>
            </li>
        </ul>

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Gestion des propriétaires
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Numéro de téléphone</th>
                                <th>Opérations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>David</td>
                                <td>L.</td>
                                <td>david.l@gmail.com</td>
                                <td>+237 653628392</td>
                                <td>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                        Supprimer</button>
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
