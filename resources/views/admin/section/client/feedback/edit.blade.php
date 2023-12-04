@extends('admin.master')
@section('title')
    Edit Feedback Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Feedback</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Feedback Content</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        {{--        message--}}
        <p class="text-center text-primary">{{session('message')}}</p>

        <!-- Create Home Content Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">Edit Feedback Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('feedback.update', $feedback->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="image" class="form-label"> Client Image</label>
                                    <input type="file" class="form-control" name="image" id="image" />
                                    <img class="mt-2" src="{{asset($feedback->image)}}" alt=" image" width="80" height="60" />
                                </div>

                                <div class="col-12">
                                    <label for="client_name" class="form-label">Client Name</label>
                                    <input class="form-control" type="text" name="client_name" id="client_name" placeholder="Enter Client Name" value="{{$feedback->client_name}}" required />
                                </div>
                                <div class="col-12">
                                    <label for="position" class="form-label"> Client Position</label>
                                    <input class="form-control" type="text" name="position" id="position" placeholder="Enter client position" value="{{$feedback->position}}" required />
                                </div>
                                <div class="col-12">
                                    <label for="feedback" class="form-label">Feedback</label>
                                    <textarea class="form-control" type="text" name="feedback" id="feedback" placeholder="Enter feedback" required >{{$feedback->feedback}}</textarea>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-primary px-4" type="submit">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

