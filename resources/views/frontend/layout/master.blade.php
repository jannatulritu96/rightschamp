<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout._head')
</head>
<body>
<div class="top-container">
    <!--=====top nav=====-->
    @include('frontend.layout._top_container')
    <!--=====top nav=====-->
</div>

<div class="header bg-as" id="myHeader">
    @include('frontend.layout._container')
</div>
<div class="content">
    @yield('contents')
</div>

<footer class="text-center font-small wow fadeIn pt-4" style="visibility: visible; animation-name: fadeIn;">
    @include('frontend.layout._footer')
</footer>
    @include('frontend.layout._script')
</body>
</html>