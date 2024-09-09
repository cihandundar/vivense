@php
    $collection = [
        [
            'image' => asset('front/assets/images/opportunity1.webp'),
            'discount' => "9.699 TL' den başlayan fiyatlar"
        ],
        [
            'image' => asset('front/assets/images/opportunity2.webp'),
            'discount' => "3.600 TL' den başlayan fiyatlar"
        ],
        [
            'image' => asset('front/assets/images/opportunity3.webp'),
            'discount' => "5.349 TL' den başlayan fiyatlar"
        ],
        [
            'image' => asset('front/assets/images/opportunity4.webp'),
            'discount' => "1.099 TL' den başlayan fiyatlar"
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                Fırsat Butiği
            </span>
        </div>
        <div class="row">
                @foreach($collection as $item)
                <a href="#" class="col-lg-3 ">
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
