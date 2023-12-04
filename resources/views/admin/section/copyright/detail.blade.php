@extends('admin.master')

@section('title')
    Copyright Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Copyright Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Copyright Text </th>
                                    <td>
                                        {{ $copyright->copyright }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Copyright Status </th>
                                    <td>
                                        @if($copyright->status == 'show')
                                            <a href="{{route('copyright.status', $copyright->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Show</a>
                                        @elseif($copyright->status == 'hide')
                                            <a href="{{route('copyright.status', $copyright->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">Hide</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('copyright.edit', $copyright->id)}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
