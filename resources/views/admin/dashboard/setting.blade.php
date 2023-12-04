@extends('admin.master')

@section('title')

@endsection

@section('content')

    <section>
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3 text-white">Pages</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt text-white"></i></a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="profile-cover bg-dark"></div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">My Account</h5>
                        <hr>
                        <form class="" action="{{route('profile.update')}}" method="POST" >
                            @csrf
                            @method('patch')
                            <div class="card shadow-none border">
                                <div class="card-header">
                                    <h6 class="mb-0">USER INFORMATION</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label"> Name</label>
                                            <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-start">
                                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{route('password.update')}}" method="POST" >
                            @csrf
                            @method('put')
                            <div class="card shadow-none border">
                                <div class="card-header">
                                    <h6 class="mb-0">USER PASSWORD</h6>
                                </div>
                                <div class="card-body">
                                    <div>
                                        @if (session('status') === 'password-updated')
                                            <p
                                                x-data="{ show: true }"
                                                x-show="show"
                                                x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600"
                                            >{{ __('Password Update Successfully.') }}</p>
                                        @endif
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" name="current_password" class="form-control" />
                                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">New Password</label>
                                            <input type="password" name="password" class="form-control" />
                                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" />
                                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-start">
                                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="profile-avatar text-center my-4">
                        <img src="{{asset($user->photo)}}" class="rounded-circle shadow" width="120" height="120" alt="">
                    </div>
                    <p class="text-center text-muted my-2">{{session('message')}}</p>
                    <div class="card-header">
                        <h6 class="mb-0">USER PROFILE PHOTO</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('photo.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label"> Choose New Profile Photo</label>
                                    <input type="file" name="photo" class="form-control" />
                                </div>
                            </div>
                            <div class="text-start my-3">
                                <button type="submit" class="btn btn-primary px-4">Save Change</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-header">
                        <h6 class="mb-0">User Account Delete</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6" id="deleteProfile" >
                            @csrf
                            @method('delete')

                            <div class="col-6">
                                <label for="password" class="form-label"> Password</label>
                                <input id="password" type="password" name="password" class="form-control" />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>
                        </form>
                        <a href="" onclick="event.preventDefault(); document.getElementById('deleteProfile').submit(); ">
                            <div class="text-start my-3">
                                <button type="submit" class="btn btn-primary px-4" id="deleteProfile">Delete Account</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </section>

@endsection



