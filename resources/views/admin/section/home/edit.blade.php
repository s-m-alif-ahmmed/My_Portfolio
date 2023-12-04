@extends('admin.master')
@section('title')
    Edit Home Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Home</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Content</li>
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
                        <h5 class="mb-0">Edit Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{ route('home.update', $home->id )}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="home_profile_photo" class="form-label">Home Profile Image</label>
                                    <input type="file" class="form-control" name="home_profile_photo" id="home_profile_photo" />
                                    <img src="{{asset($home->home_profile_photo)}}" alt="Profile Photo" class="rounded-3 m-2" height="200" width="200">
                                </div>
                                <div class="col-12">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input class="form-control" type="text" name="full_name" id="full_name" placeholder="Full Name" value="{{$home->full_name}}" />
                                </div>
                                <div class="col-12" >
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

