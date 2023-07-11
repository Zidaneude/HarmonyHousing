<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">

    <title>Dashbord locataire | Harmony Housing</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="icon" href="images/Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .nav-link {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        @media (max-width: 600px) {
            #extra-filters {
                flex-direction: column;
            }
        }
    </style>
    <style>
        .filter {
            color: #004aad;
        }

        .overlay {
            height: 50%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.3);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 20%;
            width: 100%;
            text-align: center;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #ffffff;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>
</head>

<body class="pt-5">
    @include('commun.header-dashboard-loc')

    <section data-bs-version="5.1" class="features8 cid-tIoXg5qdPf" xmlns="http://www.w3.org/1999/html"
        id="features9-c">

        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Logement à Dschang</a></li>

                </ol>
            </nav>
        </div>

        <div class="container my-5" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <h5><strong><span style="color: #004aad; font-weight: bold;">2 logements disponibles</span> <span
                        style="color: rgb(207, 201, 201)">sur 25</span> </strong></h5>
        </div>

        <style>
            .res {
                padding-top: 15px;
                padding-bottom: 5px;
                text-align: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>

        <div class="container">

            <div class="row mt-4">
                <div class="item features-image сol-12 col-md-6 col-lg-4 active">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <a href="détails et reservation.html"><img src="assets1/images/hilton-yaounde-550x363.jpg"
                                    alt="Mobirise Website Builder" data-slide-to="0" data-bs-slide-to="0"></a>
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong>65000 FCFA/ mois</strong></h5>

                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Appartement meublé pour
                                étudiants<br>Dschang-foto</p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="détails et reservation.html"
                                class="btn btn-primary item-btn display-7" target="_blank">voir les détails</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <a href="détails et reservation.html"><img
                                    src="assets1/images/hilton-yaounde-habitacion-c4dc94a-816x502.jpg"
                                    alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1"></a>
                        </div>
                        <div class="item-content">
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                Chambre moderne&nbsp;<br>Douala-Bonabéri</p>

                            <h5 class="item-title mbr-fonts-style display-7"><strong>45000 FCFA/ mois</strong></h5>


                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="détails et reservation.html"
                                class="btn btn-primary item-btn display-7" target="_blank">voir les détails</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <a href="détails et reservation.html"><img
                                    src="assets1/images/queen-executive-room-700x433.jpg" alt="Mobirise Website Builder"
                                    data-slide-to="2" data-bs-slide-to="2"></a>
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong>55000 FCFA/ mois</strong></h5>

                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Studio avec cuisine<br>Yaoundé-Ngousso
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="détails et reservation.html"
                                class="btn btn-primary item-btn display-7" target="_blank">voir les détails</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('commun.footer')
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/ytplayer/index.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>

    <script>
        var moreFiltersButton = document.getElementById('more-filters');
        var extraFilters = document.getElementById('extra-filters');
        moreFiltersButton.addEventListener('click', function() {
            if (extraFilters.style.maxHeight === '0px') {
                extraFilters.style.maxHeight = extraFilters.scrollHeight + 'px';
            } else {
                extraFilters.style.maxHeight = '0px';
            }
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</body>

</html>
