<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise à jour des disponibilités - Harmony Housing</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="margin-top: 70px; background-color: #F8F8FF;">
    @include('commun.header-dashboard-prop')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{route('profil.pro')}}">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('reservation.show')}}">Mes réservations</a>
            </li>
            <li class="nav-item active-tab">
                <a class="nav-link" href="{{route('disponibilite.show')}}">Mettre à jour la disponibilité</a>
            </li>
        </ul>

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Mes annonces (2)
            </div>
            <div class="card-body">
                <div class="my-4">
                    <label for="search" class="form-label">Chercher une annonce :</label>
                    <input type="text" class="form-control" id="search" placeholder="Titre, adresse, etc.">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Titre de l'annonce</th>
                                <th scope="col">Fréquence de paiement</th>
                                <th scope="col">Disponible à partir du</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Boucle à ce niveau --}}
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="/images/appart.jpg" alt="Logement" class="img-fluid"
                                                style="width: 70px; height: 70px; border-radius: 5px;">
                                        </div>
                                        <div class="col-md-9">
                                            <button
                                                style="background: red; color: white; font-size: 9px; font-weight: 700; width: 70px;">HORS
                                                LIGNE</button>
                                            <span style="margin-left: 2px;"> <span><strong>Appartement bon
                                                        standing</strong></span></span><br>
                                            <span>Dschang,
                                                Cameroun</span><br>
                                        </div>
                                    </div>

                                </td>
                                <td>1 mois</td>
                                <td>
                                    25/07/2023 <button class="btn btn-editlogement btn-sm" type="button">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Plus d'options
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Modifier l'annonce</a></li>
                                            <li><a class="dropdown-item" href="#">Voir l'annonce</a></li>
                                            <li><a class="dropdown-item" href="#">Supprimer l'annonce</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="accordion" id="AccordionChambreLogement2" style="margin-left: 1%;">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="true" aria-controls="collapse2">
                                                    <strong>Voir les (2) chambre(s) de l'annonce</strong>
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                aria-labelledby="heading2" data-bs-parent="#AccordionChambreLogement2">
                                                <div class="accordion-body">

                                                    <div class="card my-1">
                                                        <div class="card-body" style="padding-bottom: 0px;">
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr
                                                                        style="border-left: solid #004aad; height: 0px;">
                                                                        <td style="width: 48%;"><span>Chambre 1</span> -
                                                                            10000 FCFA
                                                                        </td>
                                                                        <td style="width: 25.5%;">1 mois</td>
                                                                        <td style="width: 27%;">
                                                                            25/07/2023 <button
                                                                                class="btn btn-editchambre btn-sm"
                                                                                type="button">
                                                                                <i class="fas fa-edit"></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-del btn-sm">
                                                                                Supprimer</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="card my-1">
                                                        <div class="card-body" style="padding-bottom: 0px;">
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr
                                                                        style="border-left: solid #004aad; height: 0px;">
                                                                        <td style="width: 48%;"><span>Chambre 2</span>
                                                                            - 9000 FCFA
                                                                        </td>
                                                                        <td style="width: 25.5%;">3 mois</td>
                                                                        <td style="width: 27%;">
                                                                            20/07/2023 <button
                                                                                class="btn btn-editchambre btn-sm"
                                                                                type="button">
                                                                                <i class="fas fa-edit"></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-del btn-sm">
                                                                                Supprimer</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="/images/appart2.webp" alt="Logement" class="img-fluid"
                                                style="width: 70px; height: 70px; border-radius: 5px;">
                                        </div>
                                        <div class="col-md-9">
                                            <button
                                                style="background: green; color: white; font-size: 9px; font-weight: 700; width: 70px;">EN
                                                LIGNE</button>
                                            <span style="margin-left: 2px;"><span><strong>Chambre
                                                        magnifique</strong></span></span><br>
                                            <span>Yaoundé,
                                                Cameroun</span><br>
                                        </div>
                                    </div>

                                </td>
                                <td>6 mois</td>
                                <td>
                                    15/07/2023 <button class="btn btn-editlogement btn-sm" type="button">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Plus d'options
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Modifier l'annonce</a></li>
                                            <li><a class="dropdown-item" href="#">Voir l'annonce</a></li>
                                            <li><a class="dropdown-item" href="#">Supprimer l'annonce</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="accordion" id="AccordionChambreLogement1" style="margin-left: 1%;">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                    aria-expanded="true" aria-controls="collapse1">
                                                    <strong>Voir les (1) chambre(s) de l'annonce</strong>
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse"
                                                aria-labelledby="heading1"
                                                data-bs-parent="#AccordionChambreLogement1">
                                                <div class="accordion-body">

                                                    <div class="card my-1">
                                                        <div class="card-body" style="padding-bottom: 0px;">
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr
                                                                        style="border-left: solid #004aad; height: 0px;">
                                                                        <td style="width: 48%;"><span>Chambre 1</span>
                                                                            - 15000 FCFA
                                                                        </td>
                                                                        <td style="width: 25.5%;">6 mois</td>
                                                                        <td style="width: 27%;">
                                                                            20/07/2023 <button
                                                                                class="btn btn-editchambre btn-sm"
                                                                                type="button">
                                                                                <i class="fas fa-edit"></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-del btn-sm">
                                                                                Supprimer</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script>
        function openPopup(button) {
            // Vérifier si le bouton est un bouton d'édition de logement ou de chambre
            var isRoomButton = button.classList.contains("btn-editchambre");
            var isPropertyButton = button.classList.contains("btn-editlogement");

            // Définir le titre en fonction du type de bouton
            var title;
            if (isRoomButton) {
                title = "Modifier la disponibilité de la chambre";
            } else if (isPropertyButton) {
                title = "Modifier la disponibilité du logement";
            }
            // Récupérer la fréquence de paiement et la date de disponibilité
            var frequency = button.closest("tr").querySelector("td:nth-child(2)").textContent;
            var date = button.closest("tr").querySelector("td:nth-child(3)").textContent.split(" ")[0];
            // Créer un élément qui recouvre toute la page
            var overlay = document.createElement("div");
            overlay.className = "overlay";
            overlay.style.position = "fixed";
            overlay.style.top = "0";
            overlay.style.left = "0";
            overlay.style.width = "100%";
            overlay.style.height = "100%";
            overlay.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
            // Ajouter l'élément au document
            document.body.appendChild(overlay);
            // Créer la fenêtre popup
            var popup = document.createElement("div");
            popup.className = "popup";
            popup.style.position = "fixed";
            popup.style.top = "55%";
            popup.style.left = "50%";
            popup.style.transform = "translate(-50%, -50%)";
            popup.style.width = "500px";
            popup.style.height = "auto";
            popup.style.backgroundColor = "white";
            popup.style.border = "1px solid white";
            popup.style.borderRadius = "10px";
            popup.style.zIndex = "9999";
            // Créer le contenu de la fenêtre popup
            var content = document.createElement("div");
            content.className = "popup-content";
            content.style.padding = "20px";
            content.innerHTML = `
            <h4 style="text-align:center;">${title}</h4>
            <div class="form-group mt-4">
                <label for="date">Disponible à partir du</label>
                <input type="date" class="form-control" id="date" value="${date}">
            </div>
            <div class="form-group mt-2">
                <label for="frequency">Fréquence de paiement</label>
                <select class="form-control" id="frequency">
                    <option ${frequency == "1 mois" ? "selected" : ""}>1 mois</option>
                    <option ${frequency == "3 mois" ? "selected" : ""}>3 mois</option>
                    <option ${frequency == "6 mois" ? "selected" : ""}>6 mois</option>
                    <option ${frequency == "1 an" ? "selected" : ""}>1 an</option>
                </select>
            </div>
            <div class="form-group mt-4" style="text-align:center;">
                <button class="btn btn-primary">Enregistrer les modifications</button>
                <button class="btn btn-danger" onclick="closePopup(this)">Annuler</button>
            </div>
        `;
            // Ajouter le contenu à la fenêtre popup
            popup.appendChild(content);
            document.body.appendChild(popup);
        }

        // Fonction pour fermer la fenêtre popup
        function closePopup(button) {
            var popup = button.closest(".popup");
            document.body.removeChild(popup);
            var overlay = document.querySelector(".overlay");
            document.body.removeChild(overlay);
        }
    </script>

    <!-- Code pour ajouter un attribut onclick aux boutons d'édition de disponibilité -->
    <script>
        var buttons = document.querySelectorAll(".btn-editchambre, .btn-editlogement");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].setAttribute("onclick", "openPopup(this)");
        }
    </script>

</body>

</html>
