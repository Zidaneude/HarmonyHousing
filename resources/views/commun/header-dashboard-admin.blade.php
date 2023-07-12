    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/admin-dashboard" class="logo d-flex align-items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Harmony Housing">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Rechercher" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- Fin de l'icône de notification -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            Vous avez 4 nouvelles notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Voir tout</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Nouvelle réservation</h4>
                                <p>Une nouvelle réservation a été faite pour l'appartement Douala</p>
                                <p>Il y a 30 min.</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Annulation de réservation</h4>
                                <p>La réservation pour le studio Yaoundé a été annulée</p>
                                <p>Il y a 1 h.</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Paiement reçu</h4>
                                <p>Un paiement a été reçu pour la Chambre Bafoussam</p>
                                <p>Il y a 2 h.</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Nouvel utilisateur inscrit</h4>
                                <p>Un nouvel utilisateur, David L., s'est inscrit</p>
                                <p>Il y a 4 h.</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Afficher toutes les notifications</a>
                        </li>

                    </ul><!-- Fin des éléments déroulants de notification -->

                </li><!-- Fin de la navigation de notification -->


                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- Fin de l'icône des messages -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            Vous avez 3 nouveaux messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Voir tout</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ asset('assets_admin/img/messages-1.jpg') }}" alt="" class="rounded-circle">
                                <div>
                                    <h4>Clémence</h4>
                                    <p>J'ai une question concernant la réservation de l'appartement Douala...</p>
                                    <p>Il y a 4 h.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ asset('assets_admin/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                                <div>
                                    <h4>Julie</h4>
                                    <p>Je souhaite annuler ma réservation pour le studio Yaoundé...</p>
                                    <p>Il y a 6 h.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ asset('assets_admin/img/messages-3.jpg') }}" alt="" class="rounded-circle">
                                <div>
                                    <h4>David L.</h4>
                                    <p>Je suis intéressé par la Chambre Bafoussam, est-elle toujours disponible ?...</p>
                                    <p>Il y a 8 h.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Afficher tous les messages</a>
                        </li>

                    </ul><!-- Fin des éléments déroulants des messages -->

                </li><!-- Fin de la navigation des messages -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('assets_admin/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">David L.</span>
                    </a><!-- End Profile Image Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>David L.</h6>
                            <span>Modérateur</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/profil-admin">
                                <i class="fas fa-user"></i>
                                <span>Mon profil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/verification-offres">
                                <i class="fas fa-check-square"></i>
                                <span>Vérification d'offres</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/verification-avis">
                                <i class="fas fa-comments"></i>
                                <span>Modération d'avis</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/historique-reservations">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Historique des réservations</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('logout.admin')}}">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Déconnexion</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
