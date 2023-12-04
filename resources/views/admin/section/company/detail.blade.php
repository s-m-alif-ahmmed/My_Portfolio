@extends('admin.master')

@section('title')
    Company Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Company Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Company Image</th>
                                    <td>
                                        <img src="{{asset( $company->image )}}" alt="Company Image" height="80" width="80">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Heading Title</th>
                                    <td>{{$company->heading}}</td>
                                </tr>
                                <tr>
                                    <th>Company Name</th>
                                    <td>{{$company->name}}</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>{{$company->description}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('company.edit', $company->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
