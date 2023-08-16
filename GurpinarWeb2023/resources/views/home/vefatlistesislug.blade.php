<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <meta charset="utf-8">
    <title>Resimler</title>
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





    <style>
        #boyut {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
        }
    </style>


</head>

<body>

    <!-- Topbar Start -->
    @include('home.topbar')
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
                        <a href="{{ route('kategori') }}" class="nav-link dropdown-toggle"
                            data-toggle="dropdown"><b>Kategoriler</b></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('tumduyuru') }}" target="_blank" class="dropdown-item">Duyurular</a>
                            <a href="{{ route('tumotobus') }}" target="_blank" class="dropdown-item">Otobüs Saatleri</a>
                            <a href="{{ route('tumustalar') }}" target="_blank" class="dropdown-item">Ustalar</a>
                            <a href="{{ route('tumalimsatim') }}" target="_blank" class="dropdown-item">Alım Satım</a>
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active"
                            data-toggle="dropdown"><b>Nostalji</b></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('resimler') }}" target="_blank" class="dropdown-item"><b>Resimler</b></a>
                            <a href="{{ route('videolar') }}" target="_blank"
                                class="dropdown-item active"><b>Videolar</b></a>
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


            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Top News Slider Start -->

    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->

    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="nostalji">

                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            @foreach ($vefatbilgiler as $vefatbilgisi)
                                <h3 class="m-0">{{ $vefatbilgisi->adi }}
                                    {{ $vefatbilgisi->soyadi }}</h3>
                            @endforeach
                            <a class="text-secondary font-weight-medium text-decoration-none" href=""></a>
                        </div>
                    </div>

                    @foreach ($vefatbilgiler as $vefatbilgisi)
                        <div class="ortakisim">
                            <div class="position-relative mb-3" style="text-align:center;">
                                <img class="boyut" style="heigh: 500px; width: 500px;"
                                    src="vefatlistesi/{{ $vefatbilgisi->fotografi }}" style="">

                            </div>
                        </div>
                    @endforeach










                </div>
            </div>
            <!-- Featured News Slider End -->


            <!-- Category News Slider Start -->

        </div>
        <!-- Category News Slider End -->


        <!-- Category News Slider Start -->

    </div>
    <!-- Category News Slider End -->


    <!-- News With Sidebar Start -->

    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->

    <!-- Contact End -->

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
