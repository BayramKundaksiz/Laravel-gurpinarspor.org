<!-- Category News Slider Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Ustalar</h3>
                </div>


                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">


                    @foreach ($ustalar as $ustalar)
                        <div class="position-relative">
                            <a href="{{ route('ustalarslug', $ustalar->slug) }}">
                                <img class="img-fluid w-100" src="ustagorseller/{{ $ustalar->usta_gorseli }}"
                                    style="object-fit: fill; height: 250px;">
                            </a>
                            <div class="overlock position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">İsmi</a>
                                    <span class="px-1">/</span>
                                    <span>{{ $ustalar->usta_ismi }}</span>
                                </div>

                                <a class="h4 m-0"
                                    href="{{ route('ustalarslug', $ustalar->slug) }}">{{ $ustalar->ustanin_yaptigi_is }}</a>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>


            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Alım - Satım</h3>
                </div>
                <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">

                    @foreach ($alimsatim as $alimsatim)
                        <div class="position-relative">
                            <a href="{{ route('alimsatimslug', $alimsatim->slug) }}">
                                <img class="img-fluid w-100" src="alimsatimgorseller/{{ $alimsatim->urun_gorseli }}"
                                    style="object-fit: fill; height: 250px;">
                            </a>
                            <div class="overlockusta position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">İsim</a>
                                    <span class="px-1">/</span>
                                    <span>{{ $alimsatim->satici_ismi }}</span>
                                </div>
                                <a class="h4 m-0"
                                    href="{{ route('alimsatimslug', $alimsatim->slug) }}">{{ $alimsatim->urun_basligi }}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Category News Slider End -->
