<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="The Mpg"
          name="description"
        />
        <meta content="" name="The-Mpg" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{env_asset('assets/images/favicon.ico')}}" />
    
            <!-- choices css -->
            <link href="{{env_asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- alertifyjs Css -->
            <link href="{{env_asset('assets/libs/alertifyjs/build/css/alertify.min.css')}}" rel="stylesheet" type="text/css" />
    
            <!-- alertifyjs default themes  Css -->
            <link href="{{env_asset('assets/libs/alertifyjs/build/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" />
    
        <link rel="stylesheet" href="{{env_asset('assets/css/icons.css')}}" />
        <link rel="stylesheet" href="{{env_asset('assets/css/tailwind.css')}}" />
    
    </head>

    <body data-mode="dark" data-sidebar-size="lg">
        <!-- leftbar-tab-menu -->
        @include('adminLayout/nav')
        @include('adminLayout/left-sidebar')
        <div class="main-content">
            <!-- Page Content -->
            @yield('content')
            
        </div>

        <script src="{{env_asset('assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>
        <script src="{{env_asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{env_asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
        <script src="{{env_asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{env_asset('assets/libs/feather-icons/feather.min.js')}}"></script>
         <!-- choices js -->
        <script src="{{env_asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        <!-- alertifyjs js -->
        <script src="{{env_asset('assets/libs/alertifyjs/build/alertify.min.js')}}"></script>

        <!-- notification init -->
        <!-- <script src="assets/js/pages/notification.init.js"></script> -->
        
        <script src="{{env_asset('assets/js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

        
        @stack('script')
    </body>
</html>
