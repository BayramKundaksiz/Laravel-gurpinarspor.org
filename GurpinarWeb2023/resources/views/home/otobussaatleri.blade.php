<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Otobüs Saatleri</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none"
                                href="{{ route('tumotobus') }}">Hepsini Görüntüle</a>
                        </div>
                    </div>

                    @foreach ($otobusseferi as $otobusseferi)
                        <div class="col-lg-6">
                            <div class="d-flex mb-3">

                                <a target="_blank" href="{{ route('otobusslugger', $otobusseferi->slug) }}">
                                    <img href="{{ route('otobusslugger', $otobusseferi->slug) }}"
                                        src="otobussaatleri/{{ $otobusseferi->otobus_gorsel }}"
                                        style="width: 100px; height: 100px; object-fit: fill;">
                                </a>
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                    style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">

                                        <a class="h6 m-0" target="_blank"
                                            href="{{ route('otobusslugger', $otobusseferi->slug) }}">{{ Str::Limit($otobusseferi->otobus_baslik, 50) }}</a>

                                    </div>



                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>

            </div>



            <!-- Social Follow Start -->
            <div class="pb-3 col">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Hava Durumu</h3>
                </div>

                <div class="pb-3 col">

                    <iframe
                        src="https://www.meteoblue.com/tr/hava/widget/daily/g%c3%bcrp%c4%b1nar_t
                    %c3%bcrkiye_302024?geoloc=fixed&days=5&tempunit=CELSIUS&windunit=KIL
                    OMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&
                    pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemp
                    erature=1&windspeed=0&windspeed=1&windgust=0&winddirection=0&winddirection
                    =1&uv=0&humidity=0&precipitation=0&precipitation=1&precipitationprobability
                    =0&precipitationprobability=1&spot=0&spot=1&pressure=0&layout=light"
                        frameborder="0" scrolling="NO" allowtransparency="true"
                        sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox"
                        style="width: 270px; height: 200px"></iframe>
                    <div>
                        <!-- DO NOT REMOVE THIS LINK -->
                        <a href="https://www.meteoblue.com/tr/hava/hafta/g%c3%bcrp%c4%b1nar_t%c3%bcrk
                        iye_302024?utm_source=weather_widget&utm_medium=linkus&utm_content=daily&utm_c
                        ampaign=Weather%2BWidget"
                            target="_blank" rel="noopener">
                            Detaylı Hava Durumu İçin Tıklayınız</a>
                    </div>

                </div>


            </div>


            <!-- Social Follow End -->


            <!-- Tags End -->
        </div>
    </div>
</div>
</div>
