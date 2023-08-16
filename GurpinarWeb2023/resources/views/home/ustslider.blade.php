<div class="container-fluid py-3">
    <div class="container">
        <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
            
            @foreach ($ustgorselgetir as $ustgorselgetir)
                
            <div class="d-flex">
                <img src="ustgorseller/{{$ustgorselgetir->ust_gorsel}}" style="width: 80px; height: 80px; object-fit: cover;">
                <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                    <a class="text-secondary font-weight-semi-bold" href="">{{$ustgorselgetir->ust_baslik}}</a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>