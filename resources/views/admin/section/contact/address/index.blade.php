@extends('admin.master')

@section('title')
    Add Contact Address
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Contact Address</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Contact Address </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

{{--        message--}}
        <p class="text-center text-primary">{{session('message')}}</p>

        <!-- Create Contact Address Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-address py-3 bg-transparent">
                        <h5 class="mb-0">Add New Contact Address </h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('address.store')}}">
                                @csrf
                                @method('post')

                                <div class="col-12">
                                    <label for="number" class="form-label">Phone Number</label>
                                    <input class="form-control" type="text" name="number" id="number" placeholder="Enter phone number" required />
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label"> Email </label>
                                    <input class="form-control" type="text" name="email" id="email" placeholder=" Enter email" required />
                                </div>
                                <div class="col-12">
                                    <label for="support_email" class="form-label"> Support Email </label>
                                    <input class="form-control" type="text" name="support_email" id="support_email" placeholder="Enter support email" required />
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label"> Address </label>
                                    <input class="form-control" type="text" name="address" id="address" placeholder=" Enter address" required />
                                </div>
                                <div class="col-12">
                                    <label for="map" class="form-label">Map Link</label>
                                    <input class="form-control" type="text" name="map" id="map" placeholder="Enter map link" required />
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

