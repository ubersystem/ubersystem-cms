<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base src="{{ URL::asset('/') }}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <title>
        @section('title')
            @setting('core::site-name') | Admin
        @show
    </title>
    <meta id="token" name="token" value="{{ csrf_token() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include("admin.partials.header")

    @section("styles")
    @show

    @stack('css-stack')

</head>
<body class="class="{{ config('asgard.core.core.skin', 'skin-blue') }} hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    @include("admin.partials.navbar")
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include("admin.partials.sidebar")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">

            @include('admin.partials.notifications')
            @yield('content')

        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

    @include("admin.partials.content_footer")

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include("admin.partials.footer")

@section('scripts')
@show
@stack('js-stack')

</body>
</html>
