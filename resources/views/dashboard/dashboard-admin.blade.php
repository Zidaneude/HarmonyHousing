<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard Admin - Harmony Housing</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="images/Favicon.png">

    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    @include('commun.header-dashboard-admin')

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="bi bi-grid"></i>
                    <span>Tableau de bord</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#locataires-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Locataires</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="locataires-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/gestion-locataire">
                            <i class="bi bi-circle"></i><span>Gérer les locataires</span>
                        </a>
                    </li>
                    <li>
                        <a href="/verification-avis">
                            <i class="bi bi-circle"></i><span>Modérer les avis</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Locataires Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#proprietaires-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-person-badge"></i><span>Propriétaires</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="proprietaires-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{route("admin.dasboard.gestion_offre")}}">
                            <i class="bi bi-circle"></i><span>Vérifier les offres</span>
                        </a>
                    </li>

                    <li>
                        <a href="/gestion-proprietaire">
                            <i class="bi bi-circle"></i><span>Gérer les propriétaires</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Gérer les logements</span>
                        </a>
                    </li>

                </ul>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#reservations-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-calendar-check"></i><span>Réservations</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="reservations-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/historique-reservations">
                            <i class="bi bi-circle"></i><span>Historique des réservations</span>
                        </a>
                    </li>
                    <li>
                        <a href="/gestion-remboursements">
                            <i class="bi bi-circle"></i><span>Gérer les remboursements</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('ajouter.admin.create')}}">
                    <i class="bi bi-shield-lock"></i><span>Gérer les rôles</span>
                </a>

            </li>
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tableau de bord</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filtre</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                        <li><a class="dropdown-item" href="#">Ce mois</a></li>
                                        <li><a class="dropdown-item" href="#">Cette année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Réservations <span>| Aujourd'hui</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>105</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">en plus</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filtre</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                        <li><a class="dropdown-item" href="#">Ce mois</a></li>
                                        <li><a class="dropdown-item" href="#">Cette année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Revenus <span>| Ce mois</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cash"></i> <!-- Changed icon here -->
                                        </div>
                                        <div class="ps-3">
                                            <h6>XAF 212 564</h6> <!-- Changed currency symbol here -->
                                            <span class="text-danger small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">en moins</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Logements disponibles Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card logements-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filtre</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                        <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                                        <li><a class="dropdown-item" href="#">Cette année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Logements disponibles <span>| Aujourd'hui</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-house"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>23</h6>
                                            <span class="text-success small pt-1 fw-bold">4%</span> <span
                                                class="text-muted small pt-2 ps-1">en plus</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Logements disponibles Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filtre</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                        <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                                        <li><a class="dropdown-item" href="#">Cette année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Statistiques <span>| Cette année</span></h5>

                                    <!-- Bar Chart -->
                                    <div id="statsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#statsChart"), {
                                                series: [{
                                                    name: 'Logements',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Locataires',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Propriétaires',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }, {
                                                    name: 'Revenus',
                                                    data: [25, 21, 42, 28, 19, 34, 21]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'bar',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d', '#f542b4'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'category',
                                                    categories: ["Janvier", "Février", "Mars", "Avril",
                                                        "Mai", "Juin", "Juillet"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'MMM'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Bar Chart -->

                                </div>

                            </div>
                        </div><!-- End Statistiques Card -->

                        <!-- Recent Reservations -->
                        <div class="col-12">
                            <div class="card recent-reservations overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filtre</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                        <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                                        <li><a class="dropdown-item" href="#">Cette année</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Réservations récentes <span>| Aujourd'hui</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Locataire</th>
                                                <th scope="col">Logement</th>
                                                <th scope="col">Prix</th>
                                                <th scope="col">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href="#" class="text-primary">Appartement 2 pièces à
                                                        Douala</a>
                                                </td>
                                                <td>XAF 2000</td>
                                                <td><span class="badge bg-success">Confirmé</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td><a href="#" class="text-primary">Studio meublé à Yaoundé</a>
                                                </td>
                                                <td>XAF 2350</td>
                                                <td><span class="badge bg-warning">En cours</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td><a href="#" class="text-primary">Appartement avec piscine à
                                                        Kribi</a></td>
                                                <td>XAF 5200</td>
                                                <td><span class="badge bg-success">Confirmé</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td><a href="#" class="text-primary">Chambre simple à
                                                        Bafoussam</a></td>
                                                <td>XAF 1400</td>
                                                <td><span class="badge bg-danger">Annulé</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Chambre de campagne à
                                                        Foumban</a></td>
                                                <td>XAF 3450</td>
                                                <td><span class="badge bg-success">Confirmé</span></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Reservations -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filtre</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                <li><a class="dropdown-item" href="#">Ce mois</a></li>
                                <li><a class="dropdown-item" href="#">Cette année</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Activité récente <span>| Aujourd'hui</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        Nouvelle réservation pour <a href="#"
                                            class="fw-bold text-dark">Appartement Douala</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                        Annulation de réservation pour <a href="#"
                                            class="fw-bold text-dark">Studio Yaoundé</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 h</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Paiement reçu pour <a href="#" class="fw-bold text-dark">Villa
                                            Bafoussam</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 jr.</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                        Nouvel utilisateur inscrit : <a href="#" class="fw-bold text-dark">David
                                            L.</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 jr.</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                        Commentaire reçu pour <a href="#" class="fw-bold text-dark">Chambre
                                            Kribi</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 sem.</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        Mise à jour des informations de contact
                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- Avis récents -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filtre</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                <li><a class="dropdown-item" href="#">Ce mois</a></li>
                                <li><a class="dropdown-item" href="#">Cette année</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Avis récents <span>| Aujourd'hui</span></h5>

                            <div class="reviews">

                                <div class="review-item d-flex">
                                    <div class="review-avatar">
                                        <img src="assets_admin/img/avatar1.jpg" alt="" class="rounded-circle"
                                            width="30">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-header d-flex justify-content-between align-items-center">
                                            <div class="review-name fw-bold">&nbsp;Alice M.</div>
                                            <div class="review-rating">
                                                <i class='bi bi-star-fill text-warning'></i>
                                                <i class='bi bi-star-fill text-warning'></i>
                                                <i class='bi bi-star-fill text-warning'></i>
                                                <i class='bi bi-star-fill text-warning'></i>
                                                <i class='bi bi-star-half text-warning'></i>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            J'ai passé un excellent séjour dans l'appartement Douala. Le logement est
                                            spacieux, propre et bien équipé. Le propriétaire est très accueillant et
                                            disponible. Je recommande !
                                        </div>
                                    </div>
                                </div><!-- End review item-->
                                <hr>
                                <div class="review-item d-flex">
                                    <div class="review-avatar">
                                        <img src="assets_admin/img/avatar2.jpg" alt="" class="rounded-circle"
                                            width="30">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-header d-flex justify-content-between align-items-center">
                                            <div class="review-name fw-bold">&nbsp;Bruno L.</div>
                                            <div class="review-rating">
                                                <i class='bi bi-star-fill text-warning'></i>
                                                <i class='bi bi-star-fill text-warning'></i>
                                                <i class='bi bi-star-fill text-warning'></i>
                                                <i class='bi bi-star-half text-warning'></i>
                                                <i class='bi bi-star text-warning'></i>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            Le studio Yaoundé est très bien situé, proche du centre-ville et des
                                            transports. Le lit est confortable et la salle de bain est propre. Le seul
                                            bémol est le bruit de la rue la nuit.
                                        </div>
                                    </div>
                                </div><!-- End review item-->

                            </div>

                        </div>
                    </div><!-- End Avis récents -->

                    <!-- Destinations les plus populaires -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filtre</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                <li><a class="dropdown-item" href="#">Ce mois</a></li>
                                <li><a class="dropdown-item" href="#">Cette année</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Destinations les plus populaires <span>| Ce mois</span></h5>

                            <div id="destinationsChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#destinationsChart")).setOption({
                                        tooltip: {
                                            trigger: 'axis',
                                            axisPointer: {
                                                type: 'shadow'
                                            }
                                        },
                                        legend: {
                                            data: ['Réservations', 'Revenus']
                                        },
                                        grid: {
                                            left: '3%',
                                            right: '4%',
                                            bottom: '3%',
                                            containLabel: true
                                        },
                                        xAxis: {
                                            type: 'value'
                                        },
                                        yAxis: {
                                            type: 'category',
                                            data: ['Douala', 'Yaoundé', 'Bafoussam', 'Kribi', 'Limbé']
                                        },
                                        series: [{
                                                name: 'Réservations',
                                                type: 'bar',
                                                stack: 'total',
                                                label: {
                                                    show: true,
                                                    position: 'right'
                                                },
                                                data: [320, 302, 301, 334, 390]
                                            },
                                            {
                                                name: 'Revenus',
                                                type: 'bar',
                                                stack: 'total',
                                                label: {
                                                    show: true,
                                                    position: 'right'
                                                },
                                                data: [6400, 6600, 5025, 6700, 7800]
                                            }
                                        ]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Destinations les plus populaires -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets_admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_admin/js/main.js') }}"></script>

</body>

</html>
