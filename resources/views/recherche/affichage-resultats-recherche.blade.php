<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">

    <title>Resultats de recherche | Harmony Housing</title>
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
</head>

<body class="pt-5">
    @include('header')
    <section class="header2 cid-tImC7YmmP6" id="header2-6">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(17, 105, 113);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <style>
                        input[type=text] {
                            width: 200px;

                            box-sizing: border-box;
                            border: 2px solid #004aad;
                            border-radius: 25px;
                            font-size: 14px;
                            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                            background-color: white;
                            background-image: img src="assets/images/icons8-search-48.png";
                            background-position: 10px 10px;
                            background-repeat: no-repeat;
                            padding: 12px 20px 12px 40px;
                            -webkit-transition: width 0.4s ease-in-out;
                            transition: width 0.4s ease-in-out;
                        }

                        input[type=text]:focus {
                            width: 30%;
                        }
                    </style>
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Trouvez un logement partout au
                            Cameroun</strong></h1>

                    <p class="mbr-text mbr-fonts-style display-7">Harmony Housing est une plateforme de logement
                        en ligne simple et efficace pour n'importe quelle durée.</p>
                </div>
            </div>

            <form class="mt-3"
                style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 10px; width: 100%; max-width: 800px;">
                <input type="text" name="search" placeholder="Rech.. ex: Yaoundé" required
                    style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1;">
                <select name="type" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1;">
                    <option value="">Type de logement</option>
                    <option value="chambre">Chambre</option>
                    <option value="appartement">Appartement</option>
                    <option value="studio">Studio</option>
                </select>
                <input type="number" name="chambres" min="1" placeholder="Nombre de chambres"
                    style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; width: 175px;">
                <button type="button" id="more-filters"
                    style="padding: 10px; border-radius: 5px; border: none; background-color: #004aad; color: white; cursor: pointer;">Plus
                    de filtres</button>

                <div id="extra-filters" style="display: none; flex-basis: 100%; margin-top: 10px;">
                    <input type="number" name="budget_min" min="0" placeholder="Budget min"
                        style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;">
                    <input type="number" name="budget_max" min="0" placeholder="Budget max"
                        style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;">
                    <select name="meuble"
                        style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;">
                        <option value="">Meublé ou pas ?</option>
                        <option value="meuble">Meublé</option>
                        <option value="non_meuble">Non meublé</option>
                    </select>
                    <select name="equipements"
                        style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;">
                        <option value="">Avec ou sans équipements ?</option>
                        <option value="avec">Avec équipements</option>
                        <option value="sans">Sans équipements</option>
                    </select>
                    <select name="frequence"
                        style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;">
                        <option value="">Fréquence de paiement</option>
                        <option value="Un_Mois">1 mois</option>
                        <option value="Trois_Mois">3 mois</option>
                        <option value="Six_Mois">6 mois</option>
                        <option value="Un_An">1 an</option>
                    </select>
                    <select name="disponibilite"
                        style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;">
                        <option value="">Disponibilité</option>
                        <option value="actuellement">Actuellement</option>
                        <option value="futur">Futur</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" style="transform: inherit; transition: inherit;"
                    value="Rechercher"
                    style="padding: 10px; border-radius: 5px; border: none; background-color: #004aad; color: white; cursor: pointer;">
            </form>

        </div>
    </section>

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

        <div class="res mb-4">
            <h5><strong>Trouvez ci-dessous, les logements correspondants à vos critères.</strong></h5>
        </div>

        <style>
            .res {
                padding-top: 15px;
                padding-bottom: 5px;
                text-align: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>

        <div class="container mb-5">
            <div class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4">
                            <div class="image-wrapper">
                                <a href="détails et reservation.html"><img height="200" style="border-radius: 5px;"
                                        src="assets/images/502d0f906d18e6e1568af5e39875b5f9-816x461.jpg"
                                        alt="Mobirise Website Builder"></a>
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md">
                                        <h6 class="card-title mbr-fonts-style display-7"><strong>Appartement
                                                meublé 2 chambres</strong><br></h6>
                                        <p class="mbr-text mbr-fonts-style display-7">
                                            <i class="fas fa-bed"></i> 2 chambres<br>
                                            <i class="fas fa-map-marker-alt"></i> Yaoundé, Soa<br>
                                            <i class="fas fa-clock"></i> Disponible actuellement
                                        </p>
                                    </div>
                                    <div class="col-md-auto">
                                        <p class="price mbr-fonts-style display-5"><strong>60 000
                                                FCFA/<br>mois</strong>
                                        </p><br>
                                        <div class="mbr-section-btn"><a href="détails et reservation.html"
                                                class="btn btn-primary display-4">Voir les détails</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-wrapper">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4">
                            <div class="image-wrapper">
                                <a href="détails et reservation.html"><img height="200" style="border-radius: 5px;"
                                        src="assets/images/hilton-yaounde-550x363.jpg"
                                        alt="Mobirise Website Builder"></a>
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md">
                                        <h6 class="card-title mbr-fonts-style display-7"><strong>Chambre
                                                moderne</strong></h6>
                                        <p class="mbr-text mbr-fonts-style display-7">
                                            <i class="fas fa-bed"></i> 22 chambres<br>
                                            <i class="fas fa-map-marker-alt"></i> Yaoundé, Ngousso<br>
                                            <i class="fas fa-clock"></i> Disponible à partir du 20 juillet
                                            2023
                                        </p>
                                    </div>
                                    <div class="col-md-auto">
                                        <p class="price mbr-fonts-style display-5"><strong>35.000
                                                FCFA/</strong><br><strong>mois</strong>
                                        </p><br>
                                        <div class="mbr-section-btn"><a href="détails et reservation.html"
                                                class="btn btn-primary display-4">Voir les détails</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section data-bs-version="5.1" class="info3 cid-tIC9SJU1Cs" id="info3-1b">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(17, 105, 113);">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-2">Propriétaire ?</h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                Publiez vos offres en toute simplicité quelque soit la ville ou la localité partout au
                                Cameroun !</p>
                            <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4" href="#">Je
                                    dépose mon annonce</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features12 cid-tIs6Twliut" id="features13-i">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2"><strong>Nos Atouts</strong></h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">PQue vous soyez propriétaire ou en quête
                                de votre futur chez-vous, Harmony Housing vous souhaite la bienvenue. Notre plateforme
                                de réservation en ligne offre un large éventail de logements, tous publiés par des
                                propriétaires fiables et vérifiés.</p>
                            <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="#">En
                                    savoir plus !</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-lock mobi-mbri"
                                style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0);"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>Sécurité</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">La sécurité est une priorité pour
                                nous. Toutes les transactions sur notre site sont sécurisées et
                                cryptées pour assurer la protection de vos informations personnelles et financières.
                            </h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mbrib-clock"
                                style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0);"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>Rapidité</strong></h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Notre interface conviviale et
                                notre moteur de recherche rapide et efficace vous permettent de trouver et de réserver
                                votre logement idéal en quelques clics. De plus, notre plateforme est optimisée pour
                                tous les appareils, ce qui signifie que vous pouvez réserver votre prochaine maison où
                                que vous soyez, à tout moment.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri"
                                style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0);"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>Satisfaction</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Votre satisfaction est notre
                                réussite. Nous travaillons sans relâche pour assurer la qualité de nos services et pour
                                vous proposer les meilleurs logements. Choisissez Harmony Housing et vivez une
                                expérience de réservation en ligne sans tracas.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/ytplayer/index.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>

    <script>
        document.getElementById('more-filters').addEventListener('click', function() {
            var extraFilters = document.getElementById('extra-filters');
            if (extraFilters.style.display === 'none') {
                extraFilters.style.display = 'flex';
            } else {
                extraFilters.style.display = 'none';
            }
        });
    </script>
</body>

</html>
