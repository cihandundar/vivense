@php
    $collection = [
        [
            'image' => asset('front/assets/images/collection1.webp'),
            'discount' => "2.469 TL'den başlayan fiyatlarla"
        ],
        [
            'image' => asset('front/assets/images/collection2.webp'),
            'discount' => "%30'a varan indirim"
        ],
        [
            'image' => asset('front/assets/images/collection3.webp'),
            'discount' => "799 TL'den başlayan fiyatlarla"
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                VİVENSE KOLEKSİYONLARI
            </span>
        </div>
        <div class="row">
                @foreach($collection as $item)
                <a href="#" class="col-lg-4 ">
                    <div class="collection-card">
                        <img class="img-field" src="{{ $item['image'] }}" alt="Collection Image" loading="lazy">
                        <div class="discount">{{ $item['discount'] }}</div>
                        <div class="link">Hemen Keşfet ></div>
                    </div>
                </a>
                @endforeach
        </div>
    </div>
</section>
