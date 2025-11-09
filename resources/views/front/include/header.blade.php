<header>
    <nav class="navbar navbar-top-default navbar-expand-lg static-nav black nav-radius transparent-bg bottom-nav box-nav not-full no-animation">
        <div class="container radius nav-box-shadow">
            <a class="logo link" href="javascript:void(0)">
                <img src="{{asset($logo->image ?? '')}}" alt="S M Alif Ahmmed" title="S M Alif Ahmmed">
            </a>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"> <a href="#home" class="scroll nav-link link">home</a>
                    </li>
                    <li class="nav-item"> <a href="#features" class="scroll nav-link link">features</a>
                    </li>
                    <li class="nav-item"> <a href="#work" class="scroll nav-link link">work</a>
                    </li>
                    <li class="nav-item"> <a href="#pricing" class="scroll nav-link link">pricing</a>
                    </li>
                    <li class="nav-item"> <a href="#clients" class="scroll nav-link link">clients</a>
                    </li>
                    <li class="nav-item"> <a href="#blog" class="scroll nav-link link">blog</a>
                    </li>
                    <li class="nav-item"> <a href="#contact" class="scroll nav-link link">contact</a>
                    </li>
                </ul>
            </div>

            <!-- side menu open button -->
            <a class="menu_bars d-inline-block menu-bars-setting menu-inner" id="sidemenu_toggle">
                <div class="menu-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </nav>

    <!-- Side Menu -->
    <div class="side-menu">
        <div class="inner-wrapper nav-icon">
            <span class="btn-close link" id="btn_sideNavClose"></span>
            <nav class="side-nav w-100">
                <div class="navbar-nav">
                    <a class="nav-link link scroll active" href="#home">Home</a>
                    <a class="nav-link link scroll" href="#features">Features</a>
                    <a class="nav-link link scroll" href="#work">Work</a>
                    <a class="nav-link link scroll" href="#pricing">Pricing</a>
                    <a class="nav-link link scroll" href="#clients">Clients</a>
                    <a class="nav-link link scroll" href="#blog">Blog</a>
                    <a class="nav-link link scroll" href="#contact">Contact</a>
                    <span class="menu-line"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </div>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    @foreach($links as $link)
                    <li class="side-menu-icons">
                        <a href="{{$link->link}}" target="_blank">
                            {!! $link->icon !!}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @if($copyright)
                    @if($copyright->status == 'show')
                        <p class="text-white">&copy; 2023 Qbit tech. Made With Love by S M Alif Ahmmed. </p>
                    @else
                    @endif
                @else
                @endif
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!--Side Menu-->
</header>
