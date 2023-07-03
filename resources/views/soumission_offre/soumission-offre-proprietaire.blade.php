<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier une annonce | Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/steps-wizard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('header-dashboard-prop')

    <div class="container-fluid">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center">
                <h3><strong>Publier une annonce</strong></h3>
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
                            <form id="msform" action="">
                                <fieldset>
                                    <div class="form-card">
                                        <div class="form-group">
                                            <label for="titre_annonce">Titre de l'annonce *</label>
                                            <input type="text" name="titre_annonce" id="titre_annonce"
                                                class="form-control" placeholder="Entrez le titre de votre annonce"
                                                required />
                                        </div>
                                        <div class="form-group">
                                            <label for="description_annonce">Description</label>
                                            <textarea name="description_annonce" id="description_annonce" class="form-control" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <h6 class="fs-title">Ajouter une nouvelle adresse</h6>
                                        <div class="form-group">
                                            <label for="lieu"><i class="fas fa-map-marker-alt"></i> Adresse</label>
                                            <input type="text" name="adresse" id="adresse" class="form-control"
                                                placeholder="Indiquez une adresse" />
                                        </div>
                                        <div class="form-group">
                                            <label for="region">Région *</label>
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
                                            <label for="ville">Ville *</label>
                                            <input type="text" name="ville" id="ville" class="form-control"
                                                placeholder="Ville" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="code_postal">Code postal</label>
                                            <input type="text" name="code_postal" id="code_postal"
                                                class="form-control" placeholder="Code postal" />
                                        </div>
                                        <h6 class="fs-title mt-5">Détails du lieu</h6>
                                        <div class="form-group">
                                            <label for="type_logement"><i class="fas fa-home"></i> Type de logement
                                                *</label>
                                            <select name="type_logement" id="type_logement" class="form-control"
                                                required>
                                                <option value="">--Sélectionnez un type de logement--</option>
                                                <option value="chambre">Chambre</option>
                                                <option value="appartement">Appartement</option>
                                                <option value="maison">Maison</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="frequence_paie"><i class="fas fa-calendar"></i> Fréquence de
                                                paiement
                                                *</label>
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
                                            <label for="chambre"><i class="fas fa-bed"></i> Chambre(s) *
                                                <a data-toggle="tooltip"
                                                    title="ATTENTION - Ne modifiez pas ce nombre après avoir rempli les détails de chambre(s) au risque de réinitialiser vos données !">
                                                    <i class="fas fa-info-circle" style="color: #004aad;"></i>
                                                </a>
                                            </label>
                                            <input type="number" name="chambre" id="chambre" class="form-control"
                                                min="1" max="50" required
                                                onchange="generateRoomForms()" />
                                        </div>
                                        <div id="roomFormsContainer">
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button"
                                        value="Continuer" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="form-group mb-3">
                                            <div class="form-group">
                                                <label for="video_youtube">
                                                    <i class="fas fa-video"></i> Vidéo YouTube
                                                    <a data-toggle="tooltip"
                                                        title="Conseils sur l'ajout d'une vidéo YouTube: Afin d'afficher une vidéo de votre logement il faut tout d'abord créer la vidéo et la mettre en ligne dans votre compte YouTube. Une fois mise en ligne vous obtiendrez un lien URL de votre vidéo qu'il faut insérer dans le champ ci-joint.">
                                                        <i class="fas fa-info-circle" style="color: #004aad;"></i>
                                                    </a>
                                                </label>
                                                <input type="text" name="video_youtube" id="video_youtube"
                                                    class="form-control"
                                                    placeholder="Exemple : https://youtu.be/yp_4C9JRnM8" />
                                            </div>

                                            <label><i class="fas fa-camera"></i> Photos de votre annonce *</label>

                                            <a data-toggle="tooltip"
                                                title="ATTENTION – Nous vous recommandons d’afficher au moins 3 photos pour donner envie à des candidats potentiels de prendre contact avec vous.">
                                                <i class="fas fa-info-circle" style="color: #004aad;"></i>
                                            </a>
                                            <div class="photo-upload">
                                                <label for="roomPhotoPrincipale" class="custom-file-upload"><i
                                                        class="fas fa-plus"></i> Ajoutez les principales photos de
                                                    votre
                                                    logement</label>
                                                <input type="file" name="roomPhotoPrincipale"
                                                    id="roomPhotoPrincipale" class="form-control"
                                                    accept=".jpg, .jpeg, .png" required />
                                                <div class="form-group" id="roomPhotosContainer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Précédent" />
                                    <input type="button" name="next" class="next action-button"
                                        value="Valider" />
                                </fieldset>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Félicitations ! 🎉</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-12 text-center">
                                                <h5>Votre annonce est désormais en attente
                                                    d'approbation par l'équipe d'administration. Merci pour votre
                                                    patience pendant ce processus. Nous travaillons pour s'assurer que
                                                    tout est parfait !</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function generateRoomForms() {
            var roomCount = document.getElementById('chambre').value;
            var roomFormsContainer = document.getElementById('roomFormsContainer');
            var roomPhotosContainer = document.getElementById('roomPhotosContainer');

            roomFormsContainer.innerHTML = '';
            roomPhotosContainer.innerHTML = '';

            // Générer de nouveaux formulaires de chambre
            for (var i = 1; i <= roomCount; i++) {
                roomFormsContainer.innerHTML += `
                <h6 class="mt-5" style="color:#004aad; font-size:18px;">Chambre ${i}</h6>
                <div class="form-group">
                    <label for="titre_chambre${i}">Titre de la chambre *</label>
                    <input type="text" name="titre_chambre${i}" id="titre_chambre${i}" class="form-control" placeholder="Titre de la chambre" required/>
                </div>
                <input type="date" name="disponibilite${i}" id="disponibilite${i}" class="form-control" min="2023-07-01" max="2025-01-01" required />
                <div class="form-group">
                <label for="equipements${i}"><i class="fas fa-tools"></i> Avec équipements ? *</label>
                <select name="equipements${i}" id="equipements${i}" class="form-control" onchange="toggleEquipmentsTextarea(${i})" required>
                    <option value="">--Sélectionnez--</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
            </div>
            <div class="form-group mt-4" id="equipmentsTextareaContainer${i}" style="display: none;">
                <label for="equipmentsTextarea${i}"><i class="fas fa-toolbox"></i> Liste des équipements *</label>
                <textarea name="equipmentsTextarea${i}" id="equipmentsTextarea${i}" class="form-control" rows="3" placeholder="Entrez la liste des équipements de manière exhaustive"></textarea>
            </div>
                <div class="form-group mt-4">
                    <label for="salle_de_bain${i}"><i class="fas fa-bath"></i> Salle de bain(s) *</label>
                    <input type="number" name="salle_de_bain${i}" id="salle_de_bain${i}" class="form-control" placeholder="Entrez le nombre de salle de bain(s)" min="1" required />
                </div>
                <div class="form-group">
                    <label for="loyer${i}"><i class="fas fa-coins"></i> Loyer *</label>
                    <input type="number" name="loyer${i}" id="loyer${i}" class="form-control" placeholder="Loyer par mois (en FCFA)" min="1" required />
                </div>
            `;
            }

            // Générer de nouveaux formulaires de photo de chambre
            for (var i = 1; i <= roomCount; i++) {
                roomPhotosContainer.innerHTML += `
        <div class="form-group">
            <label for="roomPhoto${i}" class="custom-file-upload"><i class="fas fa-plus"></i> Photo(s) de la chambre ${i} *</label>
            <input type="file" name="roomPhoto${i}" id="roomPhoto${i}" class="form-control" accept=".jpg, .jpeg, .png" required />
        </div>
        `;
            }
        }

        function toggleEquipmentsTextarea(i) {
            var equipementsSelect = document.getElementById("equipements" + i);
            var equipmentsTextareaContainer = document.getElementById("equipmentsTextareaContainer" + i);
            var equipmentsTextarea = document.getElementById("equipmentsTextarea" + i);

            if (equipementsSelect.value === "oui") {
                equipmentsTextareaContainer.style.display = "block";
                equipmentsTextarea.required = true;
            } else {
                equipmentsTextareaContainer.style.display = "none";
                equipmentsTextarea.required = false;
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
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    next_fs.show();
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 600
                    });
                } else {
                    alert("Veuillez remplir tous les champs requis avant de continuer.");
                }
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                previous_fs.show();

                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })
        });
    </script>
</body>

</html>
