@extends('admin.master')
@section('title')
    Edit Favicon Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Favicon</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Favicon Content</li>
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
                        <h5 class="mb-0">Edit Favicon Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('favicon.update', $favicon->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="image" class="form-label"> Favicon </label>
                                    <input type="file" class="form-control" name="image" id="image" value="{{ $favicon->image }}" required />
                                    <img class="mt-2" src="{{asset($favicon->image)}}" alt=" Favicon" width="80" height="60" />
                                </div>

                                <div class="col-12">
                                    <label for="title" class="form-label"> Title </label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ $favicon->title }}" required />
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

