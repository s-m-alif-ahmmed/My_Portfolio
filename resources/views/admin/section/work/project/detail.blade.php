@extends('admin.master')

@section('title')
    Project Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Project Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Project Image</th>
                                    <td>
                                        <img src="{{asset( $project->image )}}" alt=" Image" height="80" width="80">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Category Name</th>
                                    <td>{{$project->category->name}}</td>
                                </tr>
                                <tr>
                                    <th> Project Name</th>
                                    <td>{{$project->name}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$project->description}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('project.edit', $project->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('project.destroy', $project->id )}}" method="post" onclick="return confirm('Are you sure to delete this project content?')">
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
