<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>FAQ Propriétaire</title>
</head>

<body>
    @include('commun/header')
    <br>
    <br>
    <br>

    <!-- Example Code -->
    <div class="container">
        <br>
        <h1>FAQ Propriétaire</h1>
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
                            <font style="vertical-align: inherit;"> Comment créer un compte ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Pour créer un compte, cliquez sur le bouton "S'inscrire" en haut à droite de la page
                                d'accueil. Vous pouvez vous inscrire avec votre adresse email ou avec votre compte
                                Facebook ou Google. Remplissez les informations demandées et validez votre inscription.
                                Vous recevrez un email de confirmation avec un lien pour activer votre compte.
                            </font>
                        </font>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Comment publier une annonce ?</font>
                        </font>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        Pour publier une annonce, vous devez être inscrit et connecté à votre compte. Cliquez sur le
                        bouton "Publier une annonce" en haut à droite de la page d'accueil. Remplissez le formulaire de
                        soumission avec les informations nécessaires sur votre logement (chambre ou appartement).
                        Ajoutez des photos, une description et le prix de votre offre. Validez votre annonce et attendez
                        l'approbation de l'équipe d'Harmony Housing.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Comment gérer mes annonces ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Pour gérer vos annonces, vous devez vous connecter à votre compte et aller dans la
                                rubrique "Mes annonces". Vous pourrez voir le statut de vos annonces (en attente,
                                approuvée, réservée, etc.), les modifier, les supprimer ou les mettre en pause. Vous
                                pourrez également voir les coordonnées des locataires qui ont réservé vos logements.
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
                            <font style="vertical-align: inherit;"> Comment modifier mes
                                coordonnées ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <p>Pour modifier vos coordonnées :</p>
                                <p>1. Cliquez sur votre nom, en haut à droite de l’écran.</p>
                                <p>2. Cliquez sur Mon profil dans le menu déroulant.</p>
                                <p>3. Une fois vos modifications terminées, cliquez sur
                                    Enregistrer en bas de l’écran.</p>
                                <p>Si vous souhaitez modifier votre adresse mail,
                                    informez-nous en nous contactant via le chat en ligne
                                    directement sur la plateforme</p>
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
        </div>
    </div>
    <br>
    <br>
    <br> @include('commun/footer')
    <!-- End Example Code -->
</body>

</html>
