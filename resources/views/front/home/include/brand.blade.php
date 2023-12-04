<section>
    <h1 class="d-none">S M Alif Ahmmed-Brands</h1>
    <div class="container">
        <div class="brand-carousel owl-carousel owl-theme">
            @foreach($brands as $brand)
                <div class="item">
                    <img src="{{asset( $brand->image )}}" alt="Logo">
                </div>
            @endforeach
        </div>
    </div>
</section>
