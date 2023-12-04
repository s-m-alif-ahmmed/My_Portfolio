@extends('admin.master')
@section('title')
    Edit Achievement Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Achievement</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Achievement</li>
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
                        <h5 class="mb-0">Edit Achievement</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('achievement.update', $achievement->id )}}">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="icon" class="form-label">Achievement Icon </label>
                                    <textarea class="form-control" type="text" name="icon" id="icon" placeholder="Enter Achievement icon " required >{{ $achievement->icon }}</textarea>
                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label">Achievement Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter achievement name" value="{{ $achievement->name }}" required />
                                </div>
                                <div class="col-12">
                                    <label for="number" class="form-label">Count Number</label>
                                    <input class="form-control" type="number" name="number" id="number" placeholder="Enter count number" value="{{ $achievement->number }}" required />
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
