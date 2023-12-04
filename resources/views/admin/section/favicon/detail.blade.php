@extends('admin.master')

@section('title')
    Favicon Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Favicon Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Favicon </th>
                                    <td>
{{--                                        <img src="{{asset($favicons->image)}}" alt=" Logo" height="80" width="80">--}}
                                        <img src="{{asset($favicon->image)}}" alt="Logo" height="80" width="80">
                                    </td>
                                </tr>
                                <tr>
                                    <th> Title </th>
                                    <td>
                                        {{ $favicon->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('favicon.edit', $favicon->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
