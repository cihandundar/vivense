<section>
    <div class="container">
        <div class="title">
            <span>
                POPÜLER KATEGORİ
            </span>
        </div>
        <div class="row">

            @foreach ($popularCategory as $item)
                <div class="col-lg-3 col-6">
                    <a href="#" class="category-card">
                        <div class="category-text">
                            <div class="category-card-title">{{ $item['category'] }}</div>
                            <div class="category-card-desc"><span>{{ $item['desc'] }} </span><small>'den başlayan
                                    fiyatlarla</small></div>
                        </div>
                        <img src="{{ $item['image'] }}" alt="categoryImage">
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>
