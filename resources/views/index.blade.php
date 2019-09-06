@extends('layout.layouts')

@section('title', 'PT MET')

@section('content')

<!-- Content -->
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
                    <p class="lead">Beginning in early 2019, MET started providing IT services. Our team is able to provide technology solutions with the best and trusted services for every partner..</p>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="{{asset('assets/img/about-bg.jpg')}}" alt="" class="img-responsive img-rounded">
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
                <!-- </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{asset('assets/img/portfolio.jpg') }}" alt="">
                            <div class="overlay">
                                <h2>Hover effect 1</h2>
                                <a class="info" href="#">link here</a>
                            </div>
                        </div>
                   </div> -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="work">
                            <div class="hovereffect">
                                <img class="img-responsive" src="{{asset('assets/img/works-sipp kling.png') }}" alt="">
                                <div class="overlay">
                                    <h2>SIPP-KLING</h2>
                                    <a class="info" href="https://www.depok.go.id/04/10/2018/01-berita-depok/aplikasi-sipp-kling-permudah-pendataan-kesehatan-lingkungan">link here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{asset('assets/img/portfolio.jpg') }}" alt="">
                            <div class="overlay">
                                <h2>Hover effect 1</h2>
                                <a class="info" href="#">link here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{asset('assets/img/portfolio.jpg') }}" alt="">
                            <div class="overlay">
                                <h2>Hover effect 1</h2>
                                <a class="info" href="#">link here</a>
                            </div>
                        </div>
                    </div>  -->
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

                            <div class="service-block col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <div class="inner-box">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                        </div>


                                        <div class="col-md-9 col-sm-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                            <h4>Software Development</h4>
                                            <div class="text">Develop native web and mobile applications
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-block col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <div class="row">
                                        <div class="icon-box col-md-3 col-sm-3 col-xs-3"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>


                                        <div class="col-md-9 col-md-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                            <h4>Project Services</h4>
                                            <div class="text">Providing our products that put forward the benefits for its users.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-block col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <div class="inner-box">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                        </div>


                                        <div class="col-md-9 col-sm-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                            <h4>Technology Consulting </h4>
                                            <div class="text">Providing consultations covering system analysis, network structure, network installation, and data processing.

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                            </div> -->


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
                            <h4>Ir. Syahria Hamid, MM., IAI</h4>
                            <span>Web Designer</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonials-item">
                            <p>“ Suspendisse magna mauris, convallis vel finibus eget, lobortis dictum neque. Nam tincidunt metus nec eros dignissim consectetur. ”</p>
                            <h4>Dr. Titin Hardiana</h4>
                            <span>New Manager</span>
                        </div>
                    </div>
                    <!-- <div class="item">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content -->
@stop

<!-- Footer -->
@section('footer')
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
@stop
<!-- End Footer -->