<!DOCTYPE html>
<html>

<head>
    <title>Détails du logement - Harmony Housing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body >
    @include('commun.header')
    <section data-bs-version="5.1" class="gallery6 mbr-gallery cid-tIWkkBEfM2" id="gallery6-1l">
        <div class="container-fluid">
            <div class="row mbr-gallery mt-4">
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tIWCMqyrrd-modal"
                        data-bs-target="#tIWCMqyrrd-modal">
                        <img class="w-100" src="{{ asset('assets/images/hilton-yaounde-habitacion-c4dc94a-1000x615.jpg') }}"
                            alt="Mobirise Website Builder" data-slide-to="0" data-bs-slide-to="0"
                            data-target="#lb-tIWCMqyrrd" data-bs-target="#lb-tIWCMqyrrd">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tIWCMqyrrd-modal"
                        data-bs-target="#tIWCMqyrrd-modal">
                        <img class="w-100" src="{{ asset('assets/images/hotel-la-falaise-yaounde-habitacion-ba97e4e-500x333.jpg') }}"
                            alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1"
                            data-target="#lb-tIWCMqyrrd" data-bs-target="#lb-tIWCMqyrrd">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tIWCMqyrrd-modal"
                        data-bs-target="#tIWCMqyrrd-modal">
                        <img class="w-100" src="{{ asset('assets/images/hotel-la-falaise-yaund-28-500x332.jpg') }}"
                            alt="Mobirise Website Builder" data-slide-to="2" data-bs-slide-to="2"
                            data-target="#lb-tIWCMqyrrd" data-bs-target="#lb-tIWCMqyrrd">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="tIWCMqyrrd-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel slide" id="lb-tIWCMqyrrd" data-interval="5000"
                                data-bs-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="assets/images/hilton-yaounde-habitacion-c4dc94a-1000x615.jpg"
                                            alt="Mobirise Website Builder">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="assets/images/hotel-la-falaise-yaounde-habitacion-ba97e4e-500x333.jpg"
                                            alt="Mobirise Website Builder">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="assets/images/hotel-la-falaise-yaund-28-500x332.jpg"
                                            alt="Mobirise Website Builder">
                                    </div>

                                </div>
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-bs-slide-to="0" class="active"
                                        data-target="#lb-tIWCMqyrrd" data-bs-target="#lb-tIWCMqyrrd"></li>
                                    <li data-slide-to="1" data-bs-slide-to="1" data-target="#lb-tIWCMqyrrd"
                                        data-bs-target="#lb-tIWCMqyrrd"></li>
                                    <li data-slide-to="2" data-bs-slide-to="2" data-target="#lb-tIWCMqyrrd"
                                        data-bs-target="#lb-tIWCMqyrrd"></li>

                                </ol>
                                <a role="button" href="" class="close" data-dismiss="modal"
                                    data-bs-dismiss="modal" aria-label="Close">
                                </a>
                                <a class="carousel-control-prev carousel-control" role="button" data-slide="prev"
                                    data-bs-slide="prev" href="#lb-tIWCMqyrrd">
                                    <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next carousel-control" role="button" data-slide="next"
                                    data-bs-slide="next" href="#lb-tIWCMqyrrd">
                                    <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('commun/footer')
</body>

</html>
