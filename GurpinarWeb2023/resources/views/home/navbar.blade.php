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
                <a href="{{ route('anasayfa') }}" class="nav-item nav-link active"><b>Anasayfa</b></a>

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
