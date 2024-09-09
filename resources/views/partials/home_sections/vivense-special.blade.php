@php
    $specialCollection = [
        [
            'image' => asset('front/assets/images/vivense1.webp'),
            'title' => 'UYGULAMAYI İNDİR',
            'desc' => null
        ],
        [
            'image' => asset('front/assets/images/vivense2.webp'),
            'title' => '500 TL İNDİRİM!',
            'desc' => 'Vivense uygulamasına özel 8.000 TL ve üzeri tüm alışverişlerde 500 TL sepet indirimi!'
        ],
        [
            'image' => asset('front/assets/images/vivense3.webp'),
            'title' => '2. ÜRÜNE %10 İNDİRİM',
            'desc' => 'Vivense uygulamasına özel Vivense Collection alışverişinde 2. ürüne %10 indirim!'
        ],


    ];
@endphp


<section>
    <div class="container">
        <div class="row">
                @foreach ($specialCollection as $item)
                <div class="col-lg-4">
                        <img class="img-field" src="{{ $item['image'] }}" alt="Collection Image" loading="lazy">
                        <div class="title-field">
                            <span>{{ $item['title'] }}</span>
                        </div>
                        <div class="desc-field">
                            <span>{{ $item['desc'] }}</span>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</section>
