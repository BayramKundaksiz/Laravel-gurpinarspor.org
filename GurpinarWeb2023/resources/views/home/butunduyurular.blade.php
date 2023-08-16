<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Duyurular</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/kesilenikon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">



</head>

<body>



    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Güncel</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                        style="width: calc(100% - 100px); padding-left: 90px;">
                        @foreach ($guncelyazilar as $guncelyazilar)
                            <div class="text-truncate"><a class="text-secondary"
                                    href="">{{ $guncelyazilar->guncel_metin }}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                {{ now()->translatedFormat('d F Y') }}
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span style="color: #01a2d6;">GÜRPINAR</span></h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="img/yazilogosu.png" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->

    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span style="color: #01a2d6;"><strong>Gürpınar</strong></h1>
            </a>
            <div class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
                <img height="50px;" width="50px;" src="img/kesilenikon.png" alt="">
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ route('anasayfa') }}" class="nav-item nav-link"><b>Anasayfa</b></a>

                    <div class="nav-item dropdown">
                        <a href="{{ route('kategori') }}" class="nav-link dropdown-toggle active"
                            data-toggle="dropdown"><b>Kategoriler</b></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('tumduyuru') }}" target="_blank"
                                class="dropdown-item active">Duyurular</a>
                            <a href="{{ route('tumotobus') }}" target="_blank" class="dropdown-item">Otobüs Saatleri</a>
                            <a href="{{ route('tumustalar') }}" target="_blank" class="dropdown-item">Ustalar</a>
                            <a href="{{ route('tumalimsatim') }}" target="_blank" class="dropdown-item">Alım Satım</a>
                        </div>
                    </div>




                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Nostalji</b></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('resimler') }}" target="_blank" class="dropdown-item"><b>Resimler</b></a>
                            <a href="{{ route('videolar') }}" target="_blank" class="dropdown-item"><b>Videolar</b></a>
                            <a href="{{ route('vefatlistesi') }}" target="_blank" class="dropdown-item"><b>Vefat
                                    Listesi</b></a>
                        </div>
                    </div>
                    <a href="{{ route('iletisimadi') }}" class="nav-item nav-link"><b>İletişim</b></a>
                </div>

                @if (Route::has('login'))
                    @auth

                        <div style="padding-left: 25%">

                            <x-app-layout>

                            </x-app-layout>

                        </div>
                    @else
                        <div style="padding-left: 1%">

                            <a href="{{ route('login') }}" class="btn btn-primary">GİRİS</a>

                        </div>

                        <div style="padding-left: 1%">

                            <a href="{{ route('register') }}" class="btn btn-success">KAYDOL</a>

                        </div>

                    @endauth
                @endif



                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Aktif Değil">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="{{ route('anasayfa') }}">Anasayfa</a>
                <a class="breadcrumb-item" href="{{ route('kategori') }}">Kategoriler</a>
                <span class="breadcrumb-item active">Duyurular</span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->
    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="goruntubir">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Tüm Duyurular</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href=""></a>
                            </div>
                        </div>

                        @foreach ($tumduyurular as $tumduyurular)
                            <div class="col-lg-66">
                                <div class="position-relative mb-3">
                                    <a href="{{ route('duyuruslug', $tumduyurular->slug) }}">
                                        <img class="img-fluid w-100"
                                            src="duyurugorseller/{{ $tumduyurular->duyuru_gorsel }}"
                                            style="object-fit: fill; height: 180px ">
                                    </a>
                                    <div class="overlay position-relative bg-light">
                                        <div class="mb-2" style="font-size: 14px;">
                                            <a href="">{{ $tumduyurular->duyuru_yazar }}</a>
                                            <span class="px-1">/</span>
                                            <span>{{ $tumduyurular->duyuru_tarih }}</span>
                                        </div>
                                        <a class="h4"
                                            href="{{ route('duyuruslug', $tumduyurular->slug) }}">{{ $tumduyurular->duyuru_baslik }}</a>
                                        <p class="m-0">{{ Str::Limit($tumduyurular->duyuru_aciklama) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    @include('home.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="home/lib/easing/easing.min.js"></script>
    <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="home/mail/jqBootstrapValidation.min.js"></script>
    <script src="home/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="home/js/main.js"></script>


</body>

</html>
