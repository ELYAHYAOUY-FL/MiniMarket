<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSRF TOKEN-->
    <meta name="csrf-token content" content="{{ csrf_token() }}">
    <title>{{ config('app.name' , 'laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   
    <link href="{{ asset('admin/css/material-dashboard.css) }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    @include('layouts.inc.sidebar')

    <div class="main-panel">
        @include('layouts.inc.adminnav')

        <div class="content">
            @yield('content')
        </div>
        @include('layouts.inc.adminfooter')
    </div>
</div>

    <!--SCRIPT-->

    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
 
    @yield('scripts')
</body>
</html>