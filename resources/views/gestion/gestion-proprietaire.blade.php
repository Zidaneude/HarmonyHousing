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
        .zoom {
            overflow: visible;
        }

        .zoom img {
            transition: transform 0.3s;
            position: relative;
            z-index: 1;
        }

        .zoom:hover img {
            transform: scale(1.4);
        }
    </style>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('commun.header-dashboard-admin')

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
            <div class="card-body mt-4">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo de profil</th>
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
                                <td>
                                    <div class="zoom">
                                        <img src="assets_admin/img/avatar1.jpg" alt="Profile" class="rounded-circle"
                                            width="40">
                                    </div>
                                </td>
                                <td>Ngono</td>
                                <td>M.</td>
                                <td>ngono.m@gmail.com</td>
                                <td>+237 456765432</td>
                                <td>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                        Supprimer</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="zoom">
                                        <img src="assets_admin/img/messages-3.jpg" alt="Profile" class="rounded-circle"
                                            width="40">
                                    </div>
                                </td>
                                <td>Fotso</td>
                                <td>F.</td>
                                <td>fotso.f@gmail.com</td>
                                <td>+237 345654321</td>
                                <td>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                        Supprimer</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="zoom">
                                        <img src="assets_admin/img/messages-1.jpg" alt="Profile" class="rounded-circle"
                                            width="40">
                                    </div>
                                </td>
                                <td>Sorelle</td>
                                <td>M.</td>
                                <td>sorelle.m@gmail.com</td>
                                <td>+237 234543210</td>
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
