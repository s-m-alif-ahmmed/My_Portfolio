<section id="work" class="portfolio-two">
    <h1 class="d-none">S M Alif Ahmmed-Works</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title mb-2rem wow fadeIn" data-wow-delay="300ms">
                    <h5> {{ $content->heading }} </h5>
                    <h2> {{ $content->name }} </h2>
                    <p> {{ $content->description }} </p>
                </div>
            </div>
        </div>

         <div class="row m-0 d-block">
            <div class="filtering col-sm-12 text-center pt-2 mb-40px">
        <span data-filter="*" class="{{ !request()->has('category_id') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="text-black">All</a>
        </span>
                @foreach($categories as $category)
                    <span class="{{ request('category_id') == $category->id ? 'active' : '' }}">
                <a href="{{ route('home', ['category_id' => $category->id]) }}" class="text-black">{{ $category->name }}</a>
            </span>
                @endforeach
            </div>

            <div class="gallery text-center">
                <!-- gallery items -->
                @if(request()->has('category_id'))
                    @foreach($projects->where('category_id', request('category_id')) as $project)
                        <h1 class="d-none">S M Alif Ahmmed-Works</h1>
                        <div class="col-md-4 items web">
                            <div class="item-img">
                                <a href="#" target="_blank">
                                    <img src="{{ asset($project->image) }}" alt="image">
                                    <div class="item-img-overlay valign">
                                        <div class="overlay-info">
{{--                                            <span class="plus mb-3"></span>--}}
                                            <h4 class="mb-1">{{ $project->name }}</h4>
                                            <p>{{ $project->description }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach($projects as $project)
                        <h1 class="d-none">S M Alif Ahmmed-Works</h1>
                        <div class="col-md-4 items web">
                            <div class="item-img">
                                <a href="#" target="_blank">
                                    <img src="{{ asset($project->image) }}" alt="image" title="image">
                                    <div class="item-img-overlay valign">
                                        <div class="overlay-info">
{{--                                            <span class="plus mb-3"></span>--}}
                                            <span class="mb-3">
                                                <i class="fa fa-3x fw-lighter fa-link pb-3"></i>
                                            </span>
                                            <h4 class="mb-1">{{ $project->name }}</h4>
                                            <p>{{ $project->description }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>
</section>
