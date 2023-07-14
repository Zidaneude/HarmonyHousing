<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification d'offres | Harmony Housing - La plateforme de réservation en ligne</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('images/Favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
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
                <a class="nav-link" href="{{ route('admin.profil') }}">Mon profil</a>
            </li>
            <li class="nav-item active-tab">
                <a class="nav-link" href="{{ route('admin.dasboard.gestion_offre') }}">Vérification d'offres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dasboard.avis') }}">Modération d'avis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.historique.reservation') }}">Historique des réservations</a>
            </li>
        </ul>

        <div class="card my-5">
            <div class="card-header profile-card-header" style="font-size: 18px; text-align: center;">
                Vérification d'offres
            </div>

            <div class="card-body mt-4">
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
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
                            placeholder="Nom du propriétaire, titre de l'annonce, etc.">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Propriétaire</th>
                                <th scope="col">Titre de l'annonce</th>
                                <th scope="col">Type de logement</th>
                                <th scope="col">Soumission</th>
                                <th scope="col">Statut</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($offre as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->proprietaire->nom }}</td>
                                    <td>{{ $item->titre }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    @if ($item->status == 'Approuvée')
                                        <td><span><i style="color: green;" class="fas fa-clock"></i>
                                                {{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->status == 'Réjétée')
                                        <td><span><i style="color: red;" class="fas fa-clock"></i>
                                                {{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->status == 'En attente')
                                        <td><span><i style="color:orange;" class="fas fa-clock"></i>
                                                {{ $item->status }}</span></td>
                                    @endif

                                    <td>
                                        @if ($item->status == 'Approuvée')
                                            <a class="btn btn-success btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"
                                                href="{{ route('admin.dasboard.detail.offre', $item->id) }}"><i
                                                    class="fas fa-eye"></i> Voir</a>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ route('admin.dasboard.gestion_offre_rejeter', $item->id) }}">Rejeter</a>
                                        @endif
                                        @if ($item->status == 'Réjétée')
                                            <a class="btn btn-success btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"
                                                href="{{ route('admin.dasboard.detail.offre', $item->id) }}"><i
                                                    class="fas fa-eye"></i> Voir</a>

                                            <a class="btn btn-primary btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"
                                                href="{{ route('admin.dasboard.gestion_offre_approuver', $item->id) }}"
                                                style="transform: inherit; transition: inherit;">Approuver</a>
                                        @endif
                                        @if ($item->status == 'En attente')
                                            <a class="btn btn-success btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"
                                                href="{{ route('admin.dasboard.detail.offre', $item->id) }}"><i
                                                    class="fas fa-eye"></i> Voir</a>
                                            <a class="btn btn-primary btn-sm mb-2 mb-md-0 mr-2 mr-lg-3"
                                                href="{{ route('admin.dasboard.gestion_offre_approuver', $item->id) }}"
                                                style="transform: inherit; transition: inherit;">Approuver</a>
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ route('admin.dasboard.gestion_offre_rejeter', $item->id) }}">Rejeter</a>
                                        @endif




                                    </td>
                                </tr>
                            @endforeach
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


    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
