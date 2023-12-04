@extends('admin.master')

@section('title')
    Features Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Features Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Heading Title</th>
                                    <td>{{$feature_title->heading}}</td>
                                </tr>
                                <tr>
                                    <th>Features Name</th>
                                    <td>{{$feature_title->name}}</td>
                                </tr>
                                <tr>
                                    <th>Features Description</th>
                                    <td>{{$feature_title->main_description}}</td>
                                </tr>
                                <tr>
                                    <th>Features Image</th>
                                    <td>
                                        <img src="{{asset($feature_title->image)}}" alt="Category Image" height="100" width="100">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <a href="{{route('feature-title.edit', $feature_title->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
