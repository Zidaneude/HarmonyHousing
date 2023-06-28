<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Location de logements - Harmony Housing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/flavicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body>
    <div class="background-section">
        <nav id="myNavbar" class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img id="myLogo" src="images/logo1.png" height="40" alt="Logo Harmony Housing">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trouver un logement</a>
                        </li>
                        <li class="nav-item dropdown" id="navbarDropdownParent">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                Je suis propriétaire <i id="dropdownIcon" class="fa-solid fa-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Déposer une annonce</a>
                                <a class="dropdown-item" href="#">Comment ça marche</a>
                                <a class="dropdown-item" href="{{route('login-proprietaire')}}">Me connecter</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactez-nous</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-account">Mon compte</a>
                        </li>
                    </ul>
                </div>
        </nav>

        <div class="hero-text">
            <h1>Trouvez votre chez-vous idéal aujourd'hui !</h1>
            <a href="lien_vers_votre_page" class="btn btn-primary">Je commence mes recherches</a>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center text-center my-4">
            <div class="col-4">
                <div class="circle-icon">
                    <i class="fas fa-users"></i>
                </div>
                <p>+500 utilisateurs satisfaits</p>
            </div>
            <div class="col-4">
                <div class="circle-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <p>+30 annonces vérifiées</p>
            </div>
            <div class="col-4">
                <div class="circle-icon">
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>4,5 / 5 sur +25 avis</p>
            </div>
        </div>

        <h4 class="text-center my-4 title-accueil">Louez pour un mois minimum, partout au Cameroun.</h4>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/douala.jpg')">
                        <h4 class="city-title">Douala</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/yaounde.jpg')">
                        <h4 class="city-title">Yaoundé</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/dschang.jpg')">
                        <h4 class="city-title">Dschang</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/bafoussam.jpg')">
                        <h4 class="city-title">Bafoussam</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/bertoua.jpg')">
                        <h4 class="city-title">Bertoua</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/ebolowa.webp')">
                        <h4 class="city-title">Ebolowa</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/garoua.webp')">
                        <h4 class="city-title">Garoua</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="#" class="city-card" style="background-image: url('images/ngaoundere.jpg')">
                        <h4 class="city-title">Ngaoundéré</h4>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center my-4">
            <a href="lien_vers_votre_page" class="btn btn-primary ">Voir d'autres villes</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-center my-4 title-accueil">Profitez d'une expérience de location plus fluide et
                    tranquille.</h4>
                <p>Que vous souhaitiez louer pour une durée d'un mois à deux ans, nous vous offrons la possibilité de
                    réserver votre logement auprès de propriétaires de confiance, tout en bénéficiant d'un
                    accompagnement personnalisé.</p>
                <br>
                <a href="#" class="btn btn-primary">Je commence mes recherches</a>
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
                            <div class="col-lg-3">
                                <h5 class="card-title sous-titre"><i class="fas fa-check-circle circle-icon"></i>
                                    Précisez vos conditions</h5>
                                <br>
                                <p class="card-text">Indiquez vos critères de location, nous sélectionnons des offres
                                    adaptées à vos besoins. Ici, tout est personnalisé.</p>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="card-title sous-titre"><i class="fas fa-home circle-icon"></i> Choisissez
                                    votre logement</h5>
                                <p class="card-text">Un logement vous plaît ? Communiquez avec le propriétaire via
                                    notre messagerie instantanée.</p>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="card-title sous-titre"><i class="fas fa-credit-card circle-icon"></i>
                                    Réservez et payez en ligne</h5>
                                <p class="card-text">Finalisez votre réservation en effectuant le premier paiement sur
                                    notre plateforme, en toute sécurité.</p>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="card-title sous-titre"><i class="fas fa-smile circle-icon"></i> Souriez,
                                    vous êtes guidés</h5>
                                <p class="card-text">Du début à la fin de votre location, nous vous accompagnons et
                                    nous nous engageons à vous reloger en cas d'imprévus.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <br>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
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
                <a href="#" class="btn btn-custom">En savoir plus</a>
            </div>
        </div>
    </div>

    @include('footer');

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </div>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("myNavbar").className =
                    "navbar navbar-expand-lg navbar-light bg-white scrolled fixed-top";
                document.getElementById("myLogo").src = "images/logo.png";
            } else {
                document.getElementById("myNavbar").className =
                    "navbar navbar-expand-lg navbar-dark bg-transparent fixed-top";
                document.getElementById("myLogo").src = "images/logo1.png";
            }
        }

        $(document).ready(function() {
            $("#navbarDropdownParent").hover(
                function() {
                    $("#dropdownIcon").removeClass("fa-chevron-down");
                    $("#dropdownIcon").addClass("fa-chevron-up");
                },
                function() {
                    $("#dropdownIcon").removeClass("fa-chevron-up");
                    $("#dropdownIcon").addClass("fa-chevron-down");
                }
            );
        });
    </script>
</body>

</html>
