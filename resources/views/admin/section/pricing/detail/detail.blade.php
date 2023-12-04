@extends('admin.master')

@section('title')
    Option Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Option Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Option Title</th>
                                    <td>{{$option->pricing->name}}</td>
                                </tr>
                                <tr>
                                    <th>Option Name</th>
                                    <td>{{$option->option_name}}</td>
                                </tr>
                                <tr>
                                    <th>Option Status</th>
                                    <td>
                                        @if($option->status == 'on')
                                            <a href="{{route('option.status', $option->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">On</a>
                                        @elseif($option->status == 'off')
                                            <a href="{{route('option.status', $option->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">Off</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('option.edit', $option->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('option.destroy', $option->id )}}" method="post" onclick="return confirm('Are you sure to delete this option content?')">
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
