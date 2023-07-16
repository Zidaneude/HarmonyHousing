<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.8.14, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets_detail/images/logo5.png') }}" type="image/x-icon">
    <meta name="description" content="">


    <title>Détails et reservtion</title>
    <link rel="stylesheet" href="{{ asset('assets_detail/web/assets_detail/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets_detail/web/assets_detail/mobirise-icons-bold/mobirise-icons-bold.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_detail/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_detail/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_detail/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_detail/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_detail/theme/css/style.css') }}">
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
    </noscript>
    <link rel="preload" as="style" href="{{ asset('assets_detail/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_detail/mobirise/css/mbr-additional.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">



</head>

<body class="mt-5">
    @include('commun/header')

    <section data-bs-version="5.1" class="slider4 mbr-embla cid-tK1pFfGeaG" id="slider4-6">

        <div class="mbr-overlay"></div>
        <div class="position-relative text-center">

            <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps"
                data-loop="true" data-auto-play-interval="5" data-draggable="true">
                <div class="embla__viewport container">
                    <div class="embla__container">
                        <div class="embla__slide slider-image item"
                            style="margin-left: 1rem; margin-right: 1rem; height: 300px;">
                            <div class="slide-content">
                                <div class="item-wrapper">
                                    <div class="item-img">
                                        <img src="/storage/{{ $logements[0]->l_photos1 }}"
                                            alt="Mobirise Website Builder">
                                        {{-- <img src="/storage/{{ $logements[0]->l_photos1 }}"
                                            alt="Mobirise Website Builder"> --}}
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="embla__slide slider-image item"
                            style="margin-left: 1rem; margin-right: 1rem; height: 300px;">
                            <div class="slide-content">
                                <div class="item-wrapper">
                                    <div class="item-img">
                                        <img src="/storage/{{ $logements[0]->c_photos1 }}"
                                            alt="Mobirise Website Builder">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="embla__slide slider-image item"
                            style="margin-left: 1rem; margin-right: 1rem; height: 300px;">
                            <div class="slide-content">
                                <div class="item-wrapper">
                                    <div class="item-img">
                                        <img src="/storage/{{ $logements[0]->c_photos2 }}"
                                            alt="Mobirise Website Builder">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="embla__slide slider-image item"
                            style="margin-left: 1rem; margin-right: 1rem; height: 300px;">
                            <div class="slide-content">
                                <div class="item-wrapper">
                                    <div class="item-img">
                                        <img src="/storage/{{ $logements[0]->l_photos1 }}"
                                            alt="Mobirise Website Builder">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="embla__button embla__button--prev">
                    <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only visually-hidden visually-hidden">Previous</span>
                </button>
                <button class="embla__button embla__button--next">
                    <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only visually-hidden visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: 20px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/">Mon dashboard locataire</a></li>
                <li class="breadcrumb-item active" aria-current="page">Détails du logement</a></li>

            </ol>
        </nav>
    </div>


    <section data-bs-version="5.1" class="features14 cid-tK1RfOyPo5" id="features15-f">

        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">

                        @if ($logements[0]->meuble == 'Oui')
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style mb-2 display-5"
                                    style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
                                    <strong>{{ ucfirst($logements[0]->type) }}
                                        {{ $logements[0]->type == 'chambre' ? 'meublée' : 'meublé' }} situé à
                                        {{ $logements[0]->ville }} - {{ ucfirst($logements[0]->quartier) }}</strong>
                                </h4>
                            </div>
                        @else
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style mb-2 display-5"
                                    style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
                                    <strong>{{ ucfirst($logements[0]->type) }}
                                        {{ $logements[0]->type == 'chambre' ? 'non meublée' : 'non meublé' }} situé à
                                        {{ $logements[0]->ville }} - {{ ucfirst($logements[0]->quartier) }} </strong>
                                </h4>
                            </div>
                        @endif

                    </div>
                </div>



            </div>
        </div>
    </section>
    @if (isset($logements) && $logements[0]->type == 'appartement')
    @else
        <section data-bs-version="5.1" class="features17 cid-tK1uerIJsL" id="features18-c">
            <div class="container">
                <div class="mbr-section-head">
                    <div class="col-12">
                        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-7"><strong>Equipements
                                de la chambre</strong></h4><br>
                    </div>
                </div>
            </div>
        </section>
    @endif




    <section data-bs-version="5.1" class="features14 cid-tK1sB26v3q" id="features15-8">


        <div class="container" style="box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);">

            <div class="row justify-content-center">

                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', 'Internet'))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" checked disabled>
                                </div>
                                <i class="fa-solid fa-wifi mt-2 mr-2" style="font-size:12px"></i>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">&nbsp;Internet</h4>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-wifi mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Internet</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', 'Chauffage'))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                        value="something" checked disabled>
                                    <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto socicon-curse socicon"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Chauffage</h4>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                        value="something" checked disabled>
                                    <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto socicon-curse socicon"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Chauffage</h4>

                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', 'Ordinateur'))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check3" name="option3"
                                        value="something" checked disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mbrib-desktop"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Ordinateur</h4>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check3" name="option3"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mbrib-desktop"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Ordinateur</h4>
                                </div>

                            </div>
                        </div>
                    @endif
                @endif

                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', 'Climatisation'))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check3" name="option3"
                                        value="something" checked disabled>

                                </div>
                                <span class="mbr-iconfont m-auto mbrib-desktop"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Climatisation</h4>

                                </div>

                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check3" name="option3"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mbrib-desktop"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Climatisation</h4>
                                </div>

                            </div>
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features14 cid-tK1sLIbu62" id="features15-a">

        <div class="container" style="box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);  margin-bottom: 5px;">
            <div class="row justify-content-center">
                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', 'Télévision'))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" checked disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-video-play mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Télévision</h4>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-protect mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Equipements d'hygiène</h4>

                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', 'Cintres pour vêtements'))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" checked disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-website-theme mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">
                                        Cintres pour vetements</h4>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-website-theme mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">
                                        Cintres pour vetements</h4>

                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', 'Fer à repasser'))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" checked disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-success mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Fer à repasser</h4>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-success mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Fer à repasser</h4>

                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                @if (isset($chambres))
                    @if ($chambres->equipements->contains('nom', "Équipements d'hygiène"))
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" checked disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-success mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Equipements d'hygiène</h4>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="card-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                        value="something" disabled>
                                </div>
                                <span class="mbr-iconfont m-auto mobi-mbri-success mobi-mbri"
                                    style="font-size: 30px; color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                                <div class="card-box">
                                    <h4 class="card-title mbr-fonts-style mb-2 display-7">Equipements d'hygiène</h4>

                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="gallery3 cid-tK1fvTOz0k" id="gallery3-5">

        @if ($logements[0]->type == 'appartement')
            <div class="container">
                <div class="mbr-section-head">

                    <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-7"><strong>Pièces du
                            logement</strong></h5>
                </div>
                <div class="row mt-4">
                    <div class="item features-image сol-12 col-md-6 col-lg-3 active"
                        style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ asset('assets_detail/images/hotel-la-falaise-yaund-28.jpg') }}"
                                    alt="Mobirise Website Builder" data-slide-to="0" data-bs-slide-to="0">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Chambre 01</strong>
                                </h5>

                                <p class="mbr-text mbr-fonts-style mt-3 display-7">*Penderie<br>*Douche
                                    interne<br>*Meubles</p>
                            </div>

                        </div>
                    </div>
                    <div class="item features-image сol-12 col-md-6 col-lg-3"
                        style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ asset('assets_detail/images/hilton-yaounde-habitacion-c4dc94a.jpg') }}"
                                    alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Salon</strong>
                                </h5>

                                <p class="mbr-text mbr-fonts-style mt-3 display-7">*Meublé<br>*Equipements</p>
                            </div>

                        </div>
                    </div>
                    <div class="item features-image сol-12 col-md-6 col-lg-3"
                        style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ asset('assets_detail/images/hotel-la-falaise-yaounde-habitacion-ba97e4e.jpg') }}"
                                    alt="Mobirise Website Builder" data-slide-to="2" data-bs-slide-to="2">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Chambre 02</strong>
                                </h5>

                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Vide</p>
                            </div>

                        </div>
                    </div>
                    <div class="item features-image сol-12 col-md-6 col-lg-3"
                        style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="{{ asset('assets_detail/images/hilton-yaounde.jpg') }}"
                                    alt="Mobirise Website Builder" data-slide-to="3" data-bs-slide-to="3">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>Cuisine</strong>
                                </h5>

                                <p class="mbr-text mbr-fonts-style mt-3 display-7">Vide</p>
                            </div>

                        </div>
                    </div>



                </div>
        @endif

        <div class="container" style="box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);  margin-bottom: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h4> Disponible:</h4>
                    </div>
                    <div class="col-sm">
                        <h4>Fréquence de paiement:{{ $logements[0]->frequence_paie }} </h4>
                    </div>
                    <div class="col-sm">
                        <h4> Localisation:{{ $logements[0]->adresse }}</h4>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <div class="row">
                    <div class="col-sm">
                        <h4> Ville:{{ $logements[0]->ville }}</h4>
                    </div>
                    <div class="col-sm">
                        <h4>Quartier:{{ $logements[0]->quartier }} </h4>
                    </div>
                    <div class="col-sm">
                        <h4> Loyer:{{ $logements[0]->prix }} Fcfa</h4>
                    </div>
                </div>
            </div>


    </section>

    <section data-bs-version="5.1" class="features13 cid-tK1beoHo8i" id="features14-2">





    </section>

    <section data-bs-version="5.1" class="content11 cid-tK1NzbVgLh" id="content11-e">

        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <div class="mbr-section-btn align-center">
                        @if (isset($chambres))
                            <a class="btn btn-primary display-5"
                                href="{{ url('/payment/chambre/' . $chambres->id) }}"><span
                                    class="mobi-mbri mobi-mbri-credit-card mbr-iconfont mbr-iconfont-btn"
                                    style="color: rgb(255, 255, 255);"></span>Réservez maintenant</a>
                        @elseif (isset($logements))
                            <a class="btn btn-primary display-5"
                                href="{{ url('/payment/appartement/' . $logements[0]->id) }}"><span
                                    class="mobi-mbri mobi-mbri-credit-card mbr-iconfont mbr-iconfont-btn"
                                    style="color: rgb(255, 255, 255);"></span>Réservez maintenant</a>
                        @endif
                        <a class="btn btn-black display-5" href="#"><span
                                class="mobi-mbri mobi-mbri-like mbr-iconfont mbr-iconfont-btn "
                                style="color: rgb(250, 250, 250);"></span>J'aime</a>
                    </div>
                </div>
            </div>
        </div>





    </section>


    @include('commun/footer')
    <script src="{{ asset('assets_detail/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_detail/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets_detail/ytplayer/index.js') }}"></script>
    <script src="{{ asset('assets_detail/embla/embla.min.js') }}"></script>
    <script src="{{ asset('assets_detail/embla/script.js') }}"></script>
    <script src="{{ asset('assets_detail/theme/js/script.js') }}"></script>

    <script type="text/javascript" src="https://fr.monetbil.com/widget/v2/monetbil.min.js"></script>
</body>

</html>
