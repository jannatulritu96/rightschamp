<!DOCTYPE html>
<html>
<head>
    @include('admin.layouts._head')
</head>
<body>
<div class="main-wrapper">
    <div class="header">
        @include('admin.layouts._header')
    </div>
    <div class="sidebar" id="sidebar">
        @include('admin.layouts._mainNav')
    </div>
    <div class="page-wrapper">
        <div class="content container-fluid">
            @include('admin.layouts._messages')
            @yield('content')
        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>
@include('admin.layouts._scripts')
@yield('scripts')

</body>
</html>