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
            <a href="{{ route('anasayfa') }}" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-uppercase"><span style="color: #01a2d6;">GÜRPINAR</span></h1>

            </a>
        </div>


        <div class="col-lg-8 text-center text-lg-right">

            <img class="img-fluid" src="img/yazilogosu.png" alt="">
        </div>
    </div>
</div>
