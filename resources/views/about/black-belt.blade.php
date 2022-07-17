<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shotokan Karate</title>
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
</head>

<body>
<script src="{{ asset('js/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>

<meta name="robots" content="noindex">
<body>
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</div>
<style>
    * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }


    #DemoBar.demo-bar {
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

    #DemoBar.demo-bar a {
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


<!-- header -->
<div class="headers-9">
    <header>
        <div class="wrapper">
            <header>
                <div class="wrapper">
                    <div class="header">
                        <div class="right-img-9">
                            <a href="{{route('index')}}" class="logo">Shotokan Karate</a>
                            <!-- if logo is image enable this
                  <a class="logo" href="index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                  </a> -->
                        </div>
                        <div class="bottom-menu-content">
                            <input type="checkbox" id="nav" />
                            <label for="nav" class="menu-bar"></label>
                            <nav>
                                <div class="wrapper">
                                    <ul class="menu">
                                        <li><a href="{{route('index')}}" class="link-nav">Home</a></li>
                                        <li>
                                            <!-- First Tier Drop Down -->
                                            <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                                                                                    aria-hidden="true"></span></label>
                                            <a href="#pages" class="link-nav dropdown-toggle">About <span
                                                    class="fa fa-angle-down" aria-hidden="true"></span></a>
                                            <input type="checkbox" id="drop-2" />
                                            <ul class="first-dropdwon">
                                                <li><a href="{{route('dojo')}}">Dojo</a></li>
                                                <li><a href="{{route('chief-instructor')}}">Chief Instructor </a></li>
                                                <li><a href="{{route('black-belt')}}">Black Belts</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('kobudo')}}" class="link-nav">Kobudo</a></li>
                                        <li><a href="{{route('branch')}}" class="link-nav">Branches</a></li>
                                        <li><a href="{{route('event-news')}}" class="link-nav">Event & News</a></li>
                                        <li>
                                            <!-- First Tier Drop Down -->
                                            <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                                                                                    aria-hidden="true"></span></label>
                                            <a href="#pages" class="link-nav dropdown-toggle">Gallery <span
                                                    class="fa fa-angle-down" aria-hidden="true"></span></a>
                                            <input type="checkbox" id="drop-2" />
                                            <ul class="first-dropdwon">
                                                <li><a href="{{route('photo')}}">Photos</a></li>
                                                <li><a href="{{route('video')}}">Videos</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('contact')}}" class="link-nav">Contact</a></li>
                                        <li class="nav-right-sty">
                                            <div class="social">
                                                <a href="#facebook"><span class="fa fa-facebook"
                                                                          aria-hidden="true"></span></a>
                                                <a href="#linkedin"><span class="fa fa-linkedin"
                                                                          aria-hidden="true"></span></a>
                                                <a href="#twitter"><span class="fa fa-twitter"
                                                                         aria-hidden="true"></span></a>
                                                <a href="#google"><span class="fa fa-google-plus"
                                                                        aria-hidden="true"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </header>
    <!-- //header -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script>
        $('#nav').change(function () {
            if ($('#nav').is(":checked")) {
                $('body').css('overflow', 'hidden');
            } else {
                $('body').css('overflow', 'auto');
            }
        });
    </script>
</div>
<!-- //inner banner -->
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<!-- ecommerce -->
<section class="products-1">
    <!-- products -->
    <div class="products1">
        <div class="wrapper">
            <div class="d-grid ecom-page">
                @foreach($blackbelt as $user)
                    @if($user->instructor == 'no')
                        <div class="column">
                            <img src="{{$user->image_url ? $user->image_url : asset('images/user-icon.png') }}" alt="" class="img-responsive image-fluid" />
                            <div class="top-prts">
                                <p>{{$user->full_name ? $user->full_name : 'N/A'}}</p>
                                <h4>{{$user->dan_list ? $user->dan_list->dan : 'N/A'}}</h4>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="pagination">
                <ul>
                    <li> <a href="#none" class="not-allowed" disabled>
                            <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li><a class="active" href="#page">1</a></li>
                    <li>
                        <a href="#page">2</a>
                    </li>
                    <li>
                        <a href="#page">3</a>
                    </li>
                    <li>
                        <a href="#page">4</a>
                    </li>
                    <li>
                        <a href="#page">5</a>
                    </li>
                    <li>
                        <a href="#page">6</a>
                    </li>
                    <li>
                        <a href="#page"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //products -->
</section>
<!-- //ecommerce -->
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<!-- footer 14 -->
<div class="footer-main">
    <div class="sub-footer-content">
        <footer class="footer-14">
            <div id="footers14-block">
                <div class="wrapper">
                    <div class="footers20-content">
                        <div class="d-grid grid-col-4 grids-content">
                            <div class="column">
                                <h4>Our Address</h4>
                                <p>Address</p>
                            </div>
                            <div class="column">
                                <h4>Call Us</h4>
                                <p><a href="tel:+44-000-888-999">+91 98765-43210</a></p>
                            </div>
                            <div class="column">
                                <h4>Mail Us</h4>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                            <div class="column">
                                <h4>Catch On</h4>
                                <ul>
                                    <li><a href="#facebook"><span class="fa fa-facebook"
                                                                  aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fa fa-linkedin"
                                                                  aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fa fa-twitter"
                                                                 aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fa fa-google-plus"
                                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                &uarr;
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->

        </footer>
        <!-- Footers-14 -->
    </div>
</div>

</div>
</body>
</html>
