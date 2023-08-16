<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Duyurular</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none"
                                href="{{ route('tumduyuru') }}">Hepsini Görüntüle</a>
                        </div>
                    </div>

                    @foreach ($duyurular as $duyurular)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3">

                                <a target="_blank"
                                    href="{{ route('duyuruslug', ['id' => $duyurular->id, 'slug' => $duyurular->slug]) }}">
                                    <img href="{{ route('duyuruslug', ['id' => $duyurular->id, 'slug' => $duyurular->slug]) }}"
                                        src="duyurugorseller/{{ $duyurular->duyuru_gorsel }}"
                                        style="width: 100px; height: 100px; object-fit: fill;">
                                </a>
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a target="_blank"
                                            href="{{ route('duyuruslug', ['id' => $duyurular->id, 'slug' => $duyurular->slug]) }}">{{ Str::Limit($duyurular->duyuru_yazar, 25) }}</a>
                                        <span class="px-1">/</span>
                                        <span>{{ $duyurular->duyuru_tarih }}</span>
                                    </div>
                                    <a class="h6 m-0" target="_blank"
                                        href="{{ route('duyuruslug', ['id' => $duyurular->id, 'slug' => $duyurular->slug]) }}">{{ Str::Limit($duyurular->duyuru_baslik, 50) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>

            </div>



            <!-- Social Follow Start -->
            <div class="pb-3 col">
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


            <!-- Social Follow End -->


            <!-- Tags End -->
        </div>
    </div>
</div>
</div>
