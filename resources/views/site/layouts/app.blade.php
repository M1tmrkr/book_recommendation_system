<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- tags -->
    <meta name="keywords" content="@yield('tags')">
    <!-- seo -->
    <meta name="description" content="@yield('seo')">
    <!-- social -->


    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;600;700;900&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('assets/site/images/softech logo/softech-foundation-logo.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>Test</title>
    <link rel="stylesheet" href="{{ asset('assets/site/css/card.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/style_top.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/theme_style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/themeup_style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/site/css/theme_responsive_style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/site/plugin/swiper/swiper-bundle.min.css')}}">

    <style type="text/css">
        div#toc_container ul li {
            font-size: 100%
        }

        html,

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 30rem;
            max-height: 30rem;
        }
    </style>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62b30129282de100195677eb&product=inline-share-buttons' async='async'></script>

    @yield('css')
</head>

<body data-rsssl=1 class="home blog wp-custom-logo hfeed">
   Comming Soon

</html>