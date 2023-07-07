<!DOCTYPE html>
<html lang="en">
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
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-custom-nav-propri shadow-bottom">
    <a style="margin-left: 3%;" class="navbar-brand" href="#">
        <img src="images/logo.png" height="30" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="circle-icon" style="color: #004aad;">
                        <i class="fas fa-home"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item" style="color: ">
                <a class="nav-link" href="#">
                    <div class="circle-icon" style="color: #004aad;">
                        <i class="fas fa-envelope"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span style="color: black; font-weight: bold;"> <i class="fas fa-bars icon-menu"></i> &nbsp;
                        Menu</span>

                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuDropdown">
                    <a class="dropdown-item" href="/profil-admin">
                        <i class="fas fa-user"></i> Mon profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/verification-offres">
                        <i class="fas fa-check-square"></i> Vérification des offres
                    </a>
                    <a class="dropdown-item" href="/verification-avis">
                        <i class="fas fa-comments"></i> Vérification des avis
                    </a>
                    <a class="dropdown-item" href="/historique-reservations">
                        <i class="fas fa-calendar-alt"></i> Historique des réservations
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/gestion-proprietaire">
                        <i class="fas fa-users-cog"></i> Gestion des utilisateurs
                    </a>
                    <a class="dropdown-item" href="/gestion-remboursements">
                        <i class="fas fa-undo"></i> Gestion des remboursements
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

</body>
</html>