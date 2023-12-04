<section id="blog" class="bg-light-gray">
    <h1 class="d-none">S M Alif Ahmmed-Blogs</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> {{ $header->heading }} </h5>
                    <h2> {{ $header->name }} </h2>
                    <p> {{ $header->description }} </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-group">
                @foreach($blogs->sortByDesc('created_at')->take(2) as $blog)
                    <div class="col-md-6 col-sm-12 mb-xs-5">
                        <div class="card h-100 news_item shadow blog-one">
                            <div class="image split-blog-scale">
                                <img src="{{asset( $blog->image )}}" class="img-fluid w-100" alt="blog" style="height:400px; ">
                            </div>
                            <div class="news_desc">
                                <h3 class="text-capitalize line-height-normal"><a href="javascript:void(0)" class="color-black"> {{ $blog->name }} </a></h3>
                                <ul class="meta-tags mt-20px mb-20px">
                                    <li><a href="javascript:void(0)"><i class="fa fa-calendar"></i> {{date('d,M,Y')}} </a></li>
                                    <li><a href="javascript:void(0)"> <i class="fa fa-user"></i> {{ $blog->author_name }} </a></li>
{{--                                    <li><a href="javascript:void(0)"><i class="fa fa-comment"></i>5 </a></li>--}}
                                </ul>
                                <p class="mb-35px"> {{ $blog->description }} </p>
                                {{--                            <a href="javascript:void(0)" class="btn-setting btn-hvr-setting-main btn-black text-white btn-hvr">Read more--}}
                                {{--                                <span class="btn-hvr-setting btn-hvr-summer-sky">--}}
                                {{--                                 <span class="btn-hvr-setting-inner">--}}
                                {{--                                 <span class="btn-hvr-effect"></span>--}}
                                {{--                                 <span class="btn-hvr-effect"></span>--}}
                                {{--                                 <span class="btn-hvr-effect"></span>--}}
                                {{--                                 <span class="btn-hvr-effect"></span>--}}
                                {{--                                 </span>--}}
                                {{--                                </span>--}}
                                {{--                            </a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
