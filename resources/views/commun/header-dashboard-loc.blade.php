<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-custom-nav-propri shadow-bottom">
    <a style="margin-left: 3%;" class="navbar-brand" href="/dashboard-proprietaire">
        <img src="images/logo.png" height="30" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard-proprietaire">
                    <div class="circle-icon" style="color: #004aad;">
                        <i class="fas fa-home"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="circle-icon" style="color: #004aad;">
                        <i class="fas fa-heart"></i>
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
                    <a class="dropdown-item" href="/profil-proprietaire">
                        <i class="fas fa-user"></i> Mon profil
                    </a>
                    <a class="dropdown-item" href="/reservations-prop">
                        <i class="fas fa-calendar-check"></i> Historique de mes réservations
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-undo"></i> Demande de remboursement
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-question-circle"></i> FAQ - Locataire
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-envelope"></i> Nous contacter
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
