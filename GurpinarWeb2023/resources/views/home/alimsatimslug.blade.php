<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    <meta charset="utf-8">
    <title>Alım Satımlar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta name="description" content="Kayseri Melikgazi Gürpınar Köyü içerisinde yetiştici ve zanaatkar insanların fazla kişiye ulaştırılması" />
    <meta name="keywords" content="Organik, bahçeden Sarımsak, kaysı, gilaburu, elma, üzüm, pekmez, ceviz">

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
    @include('home.navbar')
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href={{route('anasayfa')}}>Anasayfa</a>
                <a class="breadcrumb-item" href={{route('kategori')}}>Kategoriler</a>
                <a class="breadcrumb-item">Alım - Satım</a>

            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    @foreach ($alimsatimbilgiler as $alimsatimbilgiler)
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="alimsatimgorseller/{{$alimsatimbilgiler->urun_gorseli}}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">

                            <div class="mb-3">
                                <a>Satıcı İsmi: {{$alimsatimbilgiler->satici_ismi}}</a>


                            </div>
                            <span>İlan Tarihi: {{$alimsatimbilgiler->ilan_tarihi}}</span>
                            <br>
                            <div class="mb-3">

                                <h3 class="mb-3" style="text-transform: uppercase; color: rgb(213, 50, 50)">{{$alimsatimbilgiler->urun_basligi}}</h3>
                                <p style="color: black">{{$alimsatimbilgiler->urun_aciklamasi}}</p>


                            </div>


                            @endforeach

                        </div>
                    </div>

                </div>


                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Kategoriler</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href=""></a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <a href="{{route('tumduyuru')}}">
                        <img class="img-fluid w-100 h-100" src="img/duyuru.png" style="object-fit: cover;">
                        </a>
                        <a href="{{route('tumduyuru')}}" target="_blank" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        </a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <a href="{{route('tumotobus')}}">
                        <img class="img-fluid w-100 h-100" src="img/otobussaatlerifotosu.png" style="object-fit: cover;">
                        </a>
                        <a href="{{route('tumotobus')}}" target="_blank" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">

                        </a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <a href="{{route('tumustalar')}}">
                        <img class="img-fluid w-100 h-100" src="img/ustalar.jpg" style="object-fit: cover;">
                    </a>
                        <a href="{{route('tumustalar')}}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">

                        </a>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 80px;">
                        <a href="{{route('tumalimsatim')}}">
                        <img class="img-fluid w-100 h-100" src="img/alimsatimfotosu.png" style="object-fit: cover;">
                        </a>
                        <a href="{{route('tumalimsatim')}}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">

                        </a>
                    </div>
                </div>




            </div>
        </div>
    </div>
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

