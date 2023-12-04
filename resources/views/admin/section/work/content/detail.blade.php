@extends('admin.master')

@section('title')
    Content Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Content Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Heading Title</th>
                                    <td>{{$content->heading}}</td>
                                </tr>
                                <tr>
                                    <th>Content Name</th>
                                    <td>{{$content->name}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$content->description}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('content.edit', $content->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('content.destroy', $content->id )}}" method="post" onclick="return confirm('Are you sure to delete this content content?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger border-0 mx-2" type="submit"><i class="bi bi-trash-fill"></i></button>
                                            </form>
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
