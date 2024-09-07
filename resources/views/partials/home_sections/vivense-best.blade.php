@php
    $limitedProduct = [
        [
            'image' => asset('front/assets/images/best1.webp'),
        ],
        [
            'image' => asset('front/assets/images/best2.webp'),
        ],
        [
            'image' => asset('front/assets/images/best3.webp'),
        ],
        [
            'image' => asset('front/assets/images/best4.webp'),
        ],
        [
            'image' => asset('front/assets/images/best5.webp'),
        ],
        [
            'image' => asset('front/assets/images/best6.webp'),
        ],
        [
            'image' => asset('front/assets/images/best7.webp'),
        ],
        [
            'image' => asset('front/assets/images/best8.webp'),
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                En iyi fiyat, en yeniler
            </span>
        </div>
        <div class="row">
                @foreach($limitedProduct as $item)
                <a href="#" class="col-lg-3 ">
                    <div class="limited-card">
                    <img class="img-field" src="{{ $item['image'] }}" alt="Collection Image" loading="lazy">
                </div>
                </a>
                @endforeach
        </div>
    </div>
</section>
