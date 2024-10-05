@php
    $collection = [
        [
            'image' => asset('front/assets/images/dining1.webp'),
            'link' => null,
        ],
        [
            'image' => asset('front/assets/images/dining2.webp'),
            'link' => 'Yemek Odanı Oluştur',
        ],
        [
            'image' => asset('front/assets/images/dining3.webp'),
            'link' => 'Hediyeni Keşfet',
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                Yemek odası hediye fırsatı
            </span>
        </div>
        <div class="row">
            @foreach ($collection as $item)
                <a href="#" class="col-lg-4 col-6">
                    <div class="collection-card">
                        <img class="img-field" src="{{ $item['image'] }}" alt="Collection Image" loading="lazy">
                        @if (!is_null($item['link']))
                            <div class="link" style="margin-top: 10px;">{{ $item['link'] }} ></div>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
