@extends('admin.master')

@section('title')
    Blog Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Blog Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Blog Image </th>
                                    <td>
                                        <img src="{{asset( $blog->image )}}" alt=" Image" height="80" width="80">
                                    </td>
                                </tr>
                                <tr>
                                    <th> Author Name</th>
                                    <td>{{$blog->author_name}}</td>
                                </tr>
                                <tr>
                                    <th> Blog Name </th>
                                    <td>{{$blog->name}}</td>
                                </tr>
                                <tr>
                                    <th> Description </th>
                                    <td>{{$blog->description}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('blog.edit', $blog->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('blog.destroy', $blog->id )}}" method="post" onclick="return confirm('Are you sure to delete this blog content?')">
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
