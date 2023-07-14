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
    <title>FAQ Proprietaire</title>
</head>

<body>
    @include('commun/header')
    <br>
    <br>
    <br>

    <!-- Example Code -->
    <div class="container">
        <br>
        <h1>FAQ Proprietaire</h1>
        <br>
        <br>
        <div class="accordion-item">
            <p>Comment vous connecter, gerez vos logement en ligne, contacter
                l'équipe... On répond ici à toutes vos questions !</p>
        </div>
        <br>
        <br>
        <br>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Comment devenir un
                                profil vérifié ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <p>Afin de devenir un profil vérifié, c’est très simple.
                                    Après avoir déposé votre annonce, sur votre tableau de bord
                                    cliquer sur “Envoyer mes documents” Vous serez envoyé sur une
                                    page de renseignement où on vous demande d’ajouter votre nom,
                                    prénom, votre date de naissance et votre adresse.</p>
                                <p>Cliquez sur “Suivant” une fois que vous avez ajouté
                                    toutes les informations. Vous serez redirigé sur cette page.</p>
                                <P>On vous demande d’ajouter un document d'identité et un
                                    justificatif de domicile Pas de panique, nous travaillons avec
                                    Stripe pour vérifier ces documents, c’est un outil 100%
                                    sécurisé qui permet de faciliter les paiements sur notre
                                    plateforme. Une fois que c’est fait, cliquez sur “Terminé”.</P>
                                <P>Vous serez redirigé vers cette page, cliquez de nouveau
                                    sur “Terminé”. Ensuite, il vous suffit de renseigner vos
                                    informations de paiement : renseignez de nouveau votre nom et
                                    prénom ainsi que votre IBAN.</P>
                                <P>Cliquez sur “Enregistrer” Attendez entre 24 à 48h pour
                                    que l'on valide vos documents. Dès que nous les validons, vous
                                    devenez un Profil Vérifié 🎉</P>
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
                            <font style="vertical-align: inherit;"> Comment s'inscrire
                                (personne physique ou morale) ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <P>D’abord spécialisés dans le logement étudiant, nous logeons
                            les étudiants et des non fonctionnaires.</P>
                        <P>> Pour vous inscrire :</P>
                        <P>
                            1. RDV sur la page propriétaire en cliquant <a href="/connexion-proprietaire">ICI</a>
                        </P>
                        <p>2. Cliquez sur Je m'inscris en haut de la page</p>
                        <p>3. Renseignez vos informations personnelles et cliquez sur
                            S'inscrire</p>
                        <p>
                        <h4>Avec quelles informations s'inscrire si c'est une
                            personne morale qui gère le compte ?</h4>
                        À la création de votre compte propriétaire, il vous sera demandé
                        de renseigner certaines informations personnelles pour assurer la
                        sécurité de notre plateforme de paiement. Si vous créez un compte
                        pour une personne morale, renseignez simplement les informations
                        personnelles de la personne physique qui gère le compte Harmony
                        Housing au sein de votre société.

                        </p>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> Comment me connecter à
                                mon compte ? </font>
                        </font>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body" id="family">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <h3>Pour accéder à votre compte :</h3>
                                <p>1. Rendez-vous sur la plateforme sur laquelle vous avez
                                    créé votre compte.</p>
                                <p>2. Cliquez sur Connexion.</p>
                                <p>3. Saisissez votre adresse mail et votre mot de passe
                                    habituels.</p>
                                <p>4. Cliquez sur Me connecter.</p>
                                <h3>Si vous ne parvenez pas à vous connecter :</h3>
                                <p>1. Assurez-vous d’avoir saisi la bonne adresse mail, il
                                    peut arriver d’avoir oublié un point ou un tiret.</p>
                                <p>2. Assurez-vous d’avoir saisi le bon mot de passe : vous
                                    pouvez le visualiser en cliquant sur le petit oeil à droite du
                                    champs.</p>
                                <p>Cela ne fonctionne toujours pas ? Réinitialisez votre mot
                                    de passe :</p>
                                <p>1. Cliquez sur Mot de passe oublié, sous le champs Mot de
                                    passe</p>
                                <p>2. Saisissez votre adresse mail et cliquez sur Envoyer le
                                    lien de réinitialisation.</p>
                                <p>3. Rendez-vous sur votre boîte mail : cliquez sur le lien
                                    de réinitialisation qui vous a été envoyé.</p>
                                <p>4. Saisissez votre nouveau mot de passe.</p>
                                <p>Cliquez sur Confirmer.</p>
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
