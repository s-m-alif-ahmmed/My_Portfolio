@extends('admin.master')
@section('title')
    Edit Video Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Video</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Video Content</li>
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
                        <h5 class="mb-0">Edit Video Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('video.update', $video->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="image" class="form-label"> Image</label>
                                    <input type="file" class="form-control" name="image" id="image" />
                                    <img class="mt-2" src="{{asset($video->image)}}" alt=" image" width="80" height="60" />
                                </div>

                                <div class="col-12">
                                    <label for="link" class="form-label">Video Link</label>
                                    <input class="form-control" type="text" name="link" id="link" placeholder="Enter video link" value="{{$video->link}}" required />
                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label"> Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" value="{{$video->name}}" required />
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" type="text" name="description" id="description" placeholder="Enter description" required >{{$video->description}}</textarea>
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

