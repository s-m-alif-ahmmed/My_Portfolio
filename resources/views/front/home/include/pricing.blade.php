<section id="pricing" class="bg-light-gray">
    <h1 class="d-none">S M Alif Ahmmed-Pricing Plans</h1>
    <div class="container">
        <div class="row m-0">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> {{$heading->heading}} </h5>
                    <h2> {{$heading->name}} </h2>
                    <p> {{$heading->description}} </p>
                </div>
            </div>
        </div>

        <div class="row two-col-pricing">
        @foreach($pricings->take(3) as $pricing)
            <div class="col-lg-4 col-md-6 col-sm-12 text-center md-mb-5 wow fadeInLeft">
                <div class="pricing-item">
                    <div class="price-box clearfix">
                        <div class="price_title">
                            <h4 class="text-capitalize">{{ $pricing->name }}</h4>
                            <p>{{ $pricing->description }}</p>
                        </div>
                    </div>
                    <div class="price">
                        <h2 class="position-relative">
                            <span class="dollar">{{ $pricing->symble }}</span>
                            {{ $pricing->amount }}<span class="month">/ {{ $pricing->month }}</span>
                        </h2>
                    </div>
                    <div class="price-description">
                        @foreach($options as $option)
                            @if($option->pricing_id == $pricing->id)
                                @if($option->status == 'on')
                                    <p>{{ $option->option_name }}</p>
                                @else
                                    <p class="not"><span class="not-support">{{ $option->option_name }}</span></p>
                                @endif
                            @endif
                        @endforeach
                    </div>
                    <a href="#contact" class="btn-setting btn-hvr-setting-main btn-black text-uppercase">{{ $pricing->button }}
                        <span class="btn-hvr-setting">
                            <span class="btn-hvr-setting-inner">
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    </div>

</section>
