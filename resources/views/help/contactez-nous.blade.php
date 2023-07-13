<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <title>Contactez nous</title>
</head>

<body>
    @include('commun/header')

    <div class="contact-container">

        <br><br><br>
        <div class="card aborder-type">
            <div style="text-align:center">
                <h2 class="mt-4">Contactez-nous</h2>
                <p>Vous pouvez nous contacter en remplissant le formulaire ci-dessous. Vous pouvez également joindre un
                    fichier si besoin.</p>
            </div>

            <!-- La toute premieier colone de la page de contact -->

            <div class="row">
                <!-- photo de la page de contact -->

                <div class="column">
                    <br><br><br><br><br>
                    <img src="images\Cle-en-main.png" style="width:100%">
                </div>

                <!-- La deuxieme colone de la page de contact -->

                <div class="column form-group pb-3">


                    <form id="contact-form" action="/action_page.php" method="post" enctype="multipart/form-data">

                        <!-- Ca  c'est le champ du NOM de celui qui soumet le formulaire -->
                        <label for="name">Nom</label>

                        <input style="background-color: #F8F8FF;" placeholder="Entrez votre nom" type="text"
                            class="form-control" id="name" required>

                        <!-- Ca  c'est le champ dE L'ADRSSE EMAIL du contact-->
                        <label for="email">Email</label>
                        <input style="background-color: #F8F8FF;" placeholder="Entrez votre adresse email"
                            type="email" class="form-control" id="email" required>



                        <!-- Ca  c'est le champ du SUJET du contact-->
                        <label for="sujet">Sujet</label>
                        <input style="background-color: #F8F8FF;" placeholder="Entrez votre suggestion" type="text"
                            class="form-control" id="sujet" required>


                        <!-- Ca  c'est le champ du contenu du MESSAGE a envoyer-->
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Écrivez quelque chose.."
                            style="background-color: #F8F8FF;" required></textarea>


                        <!-- BOUTON de soumission du formulaire -->
                        <input type="submit" value="Envoyer">
                    </form>
                </div>

            </div>
        </div>
        <br><br>
    </div>

    @include('commun/footer')
</body>

</html>
