<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kategoriler</title>
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
    @include('home.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Gürpınar</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ route('anasayfa') }}" class="nav-item nav-link">Anasayfa</a>

                    <div class="nav-item dropdown">
                        <a href="{{ route('kategori') }}" class="nav-link dropdown-toggle active"
                            data-toggle="dropdown">Kategoriler</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('tumduyuru') }}" target="_blank" class="dropdown-item">Duyurular</a>
                            <a href="{{ route('tumotobus') }}" target="_blank" class="dropdown-item">Otobüs Saatleri</a>
                            <a href="{{ route('tumustalar') }}" class="dropdown-item">Ustalar</a>
                            <a href="{{ route('tumalimsatim') }}" class="dropdown-item">Alım Satım</a>
                        </div>
                    </div>



                    <a href="single.html" class="nav-item nav-link">Sohbet</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Nostalji</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('resimler') }}" target="_blank" class="dropdown-item">Resimler</a>
                            <a href="{{ route('videolar') }}" target="_blank" class="dropdown-item">Videolar</a>
                        </div>
                    </div>
                    <a href="{{ route('iletisimadi') }}" class="nav-item nav-link">İletişim</a>
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
                    <input type="text" class="form-control" placeholder="Keyword">
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
                <span class="breadcrumb-item active">Teknoloji</span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->

    </div>
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
