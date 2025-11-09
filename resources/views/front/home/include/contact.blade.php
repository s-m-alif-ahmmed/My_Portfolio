<section id="contact" class="bg-light-gray">
    <h1 class="d-none">S M Alif Ahmmed-Contact</h1>
    <div class="container">
        <div class="row pb-half pb-xs-0">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-5 wow fadeInUp" data-wow-delay="400ms">
                <div class="contact-box-shadow">
                    <div class="text-left sm-text-center text-center w-100">
                        <h2 class="color-black font-weight-normal mb-2rem"> {{$head->name ?? ''}} </h2>
                        <p class="contact-para-setting mx-auto">
                            {{$head->description ?? ''}}
                        </p>
                    </div>
                    <div class="contact-info pt-5">
                        <div class="icon-box">
                            <i class="fa fa-mobile color-summer-sky"></i>
                            <p class="color-grey"> {{$address->number ?? ''}} </p>
                        </div>
                        <div class="icon-box">
                            <i class="fa fa-envelope color-summer-sky"></i>
                            <p> <a href="mailto:email@website.com" class="color-grey"> {{$address->email ?? ''}} </a></p>
                        </div>
{{--                        <div class="icon-box">--}}
{{--                            <i class="fa fa-server color-summer-sky"></i>--}}
{{--                            <p> <a href="mailto:support@website.com" class="color-grey"> {{$address->support_email}} </a></p>--}}
{{--                        </div>--}}

                        <div class="icon-box">
                            <i class="fa fa-map-marker color-summer-sky"></i>
                            <p class="color-grey"> {{$address->address ?? ''}} </p>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-6 col-md-12 col-sm-12 mb-5 col-map wow fadeInUp" data-wow-delay="400ms">--}}
{{--                <div id="google-map" class="bg-light-gray map">--}}
{{--                    <span class="map">--}}
{{--                        {{$address->map}}--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> {{$top->heading ?? ''}} </h5>
                    <h2> {{$top->name ?? ''}} </h2>
                    <p> {{$top->description ?? ''}} </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 col-sm-12 contact-form-center wow fadeInUp" data-wow-delay="400ms">

                <p class="text-center text-muted pb-2">{{session('message')}}</p>

                <div class="company-contact-form">
                    <form class="contact-form-outer contact-form"  action="{{route('contact.store')}}" method="POST">
                        @csrf
                        @method('post')

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="contact-form-textfield pb-4">
                                    <input type="text" placeholder="Name" class="form-control" required="" id="name" name="name" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="contact-form-textfield pb-4">
                                    <input type="email" placeholder="Email" class="form-control" required="" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="contact-form-textfield pb-4">
                                    <input type="number" placeholder="Contact No" class="form-control" required="" id="phone" name="number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="contact-form-textfield pb-4">
                                    <input type="text" placeholder="Subject" class="form-control" required="" id="subject" name="subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-form-textfield pb-4">
                                    <textarea placeholder="Message" class="form-control message" id="message" name="message" required ></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="align-items-center">
                                    <input type="submit" class="btn btn-danger " value="Contact Now" />
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
