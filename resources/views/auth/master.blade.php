<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" data-textdirection="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>{{ config('app.name', 'Laravel') }} @yield('title') </title>

  <link rel="apple-touch-icon" href=" app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/vendors.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/forms/icheck/custom.css">
<!-- END VENDOR CSS-->

<!-- BEGIN STACK CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/app.css">
<!-- END STACK CSS-->

<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/pages/login-register.css">
<!-- END Page Level CSS-->


@stack('css')

</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">





@yield('content')



  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('/')}}app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('/')}}app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{asset('/')}}app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="{{asset('/')}}app-assets/js/core/app.js" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('/')}}app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>

</body>
</html>
