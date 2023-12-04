<section class="stats bg-light-gray">
    <h1 class="d-none">S M Alif Ahmmed-Achivement</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeIn" data-wow-delay="300ms">
                <div class="main-title mb-md-5 wow fadeIn" data-wow-delay="300ms">
                    <h5> {{$achievement_title->heading}} </h5>
                    <h2> {{$achievement_title->name}} </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($achievements->take(5) as $achievement)
            <div class="col-md-4 col-sm-12 stats-box mb-xs-2rem">
                <div class="serial-box center-block wow zoomIn" data-wow-delay="400ms">
                    <span class="icon">
                            {!! $achievement->icon !!}
                    </span>
                    <p class="pt-3 pb-3 numscroller">{{$achievement->number}}</p>
                    <h6 class="mb-0">{{$achievement->name}}</h6>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
