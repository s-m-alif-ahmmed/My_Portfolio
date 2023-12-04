@extends('admin.master')

@section('title')
    Dashboard
@endsection

@section('content')

    <section>

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Total Orders</p>
                                <h4 class="">8,542</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Total Views</p>
                                <h4 class="">12.5M</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Revenue</p>
                                <h4 class="">$64.5K</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Customers</p>
                                <h4 class="">25.8K</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Total Orders</p>
                                <h4 class="">8,542</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Total Views</p>
                                <h4 class="">12.5M</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Revenue</p>
                                <h4 class="">$64.5K</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                            <div class="w-50">
                                <p>Customers</p>
                                <h4 class="">25.8K</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end row-->


        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="my-3">Unseen Notifications</h6>
                        </div>
                        <div class="table-responsive mt-2">
                            <table id="example" class="table align-middle mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts->sortByDesc('created_at')->take(6) as $contact)
                                    @if($contact->status == 'unseen')
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                {{ $contact->name }}
                                            </td>
                                            <td>
                                                {{ $contact->email }}
                                            </td>
                                            <td>
                                                {{ $contact->subject }}
                                            </td>
                                            <td>
                                                {{date('d-m-y')}}
                                            </td>
                                            <td>
                                                @if($contact->status == 'seen')
                                                    <a href="{{route('change.status', $contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Seen</a>
                                                @elseif($contact->status == 'unseen')
                                                    <a href="{{route('change.status', $contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">Unseen</a>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">
                                                    <a href="{{route('contact.show', $contact->id)}}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                                    <form action="{{ route('contact.destroy', $contact->id )}}" method="post" onclick="return confirm('Are you sure to delete this contact message?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="text-danger border-0" type="submit"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end row-->
    </section>

@endsection
