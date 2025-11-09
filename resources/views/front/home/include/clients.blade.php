<section id="clients" class="p-0">
    <h1 class="d-none">S M Alif Ahmmed-Clients</h1>
    <section class="parallax-setting parallaxie parallax1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInLeft">
                    <p class="mb-10px font-18 font-weight-normal color-summer-sky">{{ $client->heading ?? '' }}</p>
                    <h2 class="color-black mb-25px font-weight-light line-height-normal"> {{ $client->name ?? '' }} </h2>
                </div>
            </div>

            <div class="row align-items-center position-relative">
                <div class="col-lg-3 col-md-3 col-sm-12 col-testimonial order-xs-2">
                    <div class="owl-thumbs owl-dots text-md-left">
                        <div class="owl-dot active"><img src="{{asset('/')}}front/personal-profile/img/testimonial1.png" alt=""></div>
                        <div class="owl-dot"><img src="{{asset('/')}}front/personal-profile/img/testimonial2.png" alt=""></div>
                        <div class="owl-dot"><img src="{{asset('/')}}front/personal-profile/img/testimonial3.png" alt=""></div>
                        <div class="owl-dot"><img src="{{asset('/')}}front/personal-profile/img/testimonial4.png" alt=""></div>

                        <div class="owl-dot"><img src="{{asset('/')}}front/personal-profile/img/testimonial5.png" alt=""></div>
                        <div class="owl-dot"><img src="{{asset('/')}}front/personal-profile/img/testimonial6.png" alt=""></div>
                        <div class="owl-dot"><img src="{{asset('/')}}front/personal-profile/img/testimonial7.jpg" alt=""></div>
                        <div class="owl-dot"><img src="{{asset('/')}}front/personal-profile/img/testimonial8.jpg" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="owl-carousel owl-theme testimonial-two wow fadeInUp">
                        @foreach($feedbacks as $feedback)
                            <div class="testimonial-item">
                                <p class="color-black testimonial-para mb-15px"> {{ $feedback->feedback }} </p>

                                <div class="testimonial-post">
                                    <a href="javascript:void(0)" class="post"><img src="{{asset( $feedback->image )}}" alt="image"></a>
                                    <div class="text-content">
                                        <h5 class="color-black text-capitalize">{{ $feedback->client_name }}</h5>
                                        <p class="color-catalina-blue"> {{ $feedback->position }} </p>
                                        <div class="rating">
                                            <i class="ti ti-star"></i>
                                            <i class="ti ti-star"></i>
                                            <i class="ti ti-star"></i>
                                            <i class="ti ti-star"></i>
                                            <i class="ti ti-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
