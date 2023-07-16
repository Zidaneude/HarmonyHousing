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
    <style>
        #UniciteChambre {
            font-weight: bold;
        }
    </style>
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
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $item)
                    {{ $item }}
                @endforeach
            @endif
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
                                        <div class="form-group mb-4">
                                            <label for="titre_annonce"><strong>Titre de
                                                    l'annonce</strong><span style="color: red;">*</span></label>
                                            <input type="text" name="titre_annonce" id="titre_annonce"
                                                class="form-control" placeholder="Entrez le titre de votre annonce"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label for="description_annonce"><strong>Description</strong><span
                                                    style="color: red;">*</span></label>
                                            <textarea name="description_annonce" id="description_annonce" class="form-control" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <h5 class="fs-title mt-5" style="color: #004aad; text-align: center;">
                                            Localisation</h5>
                                        <div class="form-group">
                                            <label for="adresse">
                                                <strong>Adresse</strong></label>
                                            <input type="text" name="adresse" id="adresse" class="form-control"
                                                placeholder="Indiquez une adresse (Ex: Face ADYS Hotel)" />
                                        </div>
                                        <div class="form-group my-4">
                                            <label for="quartier"><strong>Quartier</strong> <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="quartier" id="quartier" class="form-control"
                                                placeholder="Indiquez un quartier" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="region"> <strong>Région</strong> <span
                                                    style="color: red;">*</span></label>
                                            <select name="region" id="region" class="form-control" required>
                                                <option value="">--Sélectionnez une région--</option>
                                                <option value="Nord">Nord</option>
                                                <option value="Sud">Sud</option>
                                                <option value="Est">Est</option>
                                                <option value="Ouest">Ouest</option>
                                                <option value="Littoral">Littoral</option>
                                                <option value="Adamaoua">Adamaoua</option>
                                                <option value="Nord-Ouest">Nord-Ouest</option>
                                                <option value="Sud-Ouest">Sud-Ouest</option>
                                                <option value="Centre">Centre</option>
                                                <option value="Est">Extrême-Nord</option>
                                            </select>
                                        </div>
                                        <div class="form-group my-4">
                                            <label for="ville"><strong>Ville</strong> <span
                                                    style="color: red;">*</span></label>
                                            <input type="text" name="ville" id="ville" class="form-control"
                                                placeholder="Ville" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="code_postal"><strong>Code postal</strong> </label>
                                            <input type="text" name="code_postal" id="code_postal"
                                                class="form-control" placeholder="Code postal" />
                                        </div>
                                        <h5 class="fs-title mt-5" style="color: #004aad; text-align: center;">Détails
                                            du lieu</h5>
                                        <div class="form-group">
                                            <!--type de logement-->
                                            <label for="type_logement"><i class="fas fa-home"></i><strong> Type de
                                                    logement</strong>
                                                <span style="color: red;">*</span></label>
                                            <select name="type_logement" id="type_logement" class="form-control"
                                                required onchange="apap()">
                                                <option value=""
                                                    data-placeholder="--Sélectionnez un type de logement--"
                                                    data-label="Les chambres sont-elles identiques ?">--Sélectionnez
                                                    un type de logement--</option>
                                                <option value="Chambre"
                                                    data-placeholder="Entrez le nombre de chambre(s)"
                                                    data-label="Les chambres sont-elles identiques ?">Chambre
                                                </option>
                                                <option value="Appartement"
                                                    data-placeholder="Entrez le nombre de chambre(s) de votre appartement"
                                                    data-label="Les chambres de votre appartement sont-elles identiques ?">
                                                    Appartement</option>
                                            </select>
                                        </div>
                                        <!------           form logement -------->
                                        <div class="form-group" id="my" style=" position:relative;">

                                        </div>

                                        <div class="form-group my-4">
                                            <label for="frequence_paie"><i class="fas fa-calendar"></i>
                                                <strong>Fréquence de
                                                    paiement</strong>
                                                <span style="color: red;">*</span></label>
                                            <select name="frequence_paie" id="frequence_paie" class="form-control"
                                                required>
                                                <option value="">--Sélectionnez une fréquence de paiement--
                                                </option>
                                                <option value="Par mois">1 mois</option>
                                                <option value="Trois_Mois">3 mois</option>
                                                <option value="Six_Mois">6 mois</option>
                                                <option value="Par An">1 an</option>
                                            </select>
                                        </div>

                                        <div class="form-group" style="display: none;" id="chambresGroup">
                                            <label id="UniciteChambre"><strong>Les chambres sont-elles identiques
                                                    ?</strong> </label> <span style="color: red;">*</span>
                                            <div class="row" style="margin-left:2px;">
                                                <div class="col-md-2 form-check">
                                                    <input type="radio" id="identicalYes" name="chambres"
                                                        value="Oui" class="form-check-input" required>
                                                    <label for="identicalYes" class="form-check-label">Oui</label>
                                                </div>
                                                <div class="col-md-4 form-check">
                                                    <input type="radio" id="identicalNo" name="chambres"
                                                        value="Non" class="form-check-input" required>
                                                    <label for="identicalNo" class="form-check-label">Non</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <label for="chambre"><i class="fas fa-bed"></i>
                                                <strong id="">Nombre de chambre(s)</strong> <span
                                                    style="color: red;">*</span>
                                                <a data-toggle="tooltip"
                                                    title="ATTENTION - Ne modifiez pas ce nombre après avoir rempli les détails de chambre(s) au risque de réinitialiser vos données !">
                                                    <i class="fas fa-info-circle" style="color: #004aad;"></i>
                                                </a>
                                            </label>
                                            <input type="number" name="chambre" id="chambre" class="form-control"
                                                min="1" max="50" required placeholder=""
                                                oninput="mutex()" />
                                        </div>

                                        <div id="roomFormsContainer">
                                        </div>
                                    </div>
                                    <input type="submit" name="next" class="next action-button"
                                        value="Continuer" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        document.getElementById("type_logement").addEventListener("change", function() {
            var placeholder = this.options[this.selectedIndex].dataset.placeholder;
            var label = this.options[this.selectedIndex].dataset.label;
            document.getElementById("chambre").placeholder = placeholder;
            document.getElementById("UniciteChambre").textContent = label;
            var chambresGroup = document.getElementById("chambresGroup");
            if (this.value === "") {
                chambresGroup.style.display = "none";
            } else {
                chambresGroup.style.display = "block";
            }
        });

        function initPlaceholder() {
            var placeholder = document.getElementById("type_logement").options[0].dataset.placeholder;
            var label = document.getElementById("type_logement").options[0].dataset.label;
            document.getElementById("chambre").placeholder = placeholder;
            document.getElementById("UniciteChambre").textContent = label;
        }

        window.onload = initPlaceholder;
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var identicalRooms = false;

        document.getElementById('identicalYes').addEventListener('change', function() {
            identicalRooms = true;
            var tye = document.getElementById("type_logement");
            var appb = document.getElementById('my');
            var text = tye.options[tye.selectedIndex].text;

            if (text == "Appartement") {
                generateRoomForms2()

            } else {
                generateRoomForms();
            }
            //generateRoomForms();
        });
        document.getElementById('identicalNo').addEventListener('change', function() {
            identicalRooms = false;
            ///
            var tye = document.getElementById("type_logement");
            var appb = document.getElementById('my');
            var text = tye.options[tye.selectedIndex].text;

            if (text == "Appartement") {

                generateRoomForms2()

            } else {
                generateRoomForms();
            }

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
        <div class="form-group mt-3">
            <label for="surface_chambre${i}"><strong>Superficie la chambre (en m²)</strong> <span style="color: red;">*</span></label>
            <input type="number" name="surface_chambre${i}" id="surface_chambre${i}" class="form-control" placeholder="Superficie totale de la chambre" required/>
        </div>
        <div class="form-group mt-3">
            <label for="cap_chambre${i}"><strong>Capacité d'accueil </strong><span style="color: red;">*</span></label>
            <input type="number" name="cap_chambre${i}" id="cap_chambre${i}" class="form-control" placeholder="Capacité d'accueil" required min="1"/>
        </div>
        <div class="form-group mt-4">
                                    <label for="meuble${i}"><i class="fas fa-calendar"></i> <strong>Meublée ?</strong>
                                        <span style="color: red;">*</span></label>
                                    <select name="meuble${i}" id="meuble${i}" class="form-control"
                                        required>
                                        <option value="">--Sélectionnez--
                                        </option>
                                        <option value="Oui">Oui</option>
                                        <option value="Non">Non</option>
                                    </select>
                                </div>
                                <div class="form-group my-3">
                                <label for="disponibilite${i}"><i class="fas fa-calendar-alt"></i> <strong>Disponibilité </strong><span style="color: red;">*</span></label>
        <input type="date" name="disponibilite${i}" id="disponibilite${i}" class="form-control" min="2023-07-01" max="2025-01-01" required />
    </div>
        <div class="form-group">
        <label for="equipements${i}"><i class="fas fa-tools"></i> <strong>Avec équipements ?</strong> <span style="color: red;">*</span></label>
        <select name="equipements${i}" id="equipements${i}" class="form-control" onchange="toggleEquipmentsContainer(${i})" required>
            <option value="">--Sélectionnez--</option>
            <option value="Oui">Oui</option>
            <option value="Non">Non</option>
        </select>
    </div>

    <div class="form-group mt-4" id="equipmentsContainer${i}" style="display: none;">
<label><i class="fas fa-toolbox"></i> <strong>Liste des équipements </strong><span style="color: red;">*</span></label>
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
<div class="form-group my-3">
    <label for="salle_de_bain${i}"><i class="fas fa-bath"></i> <strong>Salle de bain(s)</strong> <span style="color: red;">*</span></label>
    <input type="number" name="salle_de_bain${i}" id="salle_de_bain${i}" class="form-control" placeholder="Entrez le nombre de salle de bain(s)" min="1" required />
</div>
<div class="form-group">
    <label for="loyer${i}"><i class="fas fa-coins"></i><strong> Loyer </strong><span style="color: red;">*</span></label>
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

        function toggleEquipmentsContainer1() {
            var equipementsSelect = document.getElementById("equipements");
            var equipmentsContainer = document.getElementById("equipmentsContainer");
            var equipmentsContainer = document.getElementById("equipmentsContainer");

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
                    /// window.location.href = "soumission-offre2";
                } else {
                    //alert("Veuillez remplir tous les champs requis avant de continuer.");
                }
            });

        });


        function apap() {

            var tye = document.getElementById("type_logement");
            var appb = document.getElementById('my');
            var text = tye.options[tye.selectedIndex].text;

            appb.innerHTML = '';
            if (text == "Appartement") {
                appb.innerHTML += `

                        <div class="form-group mt-4">
                            <label for="numero"><i class="fas fa-bath"></i> <strong>Numéro appartement</strong> <span style="color: red;">*</span></label>
                            <input type="number" name="numero" id="numero" class="form-control" placeholder="numéro de appartement" min="1" required />
                        </div>

                        <div class="form-group mt-4">
                            <label for="etage"><i class="fas fa-bath"></i> <strong>Etage appartement</strong> <span style="color: red;">*</span></label>
                            <input type="number" name="etage" id="etage" class="form-control" placeholder="Etage de votre appartement" min="1" required />
                        </div>

                        <div class="form-group mt-4">
                            <label for="disponibilite"><i class="fas fa-calendar-alt"></i><strong>Disponibilité </strong><span style="color: red;">*</span></label>
                            <input type="date" name="disponibilite" id="disponibilite" class="form-control" min="2023-07-01" max="2025-01-01" required />
                        </div>
                        <div class="form-group mt-4">
                                            <label for="meuble"><i class="fas fa-calendar"></i> <strong>Meublé ?</strong>
                                                <span style="color: red;">*</span></label>
                                            <select name="meuble" id="meuble" class="form-control"
                                                required>
                                                <option value="">--Sélectionnez--
                                                </option>
                                                <option value="Oui">Oui</option>
                                                <option value="Non">Non</option>
                                            </select>
                        </div>

                        <div class="form-group mt-4">
                            <label for="salle_de_bain"><i class="fas fa-bath"></i> <strong>Salle de bain(s)</strong> <span style="color: red;">*</span></label>
                            <input type="number" name="salle_de_bain" id="salle_de_bain" class="form-control" placeholder="Entrez le nombre de salle de bain(s)" min="1" required />
                        </div>
                        <div class="form-group">
                                <label for="loye"><i class="fas fa-coins"></i><strong> Loyer </strong><span style="color: red;">*</span></label>
                                <input type="number" name="loyer" id="loyer" class="form-control" placeholder="Loyer par mois (en FCFA)" min="1" required />
                        </div>

        <div class="form-group">

        <label for="equipements"><i class="fas fa-tools"></i> <strong>Avec équipements ?</strong> <span style="color: red;">*</span></label>
        <select name="equipements" id="equipements" class="form-control" onchange="toggleEquipmentsContainer1()" required>
            <option value="">--Sélectionnez--</option>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
    </div>

    <div class="form-group mt-4" id="equipmentsContainer" style="display: none;">
<label><i class="fas fa-toolbox"></i> <strong>Liste des équipements </strong><span style="color: red;">*</span></label>
<div class="row" style="margin-left:2px;">
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments[]" id="chauffage$" value="Chauffage">
    <label class="form-check-label" for="chauffage">
        Chauffage
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments[]" id="fer_a_repasser" value="Fer à repasser">
    <label class="form-check-label" for="fer_a_repasser">
        Fer à repasser
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments[]" id="ordinateur" value="Ordinateur">
    <label class="form-check-label" for="ordinateur">
        Ordinateur
    </label>
</div>
</div>

<div class="row" style="margin-left:2px;">
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments[]" id="equipements_hygiene" value="Équipements d'hygiène">
    <label class="form-check-label" for="equipements_hygiene">
        Équipements d'hygiène
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments[]" id="tv" value="Télévision">
    <label class="form-check-label" for="tv">
        Télévision
    </label>
</div>
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments[]" id="cintres" value="Cintres pour vêtements">
    <label class="form-check-label" for="cintres">
        Cintres pour vêtements
    </label>
</div>
</div>
<div class="row" style="margin-left:2px;">
<div class="col-md-4 form-check">
    <input class="form-check-input" type="checkbox" name="equipments[]" id="climatisatio" value="Climatisation">


    <label class="form-check-label" for="climatisation">
        Climatisation
    </label>
</div>
<div class="col-md-4 form-check">
        <input class="form-check-input" type="checkbox" name="equipments[]" id="cuisine_equipee" value="Cuisine équipée">
        <label class="form-check-label" for="cuisine_equipee">
            Cuisine équipée
        </label>
    </div>
    <div class="col-md-4 form-check">
        <input class="form-check-input" type="checkbox" name="equipments[]" id="internet" value="Internet">
        <label class="form-check-label" for="internet">
            Internet
        </label>
    </div>
</div>
                        `;

            }
        }


        function generateRoomForms2() {
            var roomCount = document.getElementById('chambre').value;
            var roomFormsContainer = document.getElementById('roomFormsContainer');

            roomFormsContainer.innerHTML = '';

            // Générer de nouveaux formulaires de chambre
            for (var i = 1; i <= (identicalRooms ? 1 : roomCount); i++) {
                var roomTitle = identicalRooms ? "Détails de la chambre" : "Chambre " + i;
                roomFormsContainer.innerHTML += `
                <h6 class="mt-5" style="color:#004aad; font-size:18px; text-align:center;">${roomTitle}</h6>`;
                roomFormsContainer.innerHTML += `
                <div class="form-group mt-3">
                    <label for="surface_chambre${i}"><strong>Superficie de la chambre (en m²)</strong> <span style="color: red;">*</span></label>
                    <input type="number" name="surface_chambre${i}" id="surface_chambre${i}" class="form-control" placeholder="Superficie totale de la chambre" required/>
                </div>
                <div class="form-group mt-3">
                    <label for="cap_chambre${i}"><strong>Capacité d'accueil </strong><span style="color: red;">*</span></label>
                    <input type="number" name="cap_chambre${i}" id="cap_chambre${i}" class="form-control" placeholder="Capacité d'accueil" required/>
                </div>
                `;
            }
        }

        function mutex() {
            var tye = document.getElementById("type_logement");
            var appb = document.getElementById('my');
            var text = tye.options[tye.selectedIndex].text;
            if (text == "Appartement") {

                generateRoomForms2()

            } else {
                generateRoomForms();
            }
        }
    </script>

</body>

</html>
