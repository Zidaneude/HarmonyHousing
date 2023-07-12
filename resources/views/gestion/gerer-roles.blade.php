<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des rôles - Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="assets_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets_admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets_admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets_admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets_admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets_admin/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets_admin/css/style.css" rel="stylesheet">

    <style>
        .pagination-outer {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body style="margin-top: 100px; background-color: #f8f8ff;">
    @include('commun.header-dashboard-admin')

    <div class="container">

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Gestion des rôles
            </div>
            <div class="card-body mt-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="search">Rechercher :</label>
                        <input id="search" class="form-control" type="text" placeholder="Nom, email, etc.">
                    </div>
                    <!-- Ajout d'un bouton pour créer un nouvel admin -->
                    <div class="col-md-6 text-end mt-4">
                        <button id="create-admin" class="btn btn-primary" data-bs-target="#create-admin-modal"
                            data-bs-action="Créer"><i class="fas fa-plus-circle"></i> Créer un
                            nouvel admin</button>
                    </div>
                </div>

                <!-- Ajout d'un modal pour saisir les informations du nouvel admin -->

                <div id="create-admin-modal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="create-admin-modal-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 id="create-admin-modal-label" class="modal-title">Créer un nouvel admin</h5>
                                <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                    class="btn-close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- Ajout d'un formulaire pour saisir les informations du nouvel admin -->

                                <form id="create-admin-form" method="POST" action="{{route('gerer.roles.store')}}">
                                    @csrf
                                    <!-- Ajout d'un champ pour l'email -->

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" required
                                            placeholder="Entrez l'email du nouvel admin"
                                            class="form-control form-control-lg">
                                    </div>

                                    <!-- Ajout d'un champ pour le mot de passe -->

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <input type="password" id="password" name="password" required
                                            placeholder="Entrez le mot de passe du nouvel admin"
                                            class="form-control form-control-lg">
                                    </div>

                                    <!-- Ajout d'un champ pour la confirmation du mot de passe -->

                                    <div class="mb-3">
                                        <label for="confirm-password" class="form-label">Confirmation du mot de
                                            passe</label>
                                        <input type="password" id="confirm-password" name="confirm_password" required
                                            placeholder="Confirmez le mot de passe du nouvel admin"
                                            class="form-control form-control-lg">
                                    </div>

                                    <!-- Ajout d'un bouton pour soumettre le formulaire -->

                                    <div class="modal-footer">
                                        <button type="button" data-bs-dismiss="modal"
                                            class="btn btn-secondary">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Créer</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <a class="btn-primary btn-sm" data-bs-target="#create-admin-modal"
                                            data-bs-action="Modifier" href="{{route('roles.update',$item->id)}}"><i class="fas fa-edit"></i>
                                            Modifier</a>
                                        <a class="btn btn-danger btn-sm" href="{{route('delete.compte.destroy',$item->id)}}"><i class="fas fa-trash"></i>
                                            Supprimer</a>
                                    </td>
                                </tr> 
                            @endforeach
                            

                            <!-- Ajoutez d'autres lignes ici -->

                        </tbody>
                    </table>

                    <div class="demo mt-5">
                        <nav class="pagination-outer" aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Sélectionner le modal "Créer un nouvel admin"
            var createAdminModal = $("#create-admin-modal");

            // Sélectionner le titre du modal
            var createAdminModalLabel = $("#create-admin-modal-label");

            // Sélectionner le bouton de la fenêtre modale
            var createAdminModalButton = $("#create-admin-form button[type='submit']");

            // Ajouter un écouteur d'événement sur le clic du bouton créer ou modifier
            $("[data-bs-target='#create-admin-modal']").on("click", function() {
                // Afficher le modal
                createAdminModal.modal("show");
                // Changer le texte du titre
                createAdminModalLabel.text($(this).data("bs-action") + " l'admin");
                // Changer le texte du bouton
                createAdminModalButton.text($(this).data("bs-action"));
            });
        });
    </script>

</body>

</html>
