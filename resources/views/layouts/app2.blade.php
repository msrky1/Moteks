<!DOCTYPE html>
<html lang="Tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="kumaş, penye, örgü, iplik, üretim, ihracat">
    <meta name="keyword" content="Markalar: 3M, çabasan, cabasan, balderma, balipek,Fabric,knitting,Knitted fabric,Sustainable,Recycle,Organik,Yarn,Cotton,Renewable,Wastemanagement,Recyceledwastagewater,Oekotex">

    <!--  Title -->
    <title>Moteks Tekstil</title>

    <!-- Font Google -->

    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{asset('assets')}}/img/logo-dark.png" type="image/x-icon">
    <link rel="preload" href="{{asset('assets')}}../../css2.css?family=Roboto:wght@400;500&family=Poppins:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="{{asset('assets')}}../../css2.css?family=Roboto:wght@400;500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>



    <link rel="preload" href="{{asset('assets')}}/img/circle-dotted.png" as="image">

    <!-- custom styles (optional) -->
    <link href="{{asset('assets')}}/css/plugins.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

</head>




<body class="v-dark dsn-line-style dsn-effect-scroll dsn-cursor-effect dsn-ajax">

    <!-- ========== Loading Page ========== -->
    <div class="preloader">
        <span class="percent ">0</span>
        <span class="loading-text text-uppercase">{{__('welcome')}}</span>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>

        <h1 class="title v-middle">
            <span class="text-strok">MOTEKS</span>
            <span class="text-fill">MOTEKS</span>
        </h1>

    </div>

        @include('layouts.menu')

        @yield('content')


        @include('layouts.footer2')




    <script src="{{asset('assets')}}/js/jquery-3.1.1.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins.min.js"></script>
    <script src="{{asset('assets')}}/js/dsn-grid.min.js"></script>
    <script src="{{asset('assets')}}/js/custom.js"></script>
</body>
