@extends('admin.master')
@section('title')
    Blog Content
@endsection

@section('content')

    <section>

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Blog</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Blog Content</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

{{--        message--}}
        <p class="text-center text-muted">{{session('message')}}</p>

{{--        manage home content--}}
        <h6 class="mb-0 text-uppercase">Blog Contents</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Blog Name </th>
                            <th> Author Name </th>
                            <th> Blog Image </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$blog->name}}</td>
                            <td>{{$blog->author_name}}</td>
                            <td>
                                <img src="{{asset($blog->image)}}" alt=" Image" width="100" height="80">
                            </td>

                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{route('blog.show', $blog->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{route('blog.edit', $blog->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('blog.destroy', $blog->id )}}" method="post" onclick="return confirm('Are you sure to delete this blog content?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-danger border-0" type="submit"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

@endsection

