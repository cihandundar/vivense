@php
    $limitedProduct = [
        [
            'image' => asset('front/assets/images/new1.webp'),
        ],
        [
            'image' => asset('front/assets/images/new2.webp'),
        ],
        [
            'image' => asset('front/assets/images/new3.webp'),
        ],
        [
            'image' => asset('front/assets/images/new4.webp'),
        ],
        [
            'image' => asset('front/assets/images/new5.webp'),
        ],
        [
            'image' => asset('front/assets/images/new6.webp'),
        ],
        [
            'image' => asset('front/assets/images/new7.webp'),
        ],
        [
            'image' => asset('front/assets/images/new8.webp'),
        ],

    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                En İyi Fiyat, En Yeniler
            </span>
        </div>
        <div class="row">
                @foreach($limitedProduct as $item)
                <a href="#" class="col-lg-3">
                    <div class=" news-card">
                    <img class="img-field" src="{{ $item['image'] }}" alt="Collection Image" loading="lazy">
                </div>
                </a>
                @endforeach
        </div>
    </div>
</section>
