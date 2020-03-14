@include('admin.layout.head')
<body>

<section id="container">
    <!--header start-->
    @include('admin.layout.header')
    <!--header end-->
    <!--sidebar start-->
    @include('admin.layout.navbar')
    <!--sidebar end-->
    <!--main content start-->
    @yield('content')
    <!--main content end-->

@include('admin.layout.footer')
