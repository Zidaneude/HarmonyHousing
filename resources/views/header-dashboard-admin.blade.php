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
                    <a class="dropdown-item" href="/profil-admin">Mon profil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/verification-offres">Vérification des offres</a>
                    <a class="dropdown-item" href="/verification-avis">Vérification des avis</a>
                    <a class="dropdown-item" href="/historique-reservations">Historique des réservations</a>
                    <a class="dropdown-item" href="/historique-paiements">Historique des paiements</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/gestion-proprietaire">Gestion des utilisateurs</a>
                    <a class="dropdown-item" href="/gestion-remboursements">Gestion des remboursements</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Déconnexion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
