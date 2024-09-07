

<section>
    <div class="container">
        <div class="title">
            <span>Evin İçin Seçtiklerimiz</span>
        </div>
        <div class="row">
            <a href="#" class="col-lg-3 slider-card">
                <div class="swiper pickProductSwiper">
                    <div class="swiper-wrapper pickProductWrapper">
                        @foreach($picksProducts as $item)
                        @php
                            $discountImg = $item['discountImg'] ?? '';
                            $paymentImg = $item['paymentImg'] ?? '';
                            $imageSrc = $discountImg ?: $paymentImg;
                            $altText = $imageSrc ? '' : 'image';
                        @endphp
                        <div class="swiper-slide">
                            <div class="pickCardWrapper">
                                <img src="{{ $item['image'] }}" alt="productImage">
                                @if($imageSrc)
                                    <img class="discountImage" src="{{ $imageSrc }}" alt="{{ $altText }}" loading="lazy">
                                @endif
                                <div class="pick-card-name">{{ $item['name'] }}</div>
                                <div class="picks-card-price">{{ $item['price'] }} TL</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </a>
        </div>
    </div>
</section>
