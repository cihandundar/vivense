@php
    $limitedProduct = [
        [
            'image' => asset('front/assets/images/school1.webp'),
            'price' => 9.899,
            'name' => "Bien Genç Odası Takımı",
        ],
        [
            'image' => asset('front/assets/images/school2.webp'),
            'price' => 6.799,
            'name' => "Lora Karyola",
        ],
        [
            'image' => asset('front/assets/images/school3.webp'),
            'price' => 8.049,
            'name' => "Hari Gardırop",
        ],
        [
            'image' => asset('front/assets/images/school4.webp'),
            'price' => null
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                Okulun Ritmini Yakala
            </span>
        </div>
        <div class="row">
            @foreach($limitedProduct as $item)
            <a href="#" class="col-lg-3 office-card">
                <img class="img-field" src="{{ $item['image'] }}" alt="OfficeImage" loading="lazy">
                @if ($item['price'] !== null)
             <span class="price bg-orange">{{ $item['price'] }} TL</span>
             <div class="name">{{ $item['name'] }}</div>
             @endif
            </a>
            @endforeach
        </div>
    </div>
</section>
