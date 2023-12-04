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
                                    <th>Features Description</th>
                                    <td>{{$feature->icon}}</td>
                                </tr>
                                <tr>
                                    <th>First Features Name</th>
                                    <td>{{$feature->feature}}</td>
                                </tr>
                                <tr>
                                    <th>First Features Description</th>
                                    <td>{{$feature->description}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <a href="{{route('feature.edit', $feature->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <form action="{{ route('feature.destroy', $feature->id )}}" method="post" onclick="return confirm('Are you sure to delete this feature content?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-danger border-0" type="submit"><i class="bi bi-trash-fill"></i></button>
                                        </form>
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






