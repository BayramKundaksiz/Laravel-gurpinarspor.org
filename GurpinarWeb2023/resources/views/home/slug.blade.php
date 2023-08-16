<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    <meta charset="utf-8">
    <title>Anasayfa</title>
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
    @include('home.navbar')
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href={{ route('anasayfa') }}>Anasayfa</a>
                <a class="breadcrumb-item" href={{ route('kategori') }}>Kategoriler</a>
                <a class="breadcrumb-item">Genel</a>

            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">

            @foreach ($bilgiler as $bilgi)
                <div class="row">
                    <div class="col-lg-8">
                        <!-- News Detail Start -->

                        <div class="position-relative overflow-hidden mb-3">
                            <img class="img-fluid w-100" style="height: 600px; width: 200px;"
                                src="anasayfaslider/{{ $bilgi->gorsel }}" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light mb-3">



                                <div class="mb-3">

                                    <a href="">{{ $bilgi->yazar_adi }}</a>

                                    <span>{{ $bilgi->tarih }}</span>
                                </div>




                                <div>
                                    <h3 class="mb-3">{{ $bilgi->baslik }}</h3>


                                    <p>{{ $bilgi->aciklama }}</p>

                                    <br>

                                    <button></button>

                                    <a style="z-index:10; color: red;"
                                        href="{{ $bilgi->linkler->link_adresi ?? null }}">{{ $bilgi->linkler->link_aciklama ?? null }}
                                    </a>

                                </div>




                            </div>



                        </div>
            @endforeach



            <!-- News Detail End -->

            {{-- <!-- Comment List Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">5 YORUM</h3>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">Yorum Sahibi</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a href="">John Doe</a> <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                            labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                            eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                            ipsum diam tempor consetetur at sit.</p>
                                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">Yorum Yaz</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End --> --}}
        </div>


        <div class="col-lg-4">

            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Kategoriler</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href=""></a>
            </div>

            <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                <a href="{{ route('tumduyuru') }}">
                    <img class="img-fluid w-100 h-100" src="img/duyuru.png" style="object-fit: cover;">
                </a>
                <a href="{{ route('tumduyuru') }}" target="_blank"
                    class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                </a>
            </div>

            <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                <a href="{{ route('tumotobus') }}">
                    <img class="img-fluid w-100 h-100" src="img/otobussaatlerifotosu.png" style="object-fit: cover;">
                </a>
                <a href="{{ route('tumotobus') }}" target="_blank"
                    class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">

                </a>
            </div>



            <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                <a href="{{ route('tumustalar') }}">
                    <img class="img-fluid w-100 h-100" src="img/ustalar.jpg" style="object-fit: cover;">
                </a>
                <a href="{{ route('tumustalar') }}"
                    class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">

                </a>
            </div>

            <div class="position-relative overflow-hidden" style="height: 80px;">
                <a href="{{ route('tumalimsatim') }}">
                    <img class="img-fluid w-100 h-100" src="img/alimsatimfotosu.png" style="object-fit: cover;">
                </a>
                <a href="{{ route('tumalimsatim') }}"
                    class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">

                </a>
            </div>


            <div class="position-relative overflow-hidden" style="margin-top: 10px;">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Vefat Listesi</h3>
                </div>

                <div class="pb-3 col">

                    <a href="{{ route('vefatlistesi') }}" target="_blank">
                        <img src="img/mezarlik.jpg" frameborder="0" scrolling="NO" allowtransparency="true"
                            sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox"
                            style="width: 290px; height: 200px" alt="">
                    </a>
                    <div>
                        <!-- DO NOT REMOVE THIS LINK -->
                        <a href="{{ route('vefatlistesi') }}" target="_blank" rel="noopener">
                            Vefat Listesine Erişmek İçin Tıklayınız</a>
                    </div>

                </div>


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
