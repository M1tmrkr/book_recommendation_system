<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}
">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    @if(isset($_panel))
    <title>{{ $_panel }} | Book Recommendation System</title>
    @else
    <title>Book Recommendation System</title>
    @endif    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('assets/cms/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/cms/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/cms/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('assets/cms/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/cms/plugin/toastr-master/toastr.css') }}" rel="stylesheet" type="text/css" />
    <!-- THEME STYLES-->
    <link href="{{ asset('assets/cms/css/main.min.css')}}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <!-- dm_custolm css -->
    <link href="{{ asset('assets/cms/css/dm.css')}}" rel="stylesheet" />
    @yield('styles')
</head>

<body class="fixed-navbar has-animation">
    <div class="page-wrapper">