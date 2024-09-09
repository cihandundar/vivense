@php
    $flashPrices = [
        [
            'image' => asset('front/assets/images/stock1.webp'),
            'price' => 26.499
        ],
        [
            'image' => asset('front/assets/images/stock2.webp'),
            'price' => 32.999
        ],
        [
            'image' => asset('front/assets/images/stock3.webp'),
            'price' => 5.199
        ],
        [
            'image' => asset('front/assets/images/stock4.webp'),
            'price' => 11.199
        ],
        [
            'image' => asset('front/assets/images/stock5.webp'),
            'price' => 2.499
        ],
        [
            'image' => asset('front/assets/images/stock6.webp'),
            'price' => 3.999
        ],
        [
            'image' => asset('front/assets/images/stock7.webp'),
            'price' => 6.999
        ],
        [
            'image' => asset('front/assets/images/stock8.webp'),
            'price' => null
        ],
    ];
@endphp

<section>
    <div class="container">
        <div class="title">
            <span>
                stoktan flaş fiyatlar!
            </span>
        </div>
        <div class="row">
            @foreach($flashPrices as $item)
            <a href="#" class="col-lg-3 ">
                <div class="flash-card">
                <img class="img-field" src="{{ $item['image'] }}" alt="Flash Image" loading="lazy">
                @if ($item['price'] !== null)
             <span class="price">{{ $item['price'] }} TL</span>
                @endif
            </div>
            </a>
        @endforeach
    </div>
</section>
