<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="icon" href="images/favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>FAQ Locataire</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body>
    @include('commun/header')
    <br>
    <br>
    <br>

    <!-- Example Code -->
    <div class="container">
        <br>
        <h1>FAQ Locataire</h1>
        <br>
        <br>
        <div class="accordion-item mb-5">
            <p>Comment vous connecter, gérez vos logement en ligne, contacter
                l'équipe... On répond ici à toutes vos questions !</p>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Comment créer un compte ?
                            </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <p style="vertical-align: inherit;"> Pour créer un compte, cliquez sur le bouton
                                "S'inscrire" en haut à droite de la page d'accueil. Vous pouvez vous inscrire avec votre
                                adresse email ou avec votre compte Facebook ou Google. Remplissez les informations
                                demandées et validez votre inscription. Vous recevrez un email de confirmation avec un
                                lien pour activer votre compte.
                            </p>
                        </font>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Comment rechercher un logement ?
                            </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        Pour rechercher un logement, utilisez le moteur de recherche en haut de la page d'accueil. Vous
                        pouvez indiquer la ville, le type de logement (chambre ou appartement), le prix, la superficie,
                        le nombre de chambres et d'autres critères. Cliquez sur le bouton "Rechercher" pour afficher les
                        résultats. Vous pouvez trier et filtrer les offres selon vos préférences.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Quels sont les avantages de créer un compte sur
                                Harmony Housing ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                En créant un compte sur Harmony Housing, vous pourrez accéder à toutes les
                                fonctionnalités du site, comme la recherche, la réservation, le paiement, le contact
                                avec les propriétaires, les avis, etc. Vous pourrez également gérer vos réservations,
                                vos favoris, vos messages et vos paramètres depuis votre tableau de bord.
                            </font>
                        </font>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Quels sont les critères de qualité des logements
                                proposés sur Harmony Housing ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Les logements proposés sur Harmony Housing doivent respecter des critères de qualité
                                minimum, comme la propreté, le confort, la sécurité, l'équipement, etc. Nous vérifions
                                chaque annonce avant de l'approuver et nous nous assurons que les photos et les
                                descriptions correspondent à la réalité. Nous comptons également sur les avis des
                                locataires pour évaluer la qualité des logements.
                            </font>
                        </font>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Comment supprimer mon
                                compte ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">

                        <p>Nous sommes navrés de vous voir partir. Pour supprimer
                            votre compte :</p>
                        <p>1. Cliquez sur votre nom, en haut à droite de l’écran.</p>
                        <p>2. Cliquez sur Mon profil dans le menu déroulant.</p>
                        <p>3. Cliquez sur Supprimer mon compte en bas de la page.</p>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Quels sont les modes de paiement acceptés ?
                            </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">Sur Harmony Housing, vous pouvez payer les frais de réservation par
                        carte bancaire ou par mobile money. Le paiement est sécurisé et crypté. Pour le paiement du
                        montant restant du logement, vous devez vous arranger avec le propriétaire et choisir le mode de
                        paiement qui vous convient le mieux (espèces, chèque, virement, etc.).</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Comment
                        réserver un logement sur Harmony Housing</button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" id="family">Pour réserver un logement, vous devez être inscrit et
                        connecté à votre compte. Sélectionnez l'offre qui vous intéresse et cliquez sur le bouton
                        "Réserver". Vous serez redirigé vers une page de paiement sécurisé où vous devrez payer les
                        frais de réservation qui correspondent à 5% du montant total du logement. Une fois le paiement
                        effectué, vous recevrez les coordonnées du propriétaire pour le contacter et poursuivre la
                        transaction.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingHeigth">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseHeigth" aria-expanded="false" aria-controls="collapseHeigth">
                        Comment visiter le logement que j'ai réservé ?</button>
                </h2>
                <div id="collapseHeigth" class="accordion-collapse collapse" aria-labelledby="headingHeigth"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body" id="family">
                        Vous pouvez demander au propriétaire de vous faire visiter le logement si vous le souhaitez.
                        C'est à vous de vous arranger avec lui pour fixer un rendez-vous et un lieu de rencontre. Nous
                        vous conseillons de visiter le logement avant de finaliser le paiement.
                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    <br>
    <br> @include('commun/footer')
    <!-- End Example Code -->
</body>

</html>
