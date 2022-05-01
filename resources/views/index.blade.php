<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shotokan Karate</title>
    <link rel="stylesheet" href="{{ asset('css/style-freedom.css') }}">
</head>

<body>
<script src="{{ asset('js/ajax/libs/jquery/1.10.2/jquery.min.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-149859901-1');
</script>

<meta name="robots" content="noindex">
<body>
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</div>


<!-- header -->
<div class="headers-9">
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
                                <li><a href="index-2.html" class="link-nav">Home</a></li>
                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                                                                            aria-hidden="true"></span></label>
                                    <a href="#pages" class="link-nav dropdown-toggle">About <span
                                            class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="first-dropdwon">
                                        <li><a href="about.html">Dojo</a></li>
                                        <li><a href="about.html">Chief Instructor </a></li>
                                        <li><a href="services.html">Black Belts</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html" class="link-nav">Kobudo</a></li>
                                <li><a href="gallery.html" class="link-nav">Branches</a></li>
                                <li><a href="gallery.html" class="link-nav">Event & News</a></li>
                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                                                                            aria-hidden="true"></span></label>
                                    <a href="#pages" class="link-nav dropdown-toggle">Gallert <span
                                            class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="first-dropdwon">
                                        <li><a href="about.html">Photos</a></li>
                                        <li><a href="about.html">Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html" class="link-nav">Contact</a></li>
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
<!-- hero-header 11 -->
<section class="hero-headers-11">
    <div class="hero-header-11">
        <div class="hero-header-11-content">
            <!-- banner -->
            <div id="homepage-slider" class="st-slider">
                <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
                <input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
                <input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
                <input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
                <div class="images">
                    <div class="images-inner">
                        <div class="image-slide">
                            <div class="banner-1">

                            </div>
                        </div>
                        <div class="image-slide">
                            <div class="banner-2">

                            </div>
                        </div>
                        <div class="image-slide">
                            <div class="banner-3">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="labels">
                    <div class="fake-radio">
                        <label for="slide1" class="radio-btn"></label>
                        <label for="slide2" class="radio-btn"></label>
                        <label for="slide3" class="radio-btn"></label>
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </div>
</section>
<!-- //hero-header 11 -->
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<!-- text-6 -->
<section class="text-6" id="about">
    <div class="text-6-mian">
        <div class="wrapper">
            <div class="d-grid top-cont-grid">
                <div class="left-img">
                    <img src="images/about.jpg" alt="" class="img-responsive img-fluid" />
                </div>
                <div class="text-6-info">
                    <h6>Shotokan Karate</h6>
                    <h2>Dojo</h2>
                    <p>Shotokan Karatedo Federation India is approved by Karata Association of India (Governing Body of Karate in India). Sensei Yogendra Sharma is the Chief Instructor and Technical Director of S.K.F. India.</p>

                    <p>He is learning and training Karate since 1980. The Headquarter of S.K.F. India is situated in Baroda, Gujarat, India. It discover training in Traditional Shotokan Karate, Okinawan Kobudo & Self Defence.</p>
                    <a href="about.html" class="btn button-eff"> Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //text-6 -->
<!-- features -->
<section class="feature-9">
    <div class="main-w3">
        <div class="wrapper">
            <h3 class="title-main">Our Offers</h3>
            <div class="d-grid main-cont-wthree-fea">
                <div class="grids-feature">
                    <div class="icon-bg">
                        <img src="images/judo.png" alt="karate" width="32" height="45" style="padding-top: 17px">
                    </div>
                    <h4><a href="services.html" class="title-head">Traditional  Karate</a></h4>
                    <p>Traditional karate is the original karate. It came into existence as a fighting art in Okinawa, Japan. The original karate has its roots in 'Tode', a weaponless self-defence system.</p>
                </div>
                <div class="grids-feature">
                    <div class="icon-bg">
                        <img src="images/karate.png" alt="karate" width="32" height="45" style="padding-top: 17px">
                    </div>
                    <h4><a href="services.html" class="title-head">Kumite</a></h4>
                    <p>Kumite is one of the three main sections of karate training, along with kata and kihon. Kumite is the part of karate in which a person trains against an adversary.</p>
                </div>
                <div class="grids-feature">
                    <div class="icon-bg">
                        <img src="images/weapon.png" alt="karate" width="32" height="45" style="padding-top: 17px">
                    </div>
                    <h4><a href="services.html" class="title-head">Kobudo</a></h4>
                    <p>Kobudo is a collective term for Japanese traditional techniques for the use of armour, blades, firearms, and techniques related to combat</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features -->
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<!-- team section -->
<section class="new-team-main" id="team">
    <div class="sub-team sec-padding">
        <div class="wrapper">
            <h3 class="title-main">Our Team Members</h3>
            <div class="d-grid main-sec">
                <div class="single-team">
                    <a href="team-single.html">
                        <img src="images/team1.jpg" class="img-fluid img-responsive" alt="">
                        <div class="team-hover">
                            <h4>Prashant Rajput</h4>
                            <span>Black Belt</span>
                        </div>
                    </a>
                </div><div class="single-team">
                    <a href="team-single.html">
                        <img src="images/team2.jpg" class="img-fluid img-responsive" alt="">
                        <div class="team-hover">
                            <h4>Yogendra Sharma</h4>
                            <span>Black Belt</span>
                        </div>
                    </a>
                </div><div class="single-team">
                    <a href="team-single.html">
                        <img src="images/team3.jpg" class="img-fluid img-responsive" alt="">
                        <div class="team-hover">
                            <h4>Ajay Patel</h4>
                            <span>Black Belt</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="bottom-content-team">
                <p class="para-index"></p>
                <a href="team.html" class="btn button-eff button-eff-2">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- //team section -->
<!-- form-12 -->
<section class="form-12-main" id="help">
    <div class="form-12-content">
        <div class="wrapper">
            <div class="grid-column-2">
                <div class="column1">
                    <h5 class="form-para">Do You Need Help?</h5>
                    <p class="tagline">Contact us and we help you to solve any of your problem.</p>
                    <form action="https://demo.ayouts.com/" method="Get">
                        <div class="">
                            <input type="text" name="name" class="form-input" placeholder="Your Name" required />
                        </div>
                        <div class="">
                            <input type="email" name="email" class="form-input" placeholder="Email Address"
                                   required />
                        </div>
                        <div class="">
                                <textarea name="message" class="form-input" placeholder="Your Massage.."
                                          required></textarea>
                        </div>
                        <button type="submit" class="btn button-eff">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //form-12 -->
<div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">
    <!---728x90--->

</div>
<!-- grids block 5 -->
<div class="grids-block-5" id="blog">
    <section id="grids5-block">
        <div class="wrapper">
            <h3 class="title-main">Our Fresh Blog Posts</h3>
            <div class="d-grid">
                <div class="grids5-info">
                    <a href="blog-single.html"><img src="image/index-blog1.jpg" alt=""
                                                    class="img-fluid img-responsive" /></a>
                    <div class="blog-info">
                        <h4><a href="blog-single.html">Blog 1</a></h4>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est
                            suscipit et dolor amet.</p>
                        <ul class="blog-list">
                            <li>
                                <p><span class="fa fa-calendar"></span> Sep 2019</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grids5-info">
                    <a href="blog-single.html"><img src="image/index-blog2.jpg" alt=""
                                                    class="img-fluid img-responsive" /></a>
                    <div class="blog-info">
                        <h4><a href="blog-single.html">Blog 2</a></h4>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est
                            suscipit et dolor amet.</p>
                        <ul class="blog-list">
                            <li>
                                <p><span class="fa fa-calendar"></span> Sep 2019</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grids5-info">
                    <a href="blog-single.html"><img src="image/index-blog3.jpg" alt=""
                                                    class="img-fluid img-responsive" /></a>
                    <div class="blog-info">
                        <h4><a href="blog-single.html">Blog 3</a></h4>
                        <p>Fusce rutrum quam a ultrices rhoncus. Nulla eu ipsum tempus est et vitae nulla empus est
                            suscipit et dolor amet.</p>
                        <ul class="blog-list">
                            <li>
                                <p><span class="fa fa-calendar"></span> Sep 2019</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- //grids block 5 -->
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
<!-- //footer 14 -->
</body>
</html>
