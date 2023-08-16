<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>İletişim</title>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
        function open_file() {
            document.getElementById('input_file').click();
        }
    </script>

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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Nostalji</b></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('resimler') }}" target="_blank" class="dropdown-item"><b>Resimler</b></a>
                            <a href="{{ route('videolar') }}" target="_blank" class="dropdown-item"><b>Videolar</b></a>
                            <a href="{{ route('vefatlistesi') }}" target="_blank" class="dropdown-item"><b>Vefat
                                    Listesi</b></a>
                        </div>
                    </div>
                    <a href="{{ route('iletisimadi') }}" class="nav-item nav-link active"><b>İletişim</b></a>
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


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="{{ route('anasayfa') }}">Anasayfa</a>
                <span class="breadcrumb-item active">İletişim</span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="bg-light py-2 px-4 mb-3">
                <h3 class="m-0" style="color: rgb(145, 50, 66)">Her türlü sorunuz için mesaj atabilirsiniz</h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h6 class="font-weight-bold">Mesaj Yaz</h6>
                        <br>
                        <p>İlgili alanları doldurarak iletişime geçebilirsiniz</p>
                        <br>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">Gürpınar</h6>
                                <p class="m-0">38180 Melikgazi/Kayseri</p>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h6 class="font-weight-bold">E-Posta</h6>
                                <p class="m-0">kundaksizbayram@gmail.com</p>
                            </div>
                        </div>
                        <br>
                        
                    </div>
                </div>



                <div class="col-md-7">
                    <form action="{{ route('iletiyi-gonder') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="contact-form bg-light mb-3" style="padding: 30px;">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input type="text" class="form-control p-4" name="isim"
                                                placeholder="İsminiz" required="required"
                                                data-validation-required-message="Lütfen isminizi giriniz" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input type="soyisim" class="form-control p-4" name="soyisim"
                                                placeholder="Soyad" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" name="konu" placeholder="Konu"
                                        required="required" data-validation-required-message="Konu boş bırakılamaz" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="4" name="mesaj" placeholder="Mesaj" required="required"
                                        data-validation-required-message="Mesaj kısmı boş bırakılamaz"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <div class="control-group">
                                        <textarea class="form-control" rows="1" name="telefon" placeholder="Telefon (Boş bırakabilirsiniz)"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="div_design">
                                        <label style="margin-top: 25px;">Görsel Seç :</label>
                                        <input type="file" name="gelengorsel">
                                    </div>

                                    <div>
                                        <button class="btn btn-primary font-weight-semi-bold px-4"
                                            style="margin-top: 25px; border-color: #fae017; border-width:5px; height: 50px; background-color: #01a2d6;" type="submit"
                                            id="sendMessageButton">Mesajı Gönder</button>
                                    </div>


                            </form>
                        </div>
                    </form>

                    @if (Session::has('message'))
                        <script>
                            swal("Sevgili Gürpınarlı", "{{ Session::get('message') }}", 'success', {
                                button: true,
                                button: "OK",
                                timer: 10000,
                                dangerMode: true,

                            });
                        </script>
                    @endif

                </div>




            </div>
        </div>
    </div>
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
