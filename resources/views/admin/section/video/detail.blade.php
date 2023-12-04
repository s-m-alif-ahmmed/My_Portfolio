@extends('admin.master')

@section('title')
    Video Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Video Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Image</th>
                                    <td>
                                        <img src="{{asset( $video->image )}}" alt=" Image" height="80" width="80">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Video Link</th>
                                    <td>{{$video->link}}</td>
                                </tr>
                                <tr>
                                    <th> Name</th>
                                    <td>{{$video->name}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$video->description}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('video.edit', $video->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
