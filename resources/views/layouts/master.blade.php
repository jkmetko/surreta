<!DOCTYPE html>
<!--
Template Name: media-theme
Version: 1.00.0
-->
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)]><!-->
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html"><!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>Hotel SURETTA</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}"/>

    <!-- TWBS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reset.css') }}">

    <!-- FANCY BOX -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|EB+Garamont&amp;subset=latin,latin-ext" rel="stylesheet">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/newcss.css') }}">
    @yield('css')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body style="height: 100%">
</body>
    @include('sections.header-flexbox')
    @include('sections.slider')

    @yield('content')


    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery.3.1.1/jquery-3.1.1.min.js') }}"></script>

    <!-- TWBS -->
    <script src="{{ asset('assets/plugins/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/dropdown.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- FANCY BOX -->
    <script src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>

    <!-- CHOSEN -->
    <script src="{{ asset('assets/plugins/chosen/chosen.jquery.js') }}"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- YIELD JS -->
    @yield('js')
</html>