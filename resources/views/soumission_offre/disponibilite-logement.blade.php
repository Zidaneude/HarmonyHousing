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


</head>

<body style="margin-top: 70px; background-color: #F8F8FF;">
    @include('commun.header-dashboard-prop')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profil.pro') }}">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reservation.show') }}">Mes réservations</a>
            </li>
            <li class="nav-item active-tab">
                <a class="nav-link" href="{{ route('disponibilite.show') }}">Mettre à jour la disponibilité</a>
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
                                    25/07/2023 <button class="btn btn-editlogement btn-sm" type="button"
                                        data-bs-date="2023-07-25">
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
                                            <li><a class="dropdown-item" href="{{ route('soumission.offre') }}">Modifier
                                                    l'annonce</a></li>
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
        var buttons = document.querySelectorAll(".btn-editchambre, .btn-editlogement");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].setAttribute("data-bs-toggle", "modal");
            buttons[i].setAttribute("data-bs-target", "#modal");
            // Ajoutez un attribut data-bs-logement ou data-bs-chambre pour indiquer le type de bouton
            if (buttons[i].classList.contains("btn-editchambre")) {
                buttons[i].setAttribute("data-bs-chambre", "true");
            } else if (buttons[i].classList.contains("btn-editlogement")) {
                buttons[i].setAttribute("data-bs-logement", "true");
            }
        }
    </script>

    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalLabel">Modifier la disponibilité</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group mt-4">
                        <label for="date">Disponible à partir du</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group mt-2">
                        <label for="frequency">Fréquence de paiement</label>
                        <select class="form-control" id="frequency">
                            <option>1 mois</option>
                            <option>3 mois</option>
                            <option>6 mois</option>
                            <option>1 an</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Enregistrer les modifications</button>
                    <button class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var modal = document.getElementById("modal");
        modal.addEventListener("show.bs.modal", function(event) {
            // Récupérer le bouton qui a activé le modal
            var button = event.relatedTarget;
            // Définir le titre en fonction du type de bouton
            var title;
            if (button.hasAttribute("data-bs-chambre")) {
                title = "Modifier la disponibilité de la chambre";
            } else if (button.hasAttribute("data-bs-logement")) {
                title = "Modifier la disponibilité du logement";
            }
            // Récupérer la fréquence de paiement et la date de disponibilité
            var frequency = button.closest("tr").querySelector("td:nth-child(2)").textContent;
            var date = button.getAttribute("data-bs-date");
            // Modifier le titre du modal
            modal.querySelector(".modal-title").textContent = title;
            // Modifier la valeur du champ date du modal
            modal.querySelector("#date").value = date;
            // Modifier la valeur du champ fréquence du modal
            modal.querySelector("#frequency").value = frequency;
        });
    </script>

</body>

</html>
