<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Comment ca marche ?</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">

</head>

<body>
    @include('commun/header')
    <!-- Example Code -->
    <br>
    <br>
    <br>
    <div class="test-align mb-5"><br><br>
        <h1>Comment ça marche ?</h1>
        <h3>Trouvez ou proposez un logement en quelques clics !</h3>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 style="text-align: center;">Pour le locataire</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-search"></i> Trouvez le logement idéal</h5>
                        <p class="card-text">Recherchez parmi des centaines d'offres de chambres et d'appartements au
                            Cameroun, selon vos critères de prix, de localisation, de superficie, etc. Comparez les
                            photos, les descriptions et les avis des autres locataires pour faire votre choix.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-lock"></i> Réservez en ligne en toute sécurité</h5>
                        <p class="card-text">Une fois que vous avez trouvé le logement qui vous convient, créez votre
                            compte ou connectez-vous si vous en avez déjà un. Payez les frais de réservation qui
                            correspondent à 5% du montant total du logement. Vous recevrez ensuite les coordonnées du
                            propriétaire pour le contacter et poursuivre la transaction.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-home"></i> Profitez de votre nouveau chez-vous</h5>
                        <p class="card-text">Contactez le propriétaire par whatsapp, email ou tout autre moyen à votre
                            convenance. Visitez le logement si vous le souhaitez et finalisez le paiement en mains
                            propres ou via tout autre moyen donné par le propriétaire. Si vous n'êtes pas satisfait du
                            logement ou si le propriétaire ne vous a pas logé, vous pouvez demander un remboursement des
                            frais de réservation dans un délai de 7 jours suivant la date de réservation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 style="text-align: center;">Pour le propriétaire</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-plus"></i> Publiez votre annonce gratuitement</h5>
                        <p class="card-text">Créez votre compte ou connectez-vous si vous en avez déjà un. Remplissez le
                            formulaire de soumission avec les informations nécessaires sur votre logement (chambre ou
                            appartement). Ajoutez des photos, une description et le prix de votre offre. Validez votre
                            annonce et attendez l'approbation de l'équipe d'Harmony Housing.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-bell"></i> Recevez des réservations qualifiées</h5>
                        <p class="card-text">Une fois que votre annonce est approuvée, elle est visible par les
                            locataires potentiels qui recherchent un logement au Cameroun. Vous recevrez une
                            notification à chaque fois qu'un locataire réserve votre logement en payant les frais de
                            réservation de 5% du montant total. Vous pourrez voir le statut de votre annonce dans votre
                            tableau de bord avec "Réservé".</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-handshake"></i> Contactez le locataire et finalisez la
                            transaction</h5>
                        <p class="card-text">Vous aurez accès aux coordonnées du locataire qui a réservé votre logement.
                            Vous pourrez le contacter par whatsapp, email ou tout autre moyen à votre convenance.
                            Arrangez-vous pour lui faire visiter le logement si nécessaire et recevez le paiement
                            restant en mains propres ou via tout autre moyen que vous lui proposerez.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br> @include('commun/footer')
    <!-- End Example Code -->

</body>

</html>
