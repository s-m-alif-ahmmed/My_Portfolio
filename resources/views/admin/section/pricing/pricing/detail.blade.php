@extends('admin.master')

@section('title')
    Pricing Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Pricing Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Pricing Plan Name </th>
                                    <td> {{$pricing->name}} </td>
                                </tr>
                                <tr>
                                    <th> Pricing Plan Description </th>
                                    <td> {{$pricing->description}} </td>
                                </tr>
                                <tr>
                                    <th> Pricing Plan Money Symble </th>
                                    <td> {{$pricing->symble}} </td>
                                </tr>
                                <tr>
                                    <th> Pricing Plan Amount </th>
                                    <td> {{$pricing->amount}} </td>
                                </tr>
                                <tr>
                                    <th> Pricing Plan Monthly/Annual </th>
                                    <td> {{$pricing->month}} </td>
                                </tr>
                                <tr>
                                    <th> Button Name </th>
                                    <td> {{$pricing->button}} </td>
                                </tr>

                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('pricing.edit', $pricing->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <form action="{{ route('pricing.destroy', $pricing->id )}}" method="post" onclick="return confirm('Are you sure to delete this pricing content?')">
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
