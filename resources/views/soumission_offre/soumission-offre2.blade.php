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
                    <li class="active" id="photos"><strong>Photos & Médias</strong></li>
                    <li id="valider"><strong>Terminé</strong></li>
                </ul>
            </div>
        </div>

        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="{{ route('soumission.offre.step2.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
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

                                                      <!-- cache-->
                                                    @if ($ch_id==false)
                                                       <input type="hidden" name="cache_idem" value="no"/>
                                                    @else
                                                        <input type="hidden" name="cache_idem" value="yes"/>
                                                    @endif

                                                    <input type="hidden" name="cache_nbre" value="{{$nb}}"/>
                                                    <input type="hidden" name="id_log" value="{{$id_log}}"/>
                                                    <input type="hidden" name="type_log" value="{{$type_log}}"/>
                                                    <input type="hidden" name="id_appart" value="{{$id_appart}}"/>

                                            </div>

                                            <label><i class="fas fa-camera"></i> Photos de votre annonce <span
                                                    style="color: red;">*</span></label>

                                            <a data-toggle="tooltip"
                                                title="ATTENTION – Nous vous recommandons d’afficher au moins 3 photos pour donner envie à des candidats potentiels de prendre contact avec vous.">
                                                <i class="fas fa-info-circle" style="color: #004aad;"></i>
                                            </a>
                                            <div class="photo-upload">
                                                <label for="roomPhotoPrincipale" class="custom-file-upload mt-1"><i
                                                        class="fas fa-plus"></i> Ajoutez la photo principale de
                                                    votre logement</label>
                                                <input type="file" name="roomPhotoPrincipale"
                                                    id="roomPhotoPrincipale" class="form-control mt-1"
                                                    accept=".jpg, .jpeg, .png"  required />
                                                <div class="form-group" id="roomPhotosContainer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Précédent" />
                                    <input type="submit" name="next" class="next action-button" value="Valider" />
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
        $(document).ready(function() {
            var current_fs, next_fs, previous_fs;
            var opacity;
           // var roomCount = 2;
            //var identicalRooms = false;

            var roomCount={!! json_encode($nb)!!};
            var identicalRooms={!! json_encode($ch_id)!!};

            generateRoomForms(roomCount, identicalRooms);
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
                  //  window.location.href = "soumission-success";
                } else {
                    // alert("Veuillez remplir tous les champs requis avant de continuer.");
                }
            });

            $(".previous").click(function() {
                window.location.href = "soumission-offre1";
            });

        });


        function generateRoomForms(roomCount, identicalRooms)
        {
                var roomPhotosContainer = document.getElementById('roomPhotosContainer');

                roomPhotosContainer.innerHTML = '';

                    if({!! json_encode($type_log)!!}=="appartement")
                    {
                        roomPhotosContainer.innerHTML += `
                         <div class="form-group mt-3">
                        <label for="Photoappar" class="custom-file-upload"><i class="fas fa-plus"></i> Photos de votre Appartement<span style="color: red;">*</span></label>
                        <input type="file" name="Photoappar[]" id="Photoappar" class="form-control mt-1" accept=".jpg, .jpeg, .png"  multiple required />
                        </div> `;
                    }
                // Générer de nouveaux formulaires de photo de chambre

                    for (var i = 1; i <= (identicalRooms ? 1 : roomCount); i++) {
                    var photoTitle = identicalRooms ? "Photo(s) de la chambre :<strong>min(2)</strong>" : "Photo(s) de la chambre " + i+":<strong>min(2)</strong>";
                    roomPhotosContainer.innerHTML += `
                    <div class="form-group mt-3">
                        <label for="roomPhoto${i}" class="custom-file-upload"><i class="fas fa-plus"></i> ${photoTitle} <span style="color: red;">*</span></label>
                        <input type="file" name="roomPhoto${i}[]" id="roomPhoto${i}" class="form-control mt-1" accept=".jpg, .jpeg, .png"  multiple required />
                    </div>

                    <input type="hidden" name="tab_id" value="{{$chaine}}"/>
                    `;
                }

            }



    </script>

</body>

</html>
