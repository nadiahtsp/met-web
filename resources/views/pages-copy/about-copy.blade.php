<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--
Tinker Template
http://www.templatemo.com/tm-506-tinker
-->
    <title>About Us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="apple-touch-icon" href="{{asset('assets/apple-touch-icon.png')}} ">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/fontAwesome.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/hero-slider.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-style.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}} ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand">
                        <img src="{{asset('assets/logo/logo_ET.png')}}" style="width:80px; height:80px;" alt="">


                    </a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="about" class="nav-link  ">About Us</a></li>
                        <li><a href="portfolio" class="nav-link ">Portfolio</a></li>
                        <li><a href="service" class="nav-link  ">Services</a></li>
                        <li><a href="carrer" class="nav-link ">Carrers</a></li>
                        <li><a href="blog" class="nav-link ">Blog</a></li>
                        <!-- <li>
                            <div id="mySidenav" class="sidenav" style="right:0">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times;</a>
                                <a href="/">Home</a>
                                <a href="about">About Us</a>
                                <a href="carrers">Carrers</a>
                                <a href="portfolio">Our Works</a>
                                <a href="service">Service</a>
                                <a href="#">Blog</a>
                            </div>

                            <a>
                                <div style="margin-top:24px; cursor:pointer" class="burger-active" onclick="openNav()">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                            </a>

                        </li> -->
                    </ul>


                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    <div class="parallax-content-about baner-content-about" id="home">
        <div class="container">
            <div class="text-content">
                <h2><em style="font-size:60px">About Us </em>
                    <!-- <p>Fast with Technology, Fast with MET</p> -->
                    <!-- <div class="primary-white-button">
                        <a href="#" class="scroll-link" data-id="about">Let's Start</a>
                    </div> -->
            </div>
        </div>
    </div>

    </div>
    <div id="history" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>History</h2>
                        <p class="lead"> Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/img/about-bg.jpg') }}" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <section id="pilar" class="page-section">
                <div class="container">
                    <div class="row">
                        <h2>The 3 MET Pillars</h2>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="img/service_icon_01.png" alt="">
                                </div>
                                <h4>Smart Notifications</h4>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="img/service_icon_02.png" alt="">
                                </div>
                                <h4>Lovely Web Design</h4>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="img/service_icon_03.png" alt="">
                                </div>
                                <h4>Quick Support</h4>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="img/service_icon_04.png" alt="">
                                </div>
                                <h4>One-Click Setup</h4>

                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="img/service_icon_04.png" alt="">
                                </div>
                                <h4>One-Click Setup</h4>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </section>
            <section id="pilar" class="page-section">
                <div class="container">
                    <div class="row">
                        <h2>Our Client</h2>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="img/service_icon_01.png" alt="">
                                </div>
                                <h4>PEMKOT Depok</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contact Us</h4>
                        <div class="line-dec"></div>
                        <br>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="location" style="margin-right:20px">
                                    <h5>Location</h5>
                                    <br>
                                    <h6>Head Office</h6> <br>
                                    <p style="text-align:left;"> Jl. Suci Susukan Ciracas No.7, Rt9/Rw4, <br>kel.Sususkan, Kec.Ciracas, <br>Jakarta Timur 13750</p>
                                    <hr>

                                    <h6> Branch Office </h6><br>
                                    <p style="text-align:left;">Perumahan Taman Permata kav.8 Jl.H.Jeruk no.8<br> Kel. Rambutan, Kec.Ciracas,<br> Jakarta Timur 13830
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">

                                <div id="map" style="padding:20px;margin-top:10px;margin-left:10px">
                                    <!-- How to change your own map point
                                                    1. Go to Google Maps
                                                    2. Click on your location point
                                                    3. Click "Share" and choose "Embed map" tab
                                                    4. Copy only URL and paste it within the src="" field below
                                                -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7895.485196115994!2d103.85995441789784!3d1.2880401763270322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb4e58ad9cd826e!2sSingapore+Flyer!5e0!3m2!1sen!2sth!4v1505825620371" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="connect-us">
                                    <h5>Get Social with us</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="pop-button">
                            <h4>Send us a message</h4>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="pop">
                        <span>✖</span>
                        <form id="contact" action="#" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <footer style="padding-top:10px !important;padding-bottom:30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="logo">
                        <p>Copyright &copy; PT.MET
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    window.jQuery || document.write('<script src="{{asset('
            assets / js / vendor / jquery - 1.11 .2.min.js "><\/')}}script>')
</script>

<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event) {
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function(event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed) {
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({
            scrollTop: targetOffset
        }, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() {}
        };
    }
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.backgroundColor = "rgba(0.4,0,0,0)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "white";
    }
</script>