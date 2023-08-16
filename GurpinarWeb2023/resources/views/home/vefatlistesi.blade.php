<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <title>Vefat Listesi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/kesilenikon.png" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="home/css/style.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
     <link href="home/css/jquerydatatables.css" rel="stylesheet">

   

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json"></script>



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
                            <a href="{{ route('videolar') }}" target="_blank" class="dropdown-item"><b>Videolar</b></a>
                            <a href="{{ route('vefatlistesi') }}" target="_blank" class="dropdown-item active"><b>Vefat
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




    <div class="container" style="overflow-x:auto;">
    
        <h5 style="text-align: center; margin-top: 2%">Tarihe göre sıralanmıştır<br><a style="color: red;" href="{{ route('iletisimadi') }}"><< Yöneticiye mesaj gönder >></a>
</h5>
        <h3 style="text-align: center; margin-top: 5%">Vefat Listesi</h3>

        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    
                    <th>Adı</th>
                    <th>Soyadı</th>
                    <th>Vefat Yılı</th>
                    <th style="width: 10px">Fotoğraf</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    @include('home.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>

    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({

                "order": [
                    [2, "asc"]
                ],
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/tr.json"
                },


                processing: true,
                serverSide: true,
                ajax: "{{ route('vefatlistesi') }}",


                columns: [
                    {
                        "className": "text-center",
                        data: 'adi',
                        name: 'adi'
                    },
                    {
                        "className": "text-center",
                        data: 'soyadi',
                        name: 'soyadi'
                    },
                    {

                        "className": "text-center",
                        data: 'vefat_yili',
                        name: 'vefat_yili'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });


        });
    </script>


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
