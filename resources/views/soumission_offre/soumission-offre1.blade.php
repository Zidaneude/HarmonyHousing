<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une annonce | Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/steps-wizard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('commun.header-dashboard-prop')

    <div class="container-fluid">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center">
                <p style="color: #004aad; font-weight: bold;">Étapes de publication</p>
                <ul id="progressbar">
                    <li class="active" id="details"><strong>Détails de l'annonce</strong></li>
                    <li id="photos"><strong>Photos & Médias</strong></li>
                    <li id="valider"><strong>Terminé</strong></li>
                </ul>
            </div>
        </div>

        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="{{ route('soumission.offre.store') }}" method="POST">
                                @csrf
                                <fieldset>
                                    <div class="form-card">
                                        <h4 style="text-align: center; color: #004aad;" class="mb-4"><strong>Publier
                                                une annonce</strong></h4>
                                        <div class="form-group">
                                            <label for="titre_annonce"><strong>Titre de
                                                    l'annonce</strong><span style="color: red;">*</span></label>
                                            <!--                titre               -->
                                            <input type="text" name="titre_annonce" id="titre_annonce"
                                                class="form-control" placeholder="Entrez le titre de votre annonce"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <!-- description-->
                                            <label for="description_annonce"><strong>Description</strong></label>
                                            <textarea name="description_annonce" id="description_annonce" class="form-control" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <h5 class="fs-title mt-5" style="color: #004aad; text-align: center;">
                                            Localisation</h5>
                                        <div class="form-group">
                                            <label for="adresse">
                                                <strong>Adresse</strong></label>
                                            <!--adresse-->
                                            <input type="text" name="adresse" id="adresse" class="form-control"
                                                placeholder="Indiquez une adresse" />
                                        </div>
                                        <div class="form-group">
                                            <!-- quartier-->
                                            <label for="quartier"><strong>Quartier</strong> <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="quartier" id="quartier" class="form-control"
                                                placeholder="Indiquez un quartier" required />
                                        </div>
                                        <div class="form-group">
                                            <!--religion-->
                                            <label for="region"> <strong>Région</strong> <span
                                                    style="color: red;">*</span></label>
                                            <select name="region" id="region" class="form-control" required>
                                                <option value="">--Sélectionnez une région--</option>
                                                <option value="nord">Nord</option>
                                                <option value="sud">Sud</option>
                                                <option value="est">Est</option>
                                                <option value="ouest">Ouest</option>
                                                <option value="littoral">Littoral</option>
                                                <option value="adamaoua">Adamaoua</option>
                                                <option value="nord-ouest">Nord-Ouest</option>
                                                <option value="sud-ouest">Sud-Ouest</option>
                                                <option value="centre">Centre</option>
                                                <option value="est">Extrême-Nord</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="ville"><strong>Ville</strong> <span
                                                    style="color: red;">*</span></label>
                                            <!-- ville-->
                                            <input type="text" name="ville" id="ville" class="form-control"
                                                placeholder="Ville" required />
                                        </div>
                                        <div class="form-group">
                                            <!-- code_postal-->
                                            <label for="code_postal"><strong>Code postal</strong> </label>
                                            <input type="text" name="code_postal" id="code_postal"
                                                class="form-control" placeholder="Code postal" />
                                        </div>
                                        <h5 class="fs-title mt-5" style="color: #004aad; text-align: center;">Détails
                                            du lieu</h5>
                                        <div class="form-group">
                                            <!--type de logement-->
                                            <label for="type_logement"><i class="fas fa-home"></i><strong>Type de
                                                    logement</strong>
                                                <span style="color: red;">*</span></label>
                                            <select name="type_logement" id="type_logement" class="form-control"
                                                required>
                                                <option value="">--Sélectionnez un type de logement--</option>
                                                <option value="chambre">Chambre</option>
                                                <option value="appartement">Appartement</option>
                                                <option value="studio">Studio</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="frequence_paie"><i class="fas fa-calendar"></i>
                                                <strong>Fréquence de
                                                    paiement</strong>
                                                <span style="color: red;">*</span></label>
                                            <!-- frequence-->
                                            <select name="frequence_paie" id="frequence_paie" class="form-control"
                                                required>
                                                <option value="">--Sélectionnez une fréquence de paiement--
                                                </option>
                                                <option value="Un_Mois">1 mois</option>
                                                <option value="Trois_Mois">3 mois</option>
                                                <option value="Six_Mois">6 mois</option>
                                                <option value="Un_An">1 an</option>
                                            </select>
                                        </div>

                                        <div class="form-group mt-4">
                                            <label><strong>Chambres identiques ?</strong> <span
                                                    style="color: red;">*</span></label>
                                            <div class="row" style="margin-left:2px;">
                                                <div class="col-md-2 form-check">
                                                    <input type="radio" id="identicalYes" name="chambres"
                                                        value="oui" class="form-check-input" required>
                                                    <label for="identicalYes" class="form-check-label">Oui</label>
                                                </div>
                                                <div class="col-md-4 form-check">
                                                    <input type="radio" id="identicalNo" name="chambres"
                                                        value="non" class="form-check-input" required>
                                                    <label for="identicalNo" class="form-check-label">Non</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group mt-4">
                                            <label for="chambre"><i class="fas fa-bed"></i>
                                                <strong>Chambre(s)</strong> <span style="color: red;">*</span>
                                                <a data-toggle="tooltip"
                                                    title="ATTENTION - Ne modifiez pas ce nombre après avoir rempli les détails de chambre(s) au risque de réinitialiser vos données !">
                                                    <i class="fas fa-info-circle" style="color: #004aad;"></i>
                                                </a>
                                            </label>
                                            <input type="number" name="chambre" id="chambre" class="form-control"
                                                min="1" max="50" required
                                                placeholder="Entrez le nombre de chambre(s)"
                                                onchange="generateRoomForms()" />
                                        </div>

                                        <div id="roomFormsContainer">
                                        </div>
                                    </div>
<<<<<<< HEAD
                                    <div  >
                                        <input type="submit" class="next action-button"
                                        value="Continuer" />
=======
                                    <div>
                                        <input type="submit" name="next" class="next action-button"
                                            value="Continuer" />
>>>>>>> 5fb751f2ca19dde5b51bc5d80931435c3a318de8
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var identicalRooms = false;

        document.getElementById('identicalYes').addEventListener('change', function() {
            identicalRooms = true;
            generateRoomForms();
        });
        document.getElementById('identicalNo').addEventListener('change', function() {
            identicalRooms = false;
            generateRoomForms();
        });

        function generateRoomForms() {
            var roomCount = document.getElementById('chambre').value;
            var roomFormsContainer = document.getElementById('roomFormsContainer');

            roomFormsContainer.innerHTML = '';

            // Générer de nouveaux formulaires de chambre
            for (var i = 1; i <= (identicalRooms ? 1 : roomCount); i++) {
                var roomTitle = identicalRooms ? "Détails de la chambre" : "Chambre " + i;
                roomFormsContainer.innerHTML += `
<h6 class="mt-5" style="color:#004aad; font-size:18px; text-align:center;">${roomTitle}</h6>`;
                roomFormsContainer.innerHTML += `
        <div class="form-group">
            <label for="titre_chambre${i}">Titre de la chambre <span style="color: red;">*</span></label>
            <input type="text" name="titre_chambre${i}" id="titre_chambre${i}" class="form-control" placeholder="Titre de la chambre" required/>
        </div>
        <div class="form-group mt-4">
                                    <label for="meuble${i}"><i class="fas fa-calendar"></i> Meublé ?
                                        <span style="color: red;">*</span></label>
                                    <select name="meuble${i}" id="meuble${i}" class="form-control"
                                        required>
                                        <option value="">--Sélectionnez--
                                        </option>
                                        <option value="Oui">Oui</option>
                                        <option value="Non">Non</option>
                                    </select>
                                </div>
                                <div class="form-group mt-4">
                                <label for="disponibilite${i}"><i class="fas fa-calendar-alt"></i> Disponibilité <span style="color: red;">*</span></label>
        <input type="date" name="disponibilite${i}" id="disponibilite${i}" class="form-control" min="2023-07-01" max="2025-01-01" required />
    </div>
        <div class="form-group">
        <label for="equipements${i}"><i class="fas fa-tools"></i> Avec équipements ? <span style="color: red;">*</span></label>
        <select name="equipements${i}" id="equipements${i}" class="form-control" onchange="toggleEquipmentsContainer(${i})" required>
            <option value="">--Sélectionnez--</option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
    </div>

    <div class="form-group mt-4" id="equipmentsContainer${i}" style="display: none;">
<label><i class="fas fa-toolbox"></i> Liste des équipements <span style="color: red;">*</span></label>
<div class="row" style="margin-left:2px;">
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="chauffage${i}" value="Chauffage">
    <label class="form-check-label" for="chauffage${i}">
        Chauffage
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="fer_a_repasser${i}" value="Fer à repasser">
    <label class="form-check-label" for="fer_a_repasser${i}">
        Fer à repasser
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="ordinateur${i}" value="Ordinateur">
    <label class="form-check-label" for="ordinateur${i}">
        Ordinateur
    </label>
</div>
</div>

<div class="row" style="margin-left:2px;">
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="equipements_hygiene${i}" value="Équipements d'hygiène">
    <label class="form-check-label" for="equipements_hygiene${i}">
        Équipements d'hygiène
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="tv${i}" value="Télévision">
    <label class="form-check-label" for="tv${i}">
        Télévision
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="cintres${i}" value="Cintres pour vêtements">
    <label class="form-check-label" for="cintres${i}">
        Cintres pour vêtements
    </label>
</div>
</div>
<div class="row" style="margin-left:2px;">
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="climatisation${i}" value="Climatisation">


    <label class="form-check-label" for="climatisation${i}">
        Climatisation
    </label>
</div>
<div class="col-md-4 form-check">
        <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="cuisine_equipee${i}" value="Cuisine équipée">
        <label class="form-check-label" for="cuisine_equipee${i}">
            Cuisine équipée
        </label>
    </div>
    <div class="col-md-4 form-check">
        <input class="form-check-input" type="checkbox" name="equipments${i}[]" id="internet${i}" value="Internet">
        <label class="form-check-label" for="internet${i}">
            Internet
        </label>
    </div>
</div>
</div>
<div class="form-group mt-4">
    <label for="salle_de_bain${i}"><i class="fas fa-bath"></i> Salle de bain(s) <span style="color: red;">*</span></label>
    <input type="number" name="salle_de_bain${i}" id="salle_de_bain${i}" class="form-control" placeholder="Entrez le nombre de salle de bain(s)" min="1" required />
</div>
<div class="form-group">
    <label for="loyer${i}"><i class="fas fa-coins"></i> Loyer <span style="color: red;">*</span></label>
    <input type="number" name="loyer${i}" id="loyer${i}" class="form-control" placeholder="Loyer par mois (en FCFA)" min="1" required />
</div>
`;
            }
        }

        function toggleEquipmentsContainer(i) {
            var equipementsSelect = document.getElementById("equipements" + i);
            var equipmentsContainer = document.getElementById("equipmentsContainer" + i);
            var equipmentsContainer = document.getElementById("equipmentsContainer" + i);

            if (equipementsSelect.value === "oui") {
                equipmentsContainer.style.display = "block";
                equipmentsContainer.required = true;
            } else {
                equipmentsContainer.style.display = "none";
                equipmentsContainer.required = false;
            }
        }

        $(document).ready(function() {
            var current_fs, next_fs, previous_fs;
            var opacity;

            $(".next").click(function() {
                var requiredInputs = $(this).parent().find(
                    'input[required], select[required], textarea[required]');

                var isValid = true;
                $(requiredInputs).each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                    }
                });

                if (isValid) {
                    // // On récupère le nombre de chambre
                    // var roomCount = document.getElementById('chambre').value;
                    // // On récupère la valeur de identicalRooms
                    // var identicalRooms = document.getElementById('identicalYes').checked ? "oui" : "non";
                    // // On ajoute le nombre de chambre et la valeur de identicalRooms à l'URL de la page 2
                    // window.location.href = "soumission-offre2?chambre=" + roomCount +
                    //     "&identical=" + identicalRooms;

                    window.location.href = "soumission-offre2";
                } else {
                    alert("Veuillez remplir tous les champs requis avant de continuer.");
                }
            });

        });
    </script>


</body>

</html>
