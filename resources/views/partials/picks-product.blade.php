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
            'price'=> 1.999,
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product3.jpg'),
            'price'=> 1.999,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product4.jpg'),
            'discout'=> 20,
            'price'=> 1.999,
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product5.jpg'),
            'price'=> 1.999,
            'paymentImg' => asset('front/assets/images/payment.webp'),
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product6.jpg'),
            'discout'=> 20,
            'price'=> 1.999,
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product7.jpg'),
            'price'=> 1.999,
            'paymentImg' => asset('front/assets/images/payment.webp'),
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product8.jpg'),
            'discout'=> 20,
            'price'=> 1.999,
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product9.png'),
            'discout'=> 20,
            'price'=> 1.999,
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product10.jpg'),
            'price'=> 1.999,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product11.jpg'),
            'discout'=> 20,
            'price'=> 1.999,
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product12.jpg'),
            'price'=> 1.999,
            'paymentImg' => asset('front/assets/images/payment.webp'),
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product1.jpg'),
            'price'=> 1.999,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product2.jpg'),
            'discout'=> 20,
            'price'=> 1.999,
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product3.jpg'),
            'price'=> 1.999,
            'discountImg' => asset('front/assets/images/discount.webp'),
            'name'=> "Product 1",
        ],
        [
            'image' => asset('front/assets/images/product3.jpg'),
            'price'=> 1.999,
            'name'=> "Product 1",
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
                                    <img class="discountImage" src="{{ $imageSrc }}" alt="{{ $altText }}">
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
