<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Réservation de logements - Harmony Housing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <style>
        @keyframes zoom {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.2);
            }
        }

        @keyframes pulse {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.2);
            }
        }

        /* CSS pour les grands écrans */
        @media (min-width: 770px) {
            .section-cta {
                position: absolute !important;
                right: 25px;
                 !important;
                top: 200px !important;
                width: auto !important;
            }
        }

        /* CSS pour les petits écrans */
        @media (max-width: 770px) {
            .section-cta {
                margin-top: 20px !important;
            }

            .hide-on-small {
                display: none !important;
            }

            .center-on-small {
                text-align: center !important;
            }
        }

        .circle-icon {
            /* votre style actuel ici */
        }

        .animated-icon {
            transition: all 0.3s ease-in-out;
        }

        .animated-icon:hover {
            transform: scale(1.1);
        }

        .stats-text {
            font-size: 15px;
            font-weight: bold;
            color: #333;
        }

        .stats-text::before {
            content: "";
            display: block;
            height: 2px;
            width: 50px;
            background: #2EB88A;
            margin: 10px auto;
        }
    </style>
</head>

@include('commun/header')

<body style="margin-top: 60px;">


    <div class="background-section" id="banner">
        <div class="container h-100 d-flex align-items-center justify-content-sm-center justify-content-md-start">
            <div class="row justify-content-between">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form method="GET" action="{{ route('recherche.from.homme') }}">
                        <div class="card card-logement" style="border-radius: 10px;">
                            <div class="card-body text-center">
                                <h5 class="card-title">Vous cherchez un logement à louer?</h5>
                                <div class="form-group mt-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text circle-icon" id="basic-addon1">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="city"
                                            placeholder="Entrez la ville" name="ville">
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <input type="number" class="form-control" placeholder="Budget maximum (en FCFA)"
                                        name="budget_max">
                                </div>
                                <div class="form-group my-3">
                                    <div class="row">
                                        <div class="col form-check d-flex align-items-center justify-content-center">
                                            <input class="form-check-input me-2" name="type" type="radio"
                                                id="chambre" value="chambre">
                                            <label class="form-check-label" for="chambre">Chambre</label>
                                        </div>
                                        <div class="col form-check d-flex align-items-center justify-content-center">
                                            <input class="form-check-input me-2" name="type" type="radio"
                                                id="appartement" value="appartement">
                                            <label class="form-check-label" for="appartement">Appartement</label>
                                        </div>
                                    </div>
                                </div>

                                <button style="width: 100%;" type="submit" class="btn btn-primary">Chercher</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="section-cta d-flex flex-md-column position-relative ml-auto mb-3 w-auto w-md-50"
                    style="margin-top:20px;">
                    <a href="{{ route('connexion.proprietaire.create') }}"
                        class="btn btn-primary mb-2 mr-2 mr-md-0 d-flex align-items-center w-100 h-sm-100 mx-1"
                        role="button" aria-label="Je suis propriétaire"
                        style="transform: inherit; transition: inherit;">
                        <div class="speaker" style="position: relative; margin-right: 10px;">
                            <i class="fas fa-bullhorn" style="animation: zoom 1s infinite alternate;"></i>
                        </div>
                        <div style="text-align: left;">
                            <div class="h5 mb-0 center-on-small" style="font-size: 16px; text-transform: uppercase;">Je
                                suis propriétaire</div>
                            <small class="text-muted hide-on-small" style="font-size: 12px;">Je souhaite annoncer un
                                logement gratuitement</small>
                        </div>
                    </a>
                    <a href="{{ route('connexion.locataire.create') }}"
                        class="btn btn-dark mb-2 d-flex align-items-center w-100 h-sm-100 mx-1" role="button"
                        aria-label="Je suis locataire" style="transform: inherit; transition: inherit;">
                        <i class="fas fa-search"
                            style="margin-right: 10px; animation: pulse 1s infinite alternate;"></i>
                        <div style="text-align: left;">
                            <div class="h5 mb-0 center-on-small" style="font-size: 16px; text-transform: uppercase;">Je
                                suis locataire</div>
                            <small class="text-muted hide-on-small" style="font-size: 12px;">Je cherche une maison à
                                louer</small>
                        </div>
                    </a>
                </div>


            </div>

        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center text-center my-4">
            <div class="col-4">
                <div class="circle-icon animated-icon">
                    <i class="fas fa-users"></i>
                </div>
                <p class="stats-text">+500 utilisateurs satisfaits</p>
            </div>
            <div class="col-4">
                <div class="circle-icon animated-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <p class="stats-text">+30 annonces vérifiées</p>
            </div>
            <div class="col-4">
                <div class="circle-icon animated-icon">
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="stats-text">4,5 / 5 sur +25 avis</p>
            </div>
        </div>

        <h4 class="text-center my-4 title-accueil">Louez pour un mois minimum, partout au Cameroun.</h4>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=douala" class="city-card"
                        style="background-image: url('images/douala.jpg')">
                        <h4 class="city-title">Douala</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=yaoundé" class="city-card"
                        style="background-image: url('images/yaounde.jpg')">
                        <h4 class="city-title">Yaoundé</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=dschang" class="city-card"
                        style="background-image: url('images/dschang.jpg')">
                        <h4 class="city-title">Dschang</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=bafoussam" class="city-card"
                        style="background-image: url('images/bafoussam.jpg')">
                        <h4 class="city-title">Bafoussam</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=bertoua" class="city-card"
                        style="background-image: url('images/bertoua.jpg')">
                        <h4 class="city-title">Bertoua</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=ebolowa" class="city-card"
                        style="background-image: url('images/ebolowa.webp')">
                        <h4 class="city-title">Ebolowa</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=garoua" class="city-card"
                        style="background-image: url('images/garoua.webp')">
                        <h4 class="city-title">Garoua</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="/search?ville=ngaoundéré" class="city-card"
                        style="background-image: url('images/ngaoundere.jpg')">
                        <h4 class="city-title">Ngaoundéré</h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center my-4">
            <a href="/search" class="btn btn-primary ">Voir d'autres villes</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-center my-4 title-accueil">Profitez d'une expérience de location plus fluide et
                    tranquille.</h4>
                <p>Que vous souhaitiez louer pour une durée d'un mois à un an, nous vous offrons la possibilité de
                    réserver votre logement auprès de propriétaires de confiance, tout en bénéficiant d'un
                    accompagnement personnalisé.</p>
                <br>
                <a href="search" class="btn btn-primary">Je commence mes recherches</a>
                <br>
                <br>
                <br>
            </div>
            <div class="col-lg-6 background-image">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card bg-light mb-3">
                    <div class="card-body stepscard">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <h5 class="card-title sous-titre"><i class="fas fa-check-circle circle-icon"></i>
                                    Précisez vos conditions</h5>
                                <p class="card-text">Indiquez vos critères de location, nous sélectionnons des offres
                                    adaptées à vos besoins. Ici, tout est personnalisé.</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <h5 class="card-title sous-titre"><i class="fas fa-home circle-icon"></i> Choisissez
                                    votre logement</h5>
                                <p class="card-text">Un logement vous plaît ? Communiquez avec le propriétaire via
                                    notre messagerie instantanée.</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <h5 class="card-title sous-titre"><i class="fas fa-credit-card circle-icon"></i>
                                    Réservez et payez en ligne</h5>
                                <p class="card-text">Finalisez votre réservation en effectuant le premier paiement sur
                                    notre plateforme, en toute sécurité.</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <h5 class="card-title sous-titre"><i class="fas fa-smile circle-icon"></i> Souriez,
                                    vous êtes guidés</h5>
                                <p class="card-text">Du début à la fin de votre location, nous vous accompagnons et
                                    nous nous engageons à vous reloger en cas d'imprévus.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <br>
                                <a href="/FAQ-Locataire" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="text-center my-4 title-accueil">Pas de soucis, vous êtes bien informé sur l'endroit où vous allez
            séjourner.</h4>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/chambre-douala.jpg" alt="Chambre située à Douala">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i class="fas fa-map-marker-alt"></i> Douala</h5>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="images/chambre-yaounde.jpg" alt="Chambre située à Yaoundé">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i class="fas fa-map-marker-alt"></i> Yaoundé</h5>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="images/chambre-dschang.jpg" alt="Chambre située à Dschang">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i class="fas fa-map-marker-alt"></i> Dschang</h5>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5 class="card-title sous-titre" style="text-align: left;">Des annonces vérifiées à 100%</h5>
                    <p>On contrôle la fiabilité des annonces et des profils de nos utilisateurs. On incite même nos
                        loueurs à vous satisfaire avec un taux de réponse rapide, un profil complet et des logements de
                        qualité. </p>
                </div>
                <div class="col-sm-4">
                    <h5 class="card-title sous-titre" style="text-align: left;">Finis les tracas administratifs !
                    </h5>
                    <p>Les documents demandés sont réduits au strict minimum et accessibles à tout moment sur la
                        plateforme. Du dossier de location à la signature du bail, on facilite vos démarches en les
                        digitalisant.</p>
                </div>
                <div class="col-sm-4">
                    <h5 class="card-title sous-titre" style="text-align: left;">Un accompagnement même après la
                        réservation
                    </h5>
                    <p>On tient compte de vos envies et de vos contraintes pour vous trouver le logement idéal. On vous
                        reloge en cas d’imprévus et vous propose des services post-réservation comme l’assurance
                        habitation. Tranquillité assurée !</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-primary">
        <div class="container py-5">
            <h4 class="text-center text-white">Propriétaire</h4>
            <p class="text-white my-5">Optimisez la gestion de votre location à long terme avec des fonctionnalités
                personnalisées telles que les transactions sécurisées, des assurances
                contre les impayés et les dégradations, tout en bénéficiant de l'assistance de notre équipe d'experts.
            </p>
            <div class="text-center">
                <a href="/FAQ-Proprietaire" class="btn btn-custom">En savoir plus</a>
            </div>
        </div>
    </div>

    @include('commun/footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    </div>
    <script>
        window.onload = function() {
            var banners = ['/images/banner1.jpg', '/images/banner2.jpg', '/images/banner3.jpg'];
            var banner = banners[Math.floor(Math.random() * banners.length)];
            document.getElementById('banner').style.backgroundImage = 'url(' + banner + ')';
        }
    </script>
</body>

</html>
