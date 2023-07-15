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
    <style>
        @media (max-width: 600px) {
            .column img {
                display: none;
            }
        }

        .success-message {
            color: #008000;
            border: 2px solid #008000;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.5);
            transition: transform 0.3s ease-in-out;
        }


        .success-message i {
            margin-right: 10px;
            margin-left: 5px;
        }

        .success-message p {
            font-size: 18px;
        }

        .success-message::before {
            content: "";
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(to right, #008000, #00ff00);
            z-index: -1;
        }
    </style>
</head>

<body>
    @include('commun/header')

    <div class="contact-container">

        <br><br><br>
        <div class="card aborder-type">
            <div style="text-align:center">
                <h2 class="mt-4">Contactez-nous</h2>
                <p>Vous pouvez nous contacter en remplissant le formulaire ci-dessous. Nous vous répondrons dans les
                    plus brefs délais.</p>
            </div>

            <!-- La toute premieier colone de la page de contact -->

            <div class="row">
                <!-- photo de la page de contact -->
                <div class="column image-column" style="display: flex; justify-content: center;">
                    <img height="550" width="300" src="images/photo-contact.png">
                </div>

                <!-- La deuxieme colone de la page de contact -->

                <div class="column form-group pb-3">


                    <form id="contact-form" enctype="multipart/form-data">

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
                            style="background-color: #F8F8FF; height:150px;" required></textarea>


                        <!-- BOUTON de soumission du formulaire -->
                        <input type="submit" value="Envoyer" style="border-radius: 15px">
                    </form>
                </div>

            </div>
        </div>
        <br><br>
    </div>

    @include('commun/footer')
    <script>
        // Sélectionner la carte par sa classe
        $(".card").on('submit', function(e) {
            // Empêcher le rechargement de la page
            e.preventDefault();

            // Appeler la fonction d'envoi du message ici.

            // Créer le message de succès
            var message =
                '<div class="card-body success-center">' +
                '<h4 class="card-title text-center title-accueil mt-3" style="font-weight: bold; color: #0f0f11;">Message envoyé</h4>' +
                '<div class="success-message my-5" display: flex; justify-content: center; align-items: center;>' +
                '<i class="fas fa-check-circle"></i>' +
                '<p class="mt-3">Merci de nous avoir contacté. Nous vous répondrons dans les plus brefs délais.</p>' +
                '</div>' +
                '</div>';

            // Remplacer le contenu de la carte par le message de succès
            $(".card").html(message);

        });
    </script>

</body>

</html>
