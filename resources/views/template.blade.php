<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<body>

@include('layouts.header')
@include('layouts.mainmenu')


    @yield('content')

@include('layouts.footer')

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>

<!-- jQuery easing -->
<script type="text/javascript" src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>

<!-- Main Script -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<!-- Slider -->
<script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.slider.js')}}"></script>

{{--<script src={{url("../../../js/jquery.js")}}></script>--}}
{{--<script src={{asset("js/jquery.js")}}></script>--}}
@yield('script')
</body>
</html>
