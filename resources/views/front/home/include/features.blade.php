<section id="features">
    <h1 class="d-none">S M Alif Ahmmed-Features</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> {{$feature_title->heading ?? ''}} </h5>
                    <h2> {{$feature_title->name ?? ''}} </h2>
                    <p>{{$feature_title->main_description ?? ''}}</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 d-xs-none wow fadeInLeft">
                <div>
                    <img alt="features" src="{{asset($feature_title->image ?? '')}}">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 mx-auto wow fadeInRight">
                @foreach($features->take(3) as $feature)
                <div class="feature-item mt-0">
                    <div class="laptop-features-icon">
                        <span class="icon">
                            {!! $feature->icon ?? '' !!}
                        </span>
                    </div>
                    <div class="features-content">
                        <h4 class="color-black font-weight-500 mb-10px">{{$feature->feature ?? ''}}</h4>
                        <p>{{$feature->description ?? ''}}</p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
