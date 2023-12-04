@extends('admin.master')

@section('title')
    Add Heading Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Heading</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Heading Content</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

{{--        message--}}
        <p class="text-center text-primary">{{session('message')}}</p>

        <!-- Create Heading Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">Add New Heading Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('option.store')}}">
                                @csrf
                                @method('post')

                                <div class="col-12">
                                    <label for="heading" class="form-label"> Pricing Plan </label>
                                    <select class="form-control" name="pricing_id" required>
                                        <option value="">Select Plan</option>
                                        @foreach($pricings as $pricing)
                                            <option value="{{ $pricing->id }}" {{$pricing->option_id == $pricing->id ? 'selected' : ''}}>{{ $pricing->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="option_name" class="form-label"> Plan Option Name </label>
                                    <input class="form-control" type="text" name="option_name" id="option_name" placeholder=" Enter plan option name " required />
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

