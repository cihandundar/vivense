@php
    $officeCollection = [
        [
            'image' => asset('front/assets/images/office1.webp'),
            'price' => 5.739,
            'name' => "Nala Multi Çalışma Masası",
        ],
        [
            'image' => asset('front/assets/images/office2.webp'),
            'price' => 9.299,
            'name' => "Stream Kitaplık",
        ],
        [
            'image' => asset('front/assets/images/office3.webp'),
            'price' => 4.599,
            'name' => "Roll Çalışma Sandalyesi ",
        ],
        [
            'image' => asset('front/assets/images/office4.webp'),
            'price' => null
        ],
    ];
@endphp


<section>
    <div class="container">
        <div class="title">
            <span>
                Ofisin Ritmini Yakala
            </span>
        </div>
        <div class="row">
            @foreach($officeCollection as $item)
            <a href="#" class="col-lg-3 office-card">
                <img class="img-field" src="{{ $item['image'] }}" alt="OfficeImage" loading="lazy">
                @if ($item['price'] !== null)
             <span class="price bg-brown">{{ $item['price'] }} TL</span>
             <div class="name">{{ $item['name'] }}</div>
             @endif
            </a>
            @endforeach
        </div>
    </div>
</section>
