<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
</head>

<body>
<script src="{{ asset('js/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>

<meta name="robots" content="noindex">
<body>
<!-- Demo bar start -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<!-- New toolbar-->
<style>
    * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }


    #w3lDemoBar.demo-bar {
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        padding: 40px 5px;
        padding-top:70px;
        margin-bottom: 70px;
        background: #0D1326;
        border-top-left-radius: 9px;
        border-bottom-left-radius: 9px;
    }

    #w3lDemoBar.demo-bar a {
        display: block;
        color: #e6ebff;
        text-decoration: none;
        line-height: 24px;
        opacity: .6;
        margin-bottom: 20px;
        text-align: center;
    }

    #DemoBar.demo-bar span.icon {
        display: block;
    }

    #DemoBar.demo-bar a:hover {
        opacity: 1;
    }

    #DemoBar.demo-bar .icon svg {
        color: #e6ebff;
    }
    #DemoBar.demo-bar .responsive-icons {
        margin-top: 30px;
        border-top: 1px solid #41414d;
        padding-top: 40px;
    }
    #DemoBar.demo-bar .demo-btns {
        border-top: 1px solid #41414d;
        padding-top: 30px;
    }
    #DemoBar.demo-bar .responsive-icons a span.fa {
        font-size: 26px;
    }
    #DemoBar.demo-bar .no-margin-bottom{
        margin-bottom:0;
    }
    .toggle-right-sidebar span {
        background: #0D1326;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: #e6ebff;
        border-radius: 50px;
        font-size: 26px;
        cursor: pointer;
        opacity: .5;
    }
    .pull-right {
        float: right;
        position: fixed;
        right: 0px;
        top: 70px;
        width: 90px;
        z-index: 99999;
        text-align: center;
    }
    /* ============================================================
    RIGHT SIDEBAR SECTION
    ============================================================ */

    #right-sidebar {
        width: 90px;
        position: fixed;
        height: 100%;
        z-index: 1000;
        right: 0px;
        top: 0;
        margin-top: 60px;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        overflow-y: auto;
    }

    /* ============================================================
    RIGHT SIDEBAR TOGGLE SECTION
    ============================================================ */

    .hide-right-bar-notifications {
        margin-right: -300px !important;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }



    @media (max-width: 992px) {
        #DemoBar.demo-bar a.desktop-mode{
            display: none;

        }
    }
    @media (max-width: 767px) {
        #DemoBar.demo-bar a.tablet-mode{
            display: none;

        }
    }
    @media (max-width: 568px) {
        #DemoBar.demo-bar a.mobile-mode{
            display: none;
        }
        #DemoBar.demo-bar .responsive-icons {
            margin-top: 0px;
            border-top: none;
            padding-top: 0px;
        }
        #right-sidebar,.pull-right {
            width: 90px;
        }
        #DemoBar.demo-bar .no-margin-bottom-mobile{
            margin-bottom: 0;
        }
    }
</style>



<div class="error-main">
    <!-- error -->
    <div class="error">
        <div class="wrapper">
            <h1>
                <a href="{{ route('index') }}" class="logo-2">Shotokan Karate</a>
                <!-- if logo is image enable this
                <a class="logo" href="index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
            </h1>
            <div id='error-page'>
                <div id='error-inner'>
                    <h2>The page you were looking for was moved or doesn't exit.</h2>
                    <div class="pesan-eror">404</div>
                    <p class="balik-home"><a href="index-2.html">Let's get you back</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- //error -->
</div>

</body>
</html>
