<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--
Tinker Template
http://www.templatemo.com/tm-506-tinker
-->
    <title>PT.MET</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{asset('assets/apple-touch-icon.png')}} ">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/fontAwesome.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/hero-slider.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-style.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/burger.css')}} ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
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
                        <!-- <li><a href="#" class="nav-link 
                        scroll-top">Home</a></li> -->
                        <li><a href="about" class="nav-link  ">About Us</a></li>
                        <li><a href="portfolio" class="nav-link ">Portfolio</a></li>
                        <li><a href="service" class="nav-link  ">Services</a></li>
                        <li><a href="carrer" class="nav-link ">Carrers</a></li>
                        <li><a href="blog" class="nav-link ">Blog</a></li>
                        <!-- <li>
                            <div class="dropdown">
                                <button class="dropbtn" onclick="funDropdown()">Dropdown
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content" id="myDropdown">
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div>
                        </li> -->
                        <!-- <li>
                            <div id="mySidenav" class="sidenav" style="right:0">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times;</a>
                                <a href="/">Home</a>
                                <a href="about">About Us</a>
                                <a href="carrers">Carrers</a>
                                <a href="portfolio">Portfolio</a>
                                <a href="service">Service</a>
                                <a href="#">Blog</a>
                                <div class="logo">
                                    <p>Copyright &copy; PT.MET
                                    </p>
                                </div>
                            </div>
                            <a>
                                <div style="margin-top:24px; cursor:pointer" class="burger-active" onclick="openNav()">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                            </a> -->
                        <!-- 
                            <div class="sidebar">
                                <button class="side" onclick="openNav()">&#9776;
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> -->
                        </li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->
    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="text-content">
                <h2><em>Fast with Technology, </em> <span>Fast with MET</span></h2>
                <div class="primary-white-button">
                    <a href="#" class="scroll-link" data-id="history">Let's Start</a>
                </div>
            </div>
        </div>
    </div>


    <div id="history" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>We Are MET</h2>
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
                <hr class="hr1">
            </div><!-- end row -->

        </div><!-- end container -->
    </div><!-- end section -->

    <div id="portfolio1" class="section wb">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="heading">
                        <h3><span>Our Works</span></h3>
                    </div>
                    <div class="sub-heading">
                        <p>
                            We have a history of doing what our name implies, creating a visual language around the beliefs of the brands we work with.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="hovereffect">
                                <img class="img-responsive" src="{{ asset('assets/img/portfolio.jpg') }}" alt="">
                                <div class="overlay">
                                    <h2>Hover effect 1</h2>
                                    <a class="info" href="#">link here</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="hovereffect">
                                <img class="img-responsive" src="{{ asset('assets/img/portfolio.jpg') }}" alt="">
                                <div class="overlay">
                                    <h2>Hover effect 1</h2>
                                    <a class="info" href="#">link here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="hovereffect">
                                <img class="img-responsive" src="{{ asset('assets/img/portfolio.jpg') }}" alt="">
                                <div class="overlay">
                                    <h2>Hover effect 1</h2>
                                    <a class="info" href="#">link here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="hovereffect">
                                <img class="img-responsive" src="{{ asset('assets/img/portfolio.jpg') }}" alt="">
                                <div class="overlay">
                                    <h2>Hover effect 1</h2>
                                    <a class="info" href="#">link here</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row" style="text-align:center;">
                <div class="col-md-12">

                    <a href="portfolio" class="portfol-button">See More</a>

                </div>
            </div>
        </div><!-- end row -->

    </div><!-- end container -->
    </div><!-- end section -->

    <!--service-->


    <div id="service" class="section wb">
        <div class="container">
            <!--services wrapper-->
            <section class="services-style-one">
                <div class="outer-box clearfix">
                    <div class="row">
                        <div class="heading">
                            <h3><span>Services</span></h3>
                        </div>
                        <div class="sub-heading">
                            <p>
                                We have a history of doing what our name implies, creating a visual language around the beliefs of the brands we work with.
                            </p>
                        </div>
                    </div>
                    <div class="services-column">
                        <div class="content-outer">
                            <div class="row clearfix">

                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <div class="inner-box">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                            </div>


                                            <div class="col-md-9 col-sm-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                                <h4>FINANCIAL PLANNING</h4>
                                                <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="row">
                                            <div class="icon-box col-md-3 col-sm-3 col-xs-3"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>


                                            <div class="col-md-9 col-md-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                                <h4>BUSINESS PLANNING</h4>
                                                <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <div class="inner-box">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                            </div>


                                            <div class="col-md-9 col-sm-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                                <h4>FINANCIAL PLANNING</h4>
                                                <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="row">
                                            <div class="icon-box col-md-3 col-sm-3 col-xs-3"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>


                                            <div class="col-md-9 col-md-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                                <h4>BUSINESS PLANNING</h4>
                                                <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <div class="inner-box">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                            </div>


                                            <div class="col-md-9 col-sm-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                                <h4>FINANCIAL PLANNING</h4>
                                                <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="row">
                                            <div class="icon-box col-md-3 col-sm-3 col-xs-3"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>


                                            <div class="col-md-9 col-md-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                                <h4>BUSINESS PLANNING</h4>
                                                <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="fa fa-trophy" aria-hidden="true"></i></div>
                                        <h4>WORK &amp; REDUNDANCY</h4>
                                        <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                        </div>
                                    </div>
                                </div>

                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                                        <h4>MORTGAGE ADVISOR</h4>
                                        <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                        </div>
                                    </div>
                                </div>

                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div>
                                        <h4>RETIREMENT PLANNING</h4>
                                        <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                        </div>
                                    </div>
                                </div>

                                <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="fa fa-money" aria-hidden="true"></i></div>
                                        <h4>SAVING AND INVESTING</h4>
                                        <div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews.
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>


    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Quisque ullamcorper odio a nisl lacinia dictum. Vestibulum malesuada ipsum in turpis finibus, ut sagittis erat scelerisque. Curabitur non risus fringilla libero accumsan molestie et quis justo. ”</p>
                                <h4>George Rich</h4>
                                <span>Web Designer</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Suspendisse magna mauris, convallis vel finibus eget, lobortis dictum neque. Nam tincidunt metus nec eros dignissim consectetur. ”</p>
                                <h4>John Henry</h4>
                                <span>New Manager</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Aenean semper aliquam est ut maximus. Fusce id diam eget orci lobortis ultricies at ac velit. Curabitur laoreet massa et fringilla sagittis. ”</p>
                                <h4>Danny Cute</h4>
                                <span>CEO Founder</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <p>“ Maecenas eu odio pharetra, elementum lorem eget, efficitur erat. Duis eget justo non nisi iaculis vestibulum. Aliquam erat volutpat. ”</p>
                                <h4>Richard Beal</h4>
                                <span>CSS Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="location">
                        <h4>Location</h4>
                        <ul>
                            <li>
                                <h6> Head Office</h6> <br>Jl. Suci Susukan Ciracas No.7, Rt9/Rw4, <br>kel.Sususkan, Kec.Ciracas, <br> Jakarta Timur 13750
                            </li>
                            <li>
                                <h6>Branch Office</h6> <br>Perumahan Taman Permata kav.8 Jl.H.Jeruk no.8 <br>Kel. Rambutan, Kec.Ciracas, <br>Jakarta Timur 13830
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="contact-info">
                        <h4>Contact</h4>
                        <ul>
                            <li><em>Phone</em>: 021-22094511
                                <br><em>Email</em>: met.id@outlook.com</li>
                        </ul>
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
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="logo">
                        <p>Copyright &copy; PT.MET
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <script>
        window.jQuery || document.write('<script src="{{asset('
                assets / js / vendor / jquery - 1.11 .2.min.js "><\/')}}script>')
    </script>


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
            document.getElementById("mySidenav").style.width = "100%";
            document.body.style.backgroundColor = "rgba(0.4,0,0,0)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
    <script>
        /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
        function funDropdown() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }
    </script>
</body>

</html>