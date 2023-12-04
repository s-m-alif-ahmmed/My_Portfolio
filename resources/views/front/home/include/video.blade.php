<section class="half-section p-0">
    <h1 class="d-none">S M Alif Ahmmed-Video</h1>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 p-0 equalheight col-video video-bg">
                <div class="image hover-effect">
                    <img alt="stats" src="{{asset( $video->image )}}" class="equalheight video-img-setting">
                </div>
{{--                <a data-fancybox="" href="{{ $video->link }}" class="video-play-button position-absolute">--}}
{{--                    <i class="fa fa-play"></i>--}}
{{--                </a>--}}

            </div>

            <div class="col-md-6 col-sm-12 p-0 equalheight col-video bg-summer-sky order-lg-2">
                <div class="video-content-setting center-block text-left text-xs-center equalheight">
                    <h2 class="color-white font-weight-light text-capitalize mb-2rem mb-xxs-3"> {{ $video->name }} </h2>
                    <p class="color-white"> {{ $video->description }} </p>
                </div>
            </div>

        </div>
    </div>
</section>
