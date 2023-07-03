<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('header-dashboard-prop')
    <div class="container">
        <div style="color: #004aad;">
            <h4>👋🏼 Bienvenue,{{Auth::guard('proprietaire')->user()->nom}}!</h4>
        </div>

        <div class="row">
            <h6 class="mb-4">Publiez dès maintenant une annonce de votre logement.</h6>
            <div class="col-lg-9 mb-4">
                <div class="accordion" id="myAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header d-flex justify-content-between align-items-center" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span style="font-weight: bold;">0 Annonce(s)</span>
                            </button>
                            <a href="{{route('soumission.offre')}}" class="btn btn-success btn-sm d-flex align-items-center"
                                type="button">
                                <div class="col-2">
                                    <i class="fas fa-plus-circle fa-lg"></i>
                                </div>
                                <div class="col-10">
                                    Publier une annonce
                                </div>
                            </a>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#myAccordion">
                            <div class="accordion-body">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- A ce niveau, utilisez forelse au lieu de foreach pour afficher le message : "Vous n'avez aucune annonce active actuellement." si la liste est vide --}}
                                        <div class="card mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img height="225" src="images/appart.jpg" class="card-img"
                                                        alt="Photo">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p style="font-size: 15px;" class="card-text">
                                                            Identifiant : 83321&nbsp;&nbsp;&nbsp;
                                                            <span
                                                                style="text-align: center; font-size: 15px; font-weight: 500;"
                                                                class="text-center">État : 🟢</span>
                                                            <span
                                                                style="float: right; font-size: 15px; font-weight: 500;">Prix
                                                                : De 100 000F à 180
                                                                000F</span>
                                                        </p>
                                                        <a href="#" style="text-decoration: none;">
                                                            <h5 style="color: #004aad" class="card-title">Hilton
                                                                Yaoundé</h5>
                                                        </a>
                                                        <p style="color: #004aad" class="card-text">Bd du 20 mai,
                                                            Yaoundé</p>
                                                        <p class="card-text"> <span
                                                                style="font-weight: 500;">Disponibilité :</span>
                                                            Les locataires peuvent voir
                                                            l'annonce</p>
                                                        <a href="#" class="btn btn-primary">Modifier l'annonce</a>
                                                        <a href="#" class="btn btn-del">Supprimer l'annonce</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-md-4">
                                                    <img height="225" src="images/appart2.webp" class="card-img"
                                                        alt="Photo">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p style="font-size: 15px;" class="card-text">
                                                            Identifiant : 83322&nbsp;&nbsp;&nbsp;
                                                            <span
                                                                style="text-align: center; font-size: 15px; font-weight: 500;"
                                                                class="text-center">État : 🔴</span>
                                                            <span
                                                                style="float: right; font-size: 15px; font-weight: 500;">Prix
                                                                : De 150 000F à 200
                                                                000F</span>
                                                        </p>
                                                        <a href="#" style="text-decoration: none;">
                                                            <h5 style="color: #004aad" class="card-title">La Falaise
                                                                Yaoundé</h5>
                                                        </a>
                                                        <p style="color: #004aad" class="card-text">Ave Merechal Foch,
                                                            Yaoundé</p>
                                                        <p class="card-text"> <span
                                                                style="font-weight: 500;">Disponibilité :</span>
                                                            Les locataires ne peuvent pas voir
                                                            l'annonce</p>
                                                        <a href="#" class="btn btn-primary">Modifier l'annonce</a>
                                                        <a href="#" class="btn btn-del">Retirer l'annonce</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="demo mt-5">
                                            <nav class="pagination-outer" aria-label="Page navigation">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a href="#" class="page-link" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: #004aad;" class="card-title">Le saviez-vous ?</h6>
                        <p class="card-text">Vous êtes propriétaire au Cameroun ? Lorsque vous réservez
                            sur Harmony
                            Housing, vous profitez d'une protection gratuite contre les dommages aux
                            biens et à
                            l'immobilier.</p>

                        <ul>
                            <li>
                                <a style="text-decoration: none; color: #102180;" href="#"><span
                                        class="chevron right"></span>
                                    Fournissez les
                                    détails de paiement pour obtenir des demandes.</a>
                            </li>
                            <br>
                            <li>
                                <a style="text-decoration: none; color: #102180;" href="#"><span
                                        class="chevron right"></span>
                                    Introduisez-vous</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h6 style="color: #004aad;" class="card-title">Votre taux de réponse</h6>
                        <p class="card-text">- %</p>
                        <p class="card-text">Nous attendons de nos bailleurs qu'ils répondent
                            aux
                            locataires dans un
                            délai de 72h. Un taux de réponse de 100% améliore l'évaluation globale de
                            votre annonce et
                            votre
                            position dans le moteur de recherche.</p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h6 style="color: #004aad;" class="card-title">Ils attendent votre retour</h6>
                        <p class="card-text">Retrouvez ici les candidats qui attendent une réaction de
                            votre part.</p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h6 style="color: #004aad;" class="card-title">Paiements à venir</h6>
                        <p class="card-text">Harmony Housing est une plateforme de réservation en
                            ligne. Ajoutez vos
                            informations de paiement pour obtenir des demandes.</p>
                        <a href="#" style="text-decoration: none;">En savoir plus</a>
                        <br>
                        <br>
                        <a href="#" class="btn btn-primary float-end">Voir tous les
                            paiements</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <h4 class="mb-3" style="color: #004aad;">Guides & Conseils</h4>
            <div class="col-lg-4 btn-primary2">
                <a href="#" style="text-decoration: none; color: #004aad;">
                    <div class="card mb-3">
                        <img height="225" src="images/article1.avif" class="card-img-top" alt="Article 1">
                        <div class="card-body">
                            <h6 class="card-title">Comment se démarquer dans les résultats de recherche
                                ? </h6>
                            <p class="card-text">Votre position dans le moteur de recherche dépend de
                                plusieurs
                                facteurs : la qualité de votre annonce, votre taux...</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 btn-primary2">
                <a href="#" style="text-decoration: none; color: #004aad;">
                    <div class="card mb-3">
                        <img height="225" src="images/article2.jpg" class="card-img-top" alt="Article 1">
                        <div class="card-body">
                            <h6 class="card-title">Guide de démarrage</h6>
                            <br>
                            <p class="card-text">Avant d'être publiée sur le site, chaque annonce est
                                vérifiée par nos
                                équipes.
                                Cette étape permet d’évaluer la qualité de...</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 btn-primary2">
                <a href="#" style="text-decoration: none; color: #004aad;">
                    <div class="card mb-3">
                        <img height="225" src="images/article3.avif" class="card-img-top" alt="Article 1">
                        <div class="card-body">
                            <h6 class="card-title">Un surplus de sécurité</h6>
                            <br>
                            <p class="card-text">Les locataires avec le badge “Profil Garanti” ont des
                                profils vérifiés
                                par Harmony Housing et sont éligibles sans frais supplémentaires...</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</body>

</html>
