@extends('admin.master')

@section('title')
    Contact Address Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-address fs-3 fw-bold">Contact Address Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{$address->number}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$address->email}}</td>
                                </tr>
                                <tr>
                                    <th>Support Email</th>
                                    <td>{{$address->support_email}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$address->address}}</td>
                                </tr>
                                <tr>
                                    <th>Map Link</th>
                                    <td>
                                        <div class="col-map">
                                            {{$address->map}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('address.edit', $address->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
