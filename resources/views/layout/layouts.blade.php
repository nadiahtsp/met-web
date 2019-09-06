<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--
Tinker Template
http://www.templatemo.com/tm-506-tinker
-->
    <title>@yield('title')</title>
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
                    <a href="{{url('/')}}" class="navbar-brand">
                        <img src="{{asset('assets/logo/logo_ET.png')}}" style="width:80px; height:80px;" alt="">
                    </a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="#" class="nav-link 
                        scroll-top">Home</a></li> -->
                        <li><a href="{{url('about')}}" class="nav-link  ">About Us</a></li>
                        <li><a href="{{url('portfolio')}}" class="nav-link ">Portfolio</a></li>
                        <li><a href="{{url('service')}}" class="nav-link  ">Services</a></li>
                        <li><a href="{{url('carrer')}}" class="nav-link ">Carrers</a></li>
                        <li><a href="{{url('blog')}}" class="nav-link ">Blog</a></li>
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

    @yield('content')

    @yield('footer')

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