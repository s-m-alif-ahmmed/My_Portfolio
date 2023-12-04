@extends('admin.master')
@section('title')
    Edit Feature Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Feature</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Feature</li>
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
                        <h5 class="mb-0">Edit Feature</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('feature-title.update', $feature_title->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="heading" class="form-label">Heading Title</label>
                                    <input class="form-control" type="text" name="heading" id="heading" placeholder="Heading Title" value="{{  $feature_title->heading }}" />
                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label">Features Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Features Name" value="{{  $feature_title->name }}" />
                                </div>
                                <div class="col-12">
                                    <label for="main_description" class="form-label">Features Description</label>
                                    <textarea class="form-control" type="text" name="main_description" id="main_description" placeholder="Features Description" >{{  $feature_title->main_description }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label for="image" class="form-label">Features Image</label>
                                    <input type="file" class="form-control" name="image" id="image" />
                                    <img class="mt-2" src="{{asset($feature_title->image)}}" alt="Feature image" width="80" height="60" />
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-primary px-4" type="submit">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

