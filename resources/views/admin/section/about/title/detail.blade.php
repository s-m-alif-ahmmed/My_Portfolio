@extends('admin.master')

@section('title')
    About Title Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">About Title Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>About Title Image</th>
                                    <td>
                                        <img src="{{asset( $about_title->image )}}" alt="About Title Image" height="80" width="80">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Heading Title</th>
                                    <td>{{$about_title->heading}}</td>
                                </tr>
                                <tr>
                                    <th>About Title Name</th>
                                    <td>{{$about_title->name}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$about_title->description}}</td>
                                </tr>

                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('about-title.edit', $about_title->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
