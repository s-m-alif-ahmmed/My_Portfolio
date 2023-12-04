<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
{{--            <img src="{{asset('/')}}admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">--}}
        </div>
        <div>
            <h4 class="logo-text">Onedash</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('dashboard')}}" class="">
                <div class="parent-icon">
                    <i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{route('home.index')}}" >
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Banner Section</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Setting Section</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('logo.index')}}"><i class="bi bi-circle"></i> logo Section </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-circle"></i>
                        </div>
                        <div class="menu-title">Features Section </div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('feature-title.index')}}"><i class="bi bi-circle"></i> Features Title Section </a>
                        </li>
                        <li>
                            <a href="{{route('feature.create')}}"><i class="bi bi-circle"></i>Add Features</a>
                        </li>
                        <li>
                            <a href="{{route('feature.index')}}"><i class="bi bi-circle"></i>Manage Features</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('favicon.index')}}"><i class="bi bi-circle"></i> Manage Favicon & Title </a>
                </li>
                <li>
                    <a href="{{route('copyright.index')}}"><i class="bi bi-circle"></i> Manage Copyright </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title"> Achievement Section </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('achievement-title.index')}}"><i class="bi bi-circle"></i> Achievement Title Section </a>
                </li>
                <li>
                    <a href="{{route('achievement.create')}}"><i class="bi bi-circle"></i>Add Achievement</a>
                </li>
                <li>
                    <a href="{{route('achievement.index')}}"><i class="bi bi-circle"></i>Manage Achievement</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">About Section</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('about-title.index')}}"><i class="bi bi-circle"></i> About Title Section </a>
                </li>
                <li>
                    <a href="{{route('about.create')}}"><i class="bi bi-circle"></i>Add About</a>
                </li>
                <li>
                    <a href="{{route('about.index')}}"><i class="bi bi-circle"></i>Manage About</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('company.index')}}" >
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title"> Company Section </div>
            </a>
        </li>
        <li>
            <a href="{{route('video.index')}}">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title"> Video Section </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title"> Brand Section </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('brand.create')}}"><i class="bi bi-circle"></i> Add Brand </a>
                </li>
                <li>
                    <a href="{{route('brand.index')}}"><i class="bi bi-circle"></i> Manage Brand </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Work Section</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Work Category</a>
                    <ul>
                        <li>
                            <a href="{{route('category.create')}}"><i class="bi bi-circle"></i>Add Work Category</a>
                        </li>
                        <li>
                            <a href="{{route('category.index')}}"><i class="bi bi-circle"></i>Manage Work Category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('content.index')}}"><i class="bi bi-circle"></i>Work Content Section</a>
                </li>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Work Project Section</a>
                    <ul>
                        <li>
                            <a href="{{route('project.create')}}"><i class="bi bi-circle"></i>Add Work Project</a>
                        </li>
                        <li>
                            <a href="{{route('project.index')}}"><i class="bi bi-circle"></i>Manage Work Project</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Pricing Section</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('heading.index')}}"><i class="bi bi-circle"></i> Pricing Content Section </a>
                </li>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i> Pricing Plan Section </a>
                    <ul>
                        <li>
                            <a href="{{route('pricing.create')}}"><i class="bi bi-circle"></i> Add Pricing Plan </a>
                        </li>
                        <li>
                            <a href="{{route('pricing.index')}}"><i class="bi bi-circle"></i> Manage Plans </a>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i> Plan Options Section</a>
                    <ul>
                        <li>
                            <a href="{{route('option.create')}}"><i class="bi bi-circle"></i> Add Plan Option </a>
                        </li>
                        <li>
                            <a href="{{route('option.index')}}"><i class="bi bi-circle"></i> Manage Plan Options </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Client Feedback Section</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('client.index')}}"><i class="bi bi-circle"></i>Client Title Section</a>
                </li>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Client Feedback Section</a>
                    <ul>
                        <li>
                            <a href="{{route('feedback.create')}}"><i class="bi bi-circle"></i>Add Feedback</a>
                        </li>
                        <li>
                            <a href="{{route('feedback.index')}}"><i class="bi bi-circle"></i>Manage Feedback</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Blogs Section</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('header.index')}}"><i class="bi bi-circle"></i>Blog Title Section</a>
                </li>
                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Blog Section</a>
                    <ul>
                        <li>
                            <a href="{{route('blog.create')}}"><i class="bi bi-circle"></i>Add Blog</a>
                        </li>
                        <li>
                            <a href="{{route('blog.index')}}"><i class="bi bi-circle"></i>Manage Blog</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title"> Contact Section </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('head.index')}}"><i class="bi bi-circle"></i> Contact Content </a>
                </li>
                <li>
                    <a href="{{route('address.index')}}"><i class="bi bi-circle"></i> Contact Address </a>
                </li>
                <li>
                    <a href="{{route('top.index')}}"><i class="bi bi-circle"></i> Message Content Section </a>
                </li>
                <li>
                    <a href="{{route('contact.index')}}"><i class="bi bi-circle"></i> Message Section</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title"> Links Section </div>
            </a>
            <ul>
                <li>
                    <a href="{{route('link.create')}}"><i class="bi bi-circle"></i> Add Link </a>
                </li>
                <li>
                    <a href="{{route('link.index')}}"><i class="bi bi-circle"></i> Manage Link </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</aside>
