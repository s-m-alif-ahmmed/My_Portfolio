<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Author -->
    <meta name="author" content="S M Alif Ahmmed">

{{--    <!--google search console verification code-->--}}
{{--    <meta name="google-site-verification" content="NwHPvaGNwoIGMqOwfer1qjccNBcGWDApfbFSjWc96BY" />--}}

{{--    <!-- Google tag (gtag.js) -->--}}
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WDQYVQY9QR"></script>--}}
{{--    <script>--}}
{{--        window.dataLayer = window.dataLayer || [];--}}
{{--        function gtag(){dataLayer.push(arguments);}--}}
{{--        gtag('js', new Date());--}}

{{--        gtag('config', 'G-WDQYVQY9QR');--}}
{{--    </script>--}}

    <!-- description -->
    <meta name="description" content="Hello there! I am S M Alif Ahmmed. Thank you for visiting my profile. I am a professional PHP Laravel web developer. With a keen eye for detail and a passion for delivering high-quality results, I strive to exceed client expectations and ensure complete satisfaction. I am proficient in both front-end and back-end development. I have a strong command over HTML, CSS, Bootstrap, JavaScript, and jQuery to create engaging user interfaces. I have a deep understanding of the PHP programming language and its frameworks, with a primary focus on Laravel Framework and MySQL.">
    <!-- keywords -->
    <meta name="keywords" content="S M Alif Ahmmed, Creative, modern, clean, bootstrap responsive, bootstrap, bootstrap5, html, html5, css3, css, portfolio, blog, studio, templates, multipurpose, one page, multipage, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq, business, website, website design, website designer, web designer, web developer, website developer, develop, development, web design and development, website design and development, e-commerce, food app">


    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('/')}}admin/assets/images/favicon-32x32.png" type="image/png"/>

    <!--plugins-->
    <link href="{{asset('/')}}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/css/bootstrap-extended.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- loader-->
    <link href="{{asset('/')}}admin/assets/css/pace.min.css" rel="stylesheet"/>

    <!--Theme Styles-->
    <link href="{{asset('/')}}admin/assets/css/dark-theme.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/css/light-theme.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/css/semi-dark.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/css/header-colors.css" rel="stylesheet"/>



</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    @include('admin.include.header')
    <!--end top header-->

    <!--start sidebar -->
    @include('admin.include.sidebar')
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">

        @yield('content')

    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    @include('admin.include.switcher')
    <!--end switcher-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('/')}}admin/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('/')}}admin/assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('/')}}admin/assets/js/pace.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/table-datatable.js"></script>
<!--app-->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>
<script src="{{asset('/')}}admin/assets/js/index.js"></script>
<script>
    new PerfectScrollbar(".best-product")
</script>


</body>

</html>
