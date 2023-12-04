@extends('admin.master')

@section('title')
    Contact Message Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Contact Message Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Name </th>
                                    <td> {{$contact->name}} </td>
                                </tr>
                                <tr>
                                    <th> Email </th>
                                    <td> {{$contact->email}} </td>
                                </tr>
                                <tr>
                                    <th> Contact Number </th>
                                    <td> {{$contact->number}} </td>
                                </tr>
                                <tr>
                                    <th> Subject </th>
                                    <td> {{$contact->subject}} </td>
                                </tr>
                                <tr>
                                    <th> Message </th>
                                    <td> {{$contact->message}} </td>
                                </tr>
                                <tr>
                                    <th> Status </th>
                                    <td>
                                        @if($contact->status == 'seen')
                                            <a href="{{route('change.status', $contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Seen</a>
                                        @elseif($contact->status == 'unseen')
                                            <a href="{{route('change.status', $contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">Unseen</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('contact.destroy', $contact->id )}}" method="post" onclick="return confirm('Are you sure to delete this contact message?')">
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
