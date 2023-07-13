<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modération d'avis | Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="images/Favicon.png">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

   <!-- Vendor CSS Files -->
   <link href="{{ asset('assets_admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets_admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('assets_admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('assets_admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
   <link href="{{ asset('assets_admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
   <link href="{{ asset('assets_admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ asset('assets_admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{ asset('assets_admin/css/style.css') }}" rel="stylesheet">
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
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.profil')}}">Mon profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dasboard.gestion_offre')}}">Vérification d'offres</a>
            </li>
            <li class="nav-item active-tab">
                <a class="nav-link" href="{{route('admin.dasboard.avis')}}">Modération d'avis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.historique.reservation')}}">Historique des réservations</a>
            </li>
        </ul>

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Modération d'avis
            </div>
            <div class="card-body mt-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="filter">Filtrer par :</label>
                        <select id="filter" class="form-select">
                            <option value="all">Tous</option>
                            <option value="pending">En attente</option>
                            <option value="approved">Approuvé</option>
                            <option value="rejected">Rejeté</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="search">Rechercher :</label>
                        <input id="search" class="form-control" type="text"
                            placeholder="Nom du locataire, titre de l'annonce, etc.">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Locataire</th>
                                <th scope="col">Titre de l'annonce</th>
                                <th scope="col">Date de réservation</th>
                                <th scope="col">Note</th>
                                <th scope="col">Commentaire</th>
                                <th scope="col" style="width: 110px;">Statut</th>
                                <th scope="col" style="width: 165px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>David</td>
                                <td>Appartement moderne</td>
                                <td>01/07/2023</td>
                                <td>4.5</td>
                                <td style="text-align: justify;">J'ai séjourné dans cet appartement moderne pendant une
                                    semaine et j'ai été
                                    agréablement surpris par la propreté et le confort de l'endroit. Les équipements
                                    étaient de haute qualité et l'emplacement était parfait, à proximité des attractions
                                    principales de la ville. Je recommande vivement cet hébergement à tous les
                                    voyageurs.</td>
                                <td><span><i style="color: orange;" class="fas fa-clock"></i> En attente</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm"
                                        style="transform: inherit; transition: inherit;">Approuver</button>
                                    <button class="btn btn-danger btn-sm">Rejeter</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Marie</td>
                                <td>Chambre spacieuse</td>
                                <td>02/07/2023</td>
                                <td>5.0</td>
                                <td style="text-align: justify;">Ma chambre spacieuse offrait une vue magnifique et une
                                    ambiance relaxante. Les hôtes
                                    étaient chaleureux et accueillants, rendant mon séjour vraiment mémorable. La
                                    localisation était idéale, à quelques pas des transports en commun et des
                                    restaurants. J'ai vraiment apprécié mon expérience ici et je reviendrai certainement
                                    à l'avenir.</td>
                                <td><span><i style="color: green;" class="fas fa-check-circle"></i> Approuvé</span></td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Rejeter</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
