@extends('admin.master')
@section('title')
    Option
@endsection

@section('content')

    <section>

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Option</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Option Content</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

{{--        message--}}
        <p class="text-center text-muted">{{session('message')}}</p>

{{--        manage option--}}
        <h6 class="mb-0 text-uppercase"> Option Contents</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Plan Name </th>
                            <th> Option Name </th>
                            <th> Option Status </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($options as $option)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$option->pricing->name}}</td>
                            <td>{{$option->option_name}}</td>
                            <td>
                                @if($option->status == 'on')
                                    <a href="{{route('option.status', $option->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">On</a>
                                @elseif($option->status == 'off')
                                    <a href="{{route('option.status', $option->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">Off</a>
                                @endif
                            </td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{route('option.show', $option->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="{{route('option.edit', $option->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('option.destroy', $option->id )}}" method="post" onclick="return confirm('Are you sure to delete this option content?')">
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

