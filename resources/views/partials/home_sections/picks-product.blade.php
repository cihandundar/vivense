@php
    $picksProduct = [
        [
            'image' => asset('front/assets/images/product1.jpg'),
            'price'=> 1.999,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> " Anka Koltuk Takımı, Gri ",
        ],
        [
            'image' => asset('front/assets/images/product2.jpg'),
            'discout'=> 20,
            'price'=> 3.421,
            'name'=> " Neo Düğün Paketi ",
        ],
        [
            'image' => asset('front/assets/images/product3.jpg'),
            'price'=> 2.213,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> " Kitchen Essentials Hazırlık Seti 2 ",
        ],
        [
            'image' => asset('front/assets/images/product4.jpg'),
            'discout'=> 20,
            'price'=> 5.945,
            'name'=> " Tulip Köşe Koltuk, Ekru ",
        ],
        [
            'image' => asset('front/assets/images/product5.jpg'),
            'price'=> 6.789,
            'paymentImg' => asset('front/assets/images/payment.webp'),
            'name'=> " Ellas Koltuk Takımı, Krem ",
        ],
        [
            'image' => asset('front/assets/images/product6.jpg'),
            'discout'=> 20,
            'price'=> 9.099,
            'name'=> " Valens Sandalye, Naturel, Kumaş Değişimli ",
        ],
        [
            'image' => asset('front/assets/images/product7.jpg'),
            'price'=> 2.343,
            'paymentImg' => asset('front/assets/images/payment.webp'),
            'name'=> " Jazz Koltuk Takımı, Kumaş Değişimli ",
        ],
        [
            'image' => asset('front/assets/images/product8.jpg'),
            'discout'=> 20,
            'price'=> 3.454,
            'name'=> " Kitchen Essentials Pure Altılı Meşrubat Bardak Seti ",
        ],
        [
            'image' => asset('front/assets/images/product9.png'),
            'discout'=> 20,
            'price'=> 6.532,
            'name'=> " Kitchen Essentials Stoneware Mat Kase 17 Cm, Ekru ",
        ],
        [
            'image' => asset('front/assets/images/product10.jpg'),
            'price'=> 7.645,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> " Luna Simply Colors Yıkanmış Pamuklu Nevresim Seti, Ekru... ",
        ],
        [
            'image' => asset('front/assets/images/product11.jpg'),
            'discout'=> 20,
            'price'=> 8.334,
            'name'=> " Luna Nova Microfiber Yastık, 650 Gr ",
        ],
        [
            'image' => asset('front/assets/images/product12.jpg'),
            'price'=> 2.999,
            'paymentImg' => asset('front/assets/images/payment.webp'),
            'name'=> " Kitchen Essentials Stoneware Çukur Yemek Tabağı 21 Cm",
        ],
        [
            'image' => asset('front/assets/images/product1.jpg'),
            'price'=> 3.123,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> " Henry Midi Portmanto, Minderli ",
        ],
        [
            'image' => asset('front/assets/images/product2.jpg'),
            'discout'=> 20,
            'price'=> 10.999,
            'name'=> " Lagomood Side Çalışma Masası, Beyaz Safir Meşe ",
        ],
        [
            'image' => asset('front/assets/images/product3.jpg'),
            'price'=> 13.413,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> "Kitchen Essentials Stoneware Çukur Yemek Tabağı 21 Cm",
        ],
        [
            'image' => asset('front/assets/images/product3.jpg'),
            'price'=> 22.949,
            'name'=> " Torenna Çalışma Masası, Safir Meşe ",
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>Evin İçin Seçtiklerimiz</span>
        </div>
        <div class="row">
            <a href="#" class="col-lg-3 picks-card">
                <div class="swiper pickProductSwiper">
                    <div class="swiper-wrapper pickProductWrapper">
                        @foreach($picksProduct as $item)
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
