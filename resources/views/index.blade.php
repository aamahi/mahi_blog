@include('layout/head')

<body>

@include('layout/leftside')

<div class="main-wrapper">
    @include('layout.header')

    @yield('content')
    
   @include('layout.footer')

</div><!--//main-wrapper-->




<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
@include('layout.color')
{{--{{asset('Frontend/{{asset('Frontend/{{asset('Frontend/assets///')}}--}}

@include('layout.js')
