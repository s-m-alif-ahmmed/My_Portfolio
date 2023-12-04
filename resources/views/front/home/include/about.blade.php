<section class="half-section p-0">
    <h1 class="d-none">S M Alif Ahmmed-About</h1>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 p-0 order-lg-2">
                <div class="hover-effect">
                    <img alt="S M Alif Ahmmed" src="{{asset($about_title->image)}}" class="about-img w-100">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="skill-box">
                    <div class="main-title mb-5 text-md-left wow fadeIn" data-wow-delay="300ms">
                        <h5> {{$about_title->heading}} </h5>
                        <h2> {{$about_title->name}} </h2>
                        <p> {{$about_title->description}} </p>
                    </div>
                    <ul class="text-left">
                        @foreach($abouts->take(4) as $about)
                        <li class="custom-progress">
                            <h6 class="font-18 mb-0 text-capitalize">{{$about->name}} <span class="float-right"><b class="font-weight-500 numscroller">{{$about->percent}}</b>%</span></h6>

                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-summer-sky" role="progressbar" aria-valuenow="{{$about->percent}}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
