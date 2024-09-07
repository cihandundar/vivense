<section>
    <div class="container">
        <div class="title">
            <span>Ödeme Yöntemleri</span>
        </div>
        <div class="row">
            <a href="#" class="col-lg-3 slider-card">
                <div class="swiper paymentSlider">
                    <div class="swiper-wrapper pickProductWrapper">
                        @foreach($paymentSlider as $item)
                        <div class="swiper-slide">
                            <img src="{{ $item['image'] }}" alt="productImage">
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
