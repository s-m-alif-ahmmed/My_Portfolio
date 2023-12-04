@extends('admin.master')
@section('title')
    Edit Project Content
@endsection

@section('content')

    <section>

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Project</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Project Content</li>
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
                        <h5 class="mb-0">Edit Project Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <form class="row g-3" method="post" action="{{route('project.update', $project->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="image" class="form-label"> Project Image</label>
                                    <input type="file" class="form-control" name="image" id="image" />
                                    <img class="mt-2" src="{{asset($project->image)}}" alt=" image" width="80" height="60" />
                                </div>

                                <div class="col-12">
                                    <label for="link" class="form-label">Category Name</label>
                                    <select class="form-control" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{$category->id == $project->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="name" class="form-label"> Project Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" value="{{$project->name}}" required />
                                </div>
                                <div class="col-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" type="text" name="description" id="description" placeholder="Enter description" required >{{$project->description}}</textarea>
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

