<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Resultats de recherche | Harmony Housing</title>
    <link rel="stylesheet" href=" {{ asset('assets/web/assets/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="icon" href="{{ asset('images/Favicon.png') }}">
    <style>
        .nav-link {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        @media (max-width: 600px) {
            #extra-filters {
                flex-direction: column;
            }
        }
    </style>
</head>

<body class="pt-5">
    @include('commun.header')
    <section class="header2 cid-tImC7YmmP6" id="header2-6">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(17, 105, 113);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <style>
                        input[type=text] {
                            width: 200px;

                            box-sizing: border-box;
                            border: 2px solid #004aad;
                            border-radius: 25px;
                            font-size: 14px;
                            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                            background-color: white;
                            background-image: img src="assets/images/icons8-search-48.png";
                            background-position: 10px 10px;
                            background-repeat: no-repeat;
                            padding: 12px 20px 12px 40px;
                            -webkit-transition: width 0.4s ease-in-out;
                            transition: width 0.4s ease-in-out;
                        }

                        input[type=text]:focus {
                            width: 30%;
                        }
                    </style>
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Trouvez un logement partout au
                            Cameroun</strong></h1>

                    <p class="mbr-text mbr-fonts-style display-7">Harmony Housing est une plateforme de logement
                        en ligne simple et efficace pour n'importe quelle durée.</p>
                </div>
            </div>

            <form class="mt-3" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 10px; width: 100%; max-width: 800px;" method="GET" action="{{route('resultat.from.homme')}}">
                <input type="text" name="search" placeholder="Entrez une ville ou un quartier"
                    style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1;"
                    value="{{ old('search') }}">

                <select name="type" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1;">
                    <option value="">Type de logement</option>
                    <option value="chambre" {{ old('type') == 'chambre' ? 'selected' : '' }}>Chambre</option>
                    <option value="appartement" {{ old('type') == 'appartement' ? 'selected' : '' }}>Appartement</option>
                </select>

                <button type="button" id="more-filters"
                    style="padding: 10px; border-radius: 5px; border: none; background-color: #004aad; color: white; cursor: pointer;"
                    onclick="openNav()">Plus de filtres</button>

                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <h4 style="color: #ffffff;">Sélectionnez vos critères ici</h4>
                        <input type="number" name="budget_min" min="0" placeholder="Budget min"
                            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;"
                            value="{{ old('budget_min') }}">
                        <input type="number" name="budget_max" min="0" placeholder="Budget max"
                            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;"
                            value="{{ old('budget_max') }}">
                        <input style="padding: 10px; border-radius: 5px; border: 1px solid #ccc; flex-grow: 1; margin: 5px;" type="date" name="disponibilite"
                            value="{{ old('disponibilite') }}"/>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" style="transform: inherit; transition: inherit;"
                    value="Rechercher"
                    style="padding: 10px; border-radius: 5px; border: none; background-color: #004aad; color: white; cursor: pointer;">
            </form>
        </div>
    </section>

    <style>
        .filter {
            color: #004aad;
        }

        .overlay {
            margin-top: 30px;
            height: 50%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.3);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 20%;
            width: 100%;
            text-align: center;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #ffffff;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>

    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

    <section data-bs-version="5.1" class="features8 cid-tIoXg5qdPf" xmlns="http://www.w3.org/1999/html"
        id="features9-c">

        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Logement à Dschang</a></li>

                </ol>
            </nav>
        </div>

        <div class="container my-5" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <h5><strong><span style="color: #004aad; font-weight: bold;">{{ count($logements) }} logements
                        disponibles</span>
                </strong></h5>
        </div>

        <style>
            .res {
                padding-top: 15px;
                padding-bottom: 5px;
                text-align: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>

        <div class="container mb-5">
            @forelse ($logements as $item)
                <div class="card">

                    <div class="card-wrapper">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4">
                                <div class="image-wrapper">
                                    @if ($item->l_photos1)
                                        <a href="détails et reservation.html"><img height="200"
                                                style="border-radius: 5px;" src="/storage/{{ $item->l_photos1 }}"
                                                alt="Mobirise Website Builder"></a>
                                    @endif

                                </div>
                            </div>
                            <div class="col-12 col-md">
                                <div class="card-box">
                                    <div class="row">
                                        <!--------- cas de  la chambre------>
                                        @if ($item->type == 'chambre')
                                            <div class="col-md">
                                                @if ($item->meuble == 'Oui')
                                                    <h6 class="card-title mbr-fonts-style display-7">
                                                        <strong>{{ ucfirst($item->type) }} Meublé</strong><br></h6>
                                                @else
                                                    <h6 class="card-title mbr-fonts-style display-7">
                                                        <strong>{{ $item->type }} Non meublé</strong><br></h6>
                                                @endif

                                                <p class="mbr-text mbr-fonts-style display-7">
                                                    <i class="fas fa-map-marker-alt"></i> {{ $item->ville }},
                                                    {{ ucfirst($item->quartier) }}<br>
                                                    <i class="fas fa-clock"></i> Disponible:
                                                    <?php
                                                    $month = [];
                                                    $month['01'] = 'Jan';
                                                    $month['02'] = 'Fev';
                                                    $month['03'] = 'Mars';
                                                    $month['04'] = 'Avril';
                                                    $month['05'] = 'Mai';
                                                    $month['06'] = 'Juin';
                                                    $month['07'] = 'Juil';
                                                    $month['08'] = 'Aout';
                                                    $month['09'] = 'Sep';
                                                    $month['10'] = 'Oct';
                                                    $month['11'] = 'Nov';
                                                    $month['12'] = 'Déc';
                                                    $date = explode('-', strval($item->disponibilite));
                                                    echo '' . $date[2] . '  ' . $month[$date[1]] . '   ' . $date[0];?>
                                                </p>
                                            </div>
                                            <div class="col-md-auto">
                                                <p class="price mbr-fonts-style display-5"><strong>{{ $item->prix }}
                                                        Fcfa /mois</strong>
                                                </p><br>
                                                <div class="mbr-section-btn"><a href="{{route('detail.chambre', $item->id)}}"
                                                        class="btn btn-primary display-4">Voir les détails</a></div>
                                            </div>
                                            <!--------- cas de appartement------>
                                        @else
                                            <div class="col-md">
                                                @if ($item->meuble == 'Oui')
                                                    <h6 class="card-title mbr-fonts-style display-7">
                                                        <strong>{{ ucfirst($item->type) }} Meublé</strong><br></h6>
                                                @else
                                                    <h6 class="card-title mbr-fonts-style display-7">
                                                        <strong>{{ $item->type }} Non meublé</strong><br></h6>
                                                @endif

                                                <p class="mbr-text mbr-fonts-style display-7">
                                                    <i class="fas fa-map-marker-alt"></i> {{ $item->ville }},
                                                    {{ ucfirst($item->quartier) }}<br>
                                                    <i class="fas fa-clock"></i> Disponible:
                                                    <?php
                                                    $month = [];
                                                    $month['01'] = 'Jan';
                                                    $month['02'] = 'Fev';
                                                    $month['03'] = 'Mars';
                                                    $month['04'] = 'Avril';
                                                    $month['05'] = 'Mai';
                                                    $month['06'] = 'Juin';
                                                    $month['07'] = 'Juil';
                                                    $month['08'] = 'Aout';
                                                    $month['09'] = 'Sep';
                                                    $month['10'] = 'Oct';
                                                    $month['11'] = 'Nov';
                                                    $month['12'] = 'Déc';
                                                    $date = explode('-', strval($item->disponibilite));
                                                    echo '' . $date[2] . '  ' . $month[$date[1]] . '   ' . $date[0];?>
                                                </p>
                                            </div>
                                            <div class="col-md-auto">
                                                <p class="price mbr-fonts-style display-5"><strong>{{ $item->prix }}
                                                        Fcfa /mois</strong>
                                                </p><br>
                                                <div class="mbr-section-btn"><a href="{{route('detail.appartement', $item->id)}}"
                                                        class="btn btn-primary display-4">Voir les détails</a></div>
                                            </div>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h1>sdfghjksdfghjkldfghj</h1>
            @endforelse
        </div>

    </section>

    <section data-bs-version="5.1" class="info3 cid-tIC9SJU1Cs" id="info3-1b">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(17, 105, 113);">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-2">Propriétaire ?</h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                Publiez vos offres en toute simplicité quelque soit la ville ou la localité partout au
                                Cameroun !</p>
                            <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4"
                                    href="/connexion-proprietaire">Je
                                    dépose mon annonce</a></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section data-bs-version="5.1" class="features12 cid-tIs6Twliut" id="features13-i">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2"><strong>Nos Atouts</strong></h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">Que vous soyez propriétaire ou en quête
                                de votre futur chez-vous, Harmony Housing vous souhaite la bienvenue. Notre plateforme
                                de réservation en ligne offre un large éventail de logements, tous publiés par des
                                propriétaires fiables et vérifiés.</p>
                            <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="#">En
                                    savoir plus !</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-lock mobi-mbri"
                                style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0);"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                <strong>Sécurité</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">La sécurité est une priorité pour
                                nous. Toutes les transactions sur notre site sont sécurisées et
                                cryptées pour assurer la protection de vos informations personnelles et financières.
                            </h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mbrib-clock"
                                style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0);"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>Rapidité</strong></h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Notre interface conviviale et
                                notre moteur de recherche rapide et efficace vous permettent de trouver et de réserver
                                votre logement idéal en quelques clics. De plus, notre plateforme est optimisée pour
                                tous les appareils, ce qui signifie que vous pouvez réserver votre prochaine maison où
                                que vous soyez, à tout moment.</h5>
                        </div>
                    </div>
                    <div class="item mbr-flex">
                        <div class="icon-box">
                            <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri"
                                style="color: rgb(0, 0, 0); fill: rgb(0, 0, 0);"></span>
                        </div>
                        <div class="text-box">
                            <h4 class="icon-title mbr-black mbr-fonts-style display-7"><strong>Satisfaction</strong>
                            </h4>
                            <h5 class="icon-text mbr-black mbr-fonts-style display-4">Votre satisfaction est notre
                                réussite. Nous travaillons sans relâche pour assurer la qualité de nos services et pour
                                vous proposer les meilleurs logements. Choisissez Harmony Housing et vivez une
                                expérience de réservation en ligne sans tracas.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('commun.footer')
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/ytplayer/index.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('assets/theme/js/script.js') }}"></script>
    <script src="{{ asset('assets/formoid/formoid.min.js') }}"></script>

    <script>
        var moreFiltersButton = document.getElementById('more-filters');
        var extraFilters = document.getElementById('extra-filters');
        moreFiltersButton.addEventListener('click', function() {
            if (extraFilters.style.maxHeight === '0px') {
                extraFilters.style.maxHeight = extraFilters.scrollHeight + 'px';
            } else {
                extraFilters.style.maxHeight = '0px';
            }
        });
    </script>
</body>

</html>
