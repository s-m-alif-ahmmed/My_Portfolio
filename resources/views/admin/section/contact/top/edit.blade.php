@extends('admin.master')
@section('title')
    Edit Message Top
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Message Top</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Message Top</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        {{--        message--}}
        <p class="text-center text-primary">{{session('message')}}</p>

        <!-- Create Message Top Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-top py-3 bg-transparent">
                        <h5 class="mb-0">Edit Message Top</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('top.update', $top->id)}}">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="heading" class="form-label">Heading Title</label>
                                    <input class="form-control" type="text" name="heading" id="heading" placeholder="Enter heading title" value="{{$top->heading}}" required />
                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label"> Message Top Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder=" Enter blog top name" value="{{$top->name}}" required />
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" type="text" name="description" id="description" placeholder="Enter company description" required >{{$top->description}}</textarea>
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

