@extends('layout.layouts')

@section('title', 'About Us')

@section('content')
<div class="parallax-content-about baner-content-about" id="home">
    <div class="container">
        <div class="text-content">
            <h2><em style="font-size:60px">About Us </em></h2>
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
                    <p class="lead"> Beginning in early 2019, MET started providing IT services. Our team is able to provide technology solutions with the best and trusted services for every partner.</p>

                    <p class="lead"> At present we are still focused on providing services in the health sector as well as support for maintenance to the integration of an enabling system. </p>
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
                    <h2 style="margin-bottom:30px;">Our Client</h2>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/logodepok.jpg') }}" style="width:15%" alt="">

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
@stop