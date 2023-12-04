<header class="top-header">
    <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
            <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-auto">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                    <a class="nav-link" href="#">
                        <div class="">
                            <i class="bi bi-search"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user-setting">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center">
                            <img src="{{asset(Auth::user()->photo)}}" class="user-img" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset(Auth::user()->photo)}}" alt="" class="rounded-circle" width="54" height="54">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">{{Auth::user()->name}}</h6>
{{--                                        <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>--}}
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{route('profile.edit')}}">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-gear-fill"></i></div>
                                    <div class="ms-3"><span>Setting</span></div>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit(); ">
                                <div class="d-flex align-items-center">
                                    <div class=""><i class="bi bi-lock-fill"></i></div>
                                    <div class="ms-3">
                                        <span>Logout</span>
                                    </div>
                                </div>
                            </a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="notifications">
                            <span class="notify-badge">800</span>
                            <i class="bi bi-bell-fill"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <div class="p-2 border-bottom m-2">
                            <h5 class="h5 mb-0">Notifications</h5>
                        </div>
                        <div class="header-notifications-list p-2">
                            @foreach($contacts->sortByDesc('created_at')->take(6) as $contact)
                                @if($contact->status == 'unseen')
                                <a class="dropdown-item" href="{{route('contact.show', $contact->id)}}">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">{{$contact->name}} <span class="msg-time float-end text-secondary">{{date('d-m')}}</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">{{$contact->subject}}</small>
                                        </div>
                                    </div>
                                </a>
                                @else
                                @endif
                            @endforeach
                        </div>
                        <div class="p-2">
                            <div><hr class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('contact.index')}}">
                                <div class="text-center">View All Notifications</div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

