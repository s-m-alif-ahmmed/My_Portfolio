<section class="absolute-img-wrap">
    <h1 class="d-none">S M Alif Ahmmed-Company</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 text-lg-left text-md-center md-mb-5">
                <div class="main-title mb-2rem text-lg-left wow fadeIn" data-wow-delay="300ms">
                    <h5> {{  $company->heading ?? '' }} </h5>
                    <h2> {{  $company->name ?? '' }} </h2>
                    <p> {{  $company->description ?? '' }} </p>
                </div>
                <a href="javascript:void(0)" class="btn-setting btn-hvr-setting-main btn-summer-sky color-white">Read More
                    <span class="btn-hvr-setting btn-hvr-transparent">
                            <span class="btn-hvr-setting-inner">
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                            </span>
                        </span>
                </a>
            </div>
            <div class="col-lg-6 col-md-12 absolute-img right-img">
                <div class="d-lg-inline-block">
                    <div class="image"><img alt="SEO" src="{{asset(  $company->image ?? '' )}}"></div>
                </div>
            </div>
        </div>
    </div>
</section>
