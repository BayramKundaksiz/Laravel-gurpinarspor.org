<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                    @foreach ($anasayfagetir as $anasayfagetir)
                        <div class="position-relative overflow-hidden" style="height: 435px;">


                            <a
                                href="{{ route('anasayfaslug', ['id' => $anasayfagetir->id, 'slug' => $anasayfagetir->slug]) }}">
                                <img class="img-fluid h-100" src="anasayfaslider/{{ $anasayfagetir->gorsel }}"
                                    style="object-fit: fill;">
                            </a>

                            <div class="resimtiklat">
                                <div class="mb-1">
                                    <a class="text-white"
                                        href="{{ route('anasayfaslug', ['id' => $anasayfagetir->id, 'slug' => $anasayfagetir->slug]) }}">{{ $anasayfagetir->yazar_adi }}</a>

                                    <a class="text-white"
                                        href="{{ route('anasayfaslug', ['id' => $anasayfagetir->id, 'slug' => $anasayfagetir->slug]) }}">{{ \Carbon\Carbon::parse($anasayfagetir->tarih)->translatedFormat('j F Y, l') }}</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold"
                                    href={{ route('anasayfaslug', ['id' => $anasayfagetir->id, 'slug' => $anasayfagetir->slug]) }}>{{ $anasayfagetir->baslik }}</a>
                            </div>

                        </div>
                    @endforeach
                </div>
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
                        <img class="img-fluid w-100 h-100" src="img/otobussaatlerifotosu.png"
                            style="object-fit: cover;">
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
            </div>
        </div>
    </div>
</div>
