@extends('admin.master')
@section('title')
    Home Content
@endsection

@section('content')

    <section>

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Home</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Home Content</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

{{--        message--}}
        <p class="text-center text-muted">{{session('message')}}</p>

{{--        manage home content--}}
        <h6 class="mb-0 text-uppercase">Home Contents</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Photo</th>
                            <th>Full Name</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($homes as $home)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <img src="{{asset($home->home_profile_photo)}}" class="" width="44" height="44" alt="">
                                </div>
                            </td>
                            <td>{{$home->full_name}}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
{{--                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>--}}
                                    <a href="{{route('home.edit', $home->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="{{ route('home.destroy', $home->id )}}" method="post" onclick="return confirm('Are you sure to delete this home content?')">
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

