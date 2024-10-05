@php
    $limitedProduct = [
        [
            'image' => asset('front/assets/images/limited1.webp'),
        ],
        [
            'image' => asset('front/assets/images/limited2.webp'),
        ],
        [
            'image' => asset('front/assets/images/limited3.webp'),
        ],
        [
            'image' => asset('front/assets/images/limited4.webp'),
        ],
        [
            'image' => asset('front/assets/images/limited5.webp'),
        ],
        [
            'image' => asset('front/assets/images/limited6.webp'),
        ],
        [
            'image' => asset('front/assets/images/limited7.webp'),
        ],
        [
            'image' => asset('front/assets/images/limited8.webp'),
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                Stoklarla Sınırlı!
            </span>
        </div>
        <div class="row">
            @foreach ($limitedProduct as $item)
                <a href="#" class="col-lg-3 col-6">
                    <div class=" limited-card">
                        <img class="img-field" src="{{ $item['image'] }}" alt="Collection Image" loading="lazy">
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
