@extends('admin.master')
@section('title')
    Add Feature Content
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
                        <li class="breadcrumb-item active" aria-current="page">Add New Feature</li>
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
                        <h5 class="mb-0">Add New Feature</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('feature.store')}}" enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <div class="col-12">
                                    <label for="icon" class="form-label"> Feature Icon </label>
                                    <textarea class="form-control" type="text" name="icon" id="icon" placeholder=" Enter feature icon code" required ></textarea>
                                </div>

                                <div class="col-12">
                                    <label for="feature" class="form-label"> Feature Name </label>
                                    <input class="form-control" type="text" name="feature" id="feature" placeholder="Enter feature Name" required />
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label"> Feature Description </label>
                                    <textarea class="form-control" type="text" name="description" id="description" placeholder="Enter feature description" required ></textarea>
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

