@extends('admin.master')
@section('title')
    Add Pricing Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Pricing</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Pricing Content</li>
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
                        <h5 class="mb-0">Add New Pricing Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('pricing.store')}}" enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <div class="col-12">
                                    <label for="name" class="form-label"> Plan Name </label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Plan Name" required />
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label"> Description </label>
                                    <textarea class="form-control" type="text" name="description" id="description" placeholder="Enter description" required ></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="symble" class="form-label"> Money Symble</label>
                                    <input class="form-control" type="text" name="symble" id="symble" placeholder="Enter money symble" required />
                                </div>
                                <div class="col-12">
                                    <label for="amount" class="form-label"> Plan Amount </label>
                                    <input class="form-control" type="text" name="amount" id="amount" placeholder="Enter plan amount" required />
                                </div>
                                <div class="col-12">
                                    <label for="month" class="form-label"> Month/Year </label>
                                    <input class="form-control" type="text" name="month" id="month" placeholder="Enter plan month or year" required />
                                </div>
                                <div class="col-12">
                                    <label for="button" class="form-label"> Button Name </label>
                                    <input class="form-control" type="text" name="button" id="button" placeholder="Enter button name " required />
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

