<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="S M Alif Ahmmed">
    <meta name="author" content="Alif Ahmmed">
    <meta name="author" content="Alif">

    <!-- description -->
    <meta name="description" content="Hello there! I am S M Alif Ahmmed. I am proficient in both front-end and back-end development. I have a strong command over HTML, CSS, Bootstrap, JavaScript, and jQuery to create engaging user interfaces. I have a deep understanding of the PHP programming language, Laravel Framework and MySQL.">

    <!-- keywords -->
    <meta name="keywords" content="S M Alif Ahmmed, Creative, modern, clean, bootstrap responsive, bootstrap, bootstrap5, html, html5, css3, css, portfolio, blog, studio, templates, multipurpose, one page, multipage, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq, business, website, website design, website designer, web designer, web developer, website developer, develop, development, web design and development, website design and development, e-commerce, food app">


    <!--google search console verification code-->
    <meta name="google-site-verification" content="NwHPvaGNwoIGMqOwfer1qjccNBcGWDApfbFSjWc96BY" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WDQYVQY9QR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-WDQYVQY9QR');
    </script>


    <!-- Page Title -->
    <title>@yield('title')</title>

    @include('front.include.css')

</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

<!-- Loader -->
<div class="loader" id="loader-fade">
    <div class="loader-container">
        <div class="circle"></div>
    </div>
</div>
<!-- Loader ends -->

<!-- Header start -->
@include('front.include.header')
<!-- Header end -->

@yield('content')

<!-- Footer starts -->
@include('front.include.footer')
<!-- Footer ends -->

<!--Animated Cursor-->
<div id="animated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

@include('front.include.js')


</body>
</html>



