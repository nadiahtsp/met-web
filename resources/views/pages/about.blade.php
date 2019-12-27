@extends('layout.layouts')

@section('title', 'About Us')

@section('content')
<div class="parallax-content-about baner-content-about" id="home">
    <div class="container">
        <div class="text-content">
            <h2><em style="font-size:50px">About Us </em></h2>
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
                    <h2>{{$history[0]->title}}</h2>
                    <p class="lead"> {{$history[0]->content}}</p>

                    <!-- <p class="lead"> At present we are still focused on providing services in the health sector as well as support for maintenance to the integration of an enabling system. </p> -->
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="{{ asset('assets/img/'.$history[0]->gambar) }}" alt="" class="img-responsive img-rounded">
                    <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="hr1">

        <section id="pilar" class="page-section">
            <div class="container">
                <div class="row">
                    <h2>The 5 MET Pillars</h2>
                    <div class="col-md-1">
                    </div>
                    @foreach($pilar as $pl)
                    <div class="col-md-2 col-sm-6 col-xs-12">

                        <div class="service-item">
                            <div class="icon">
                                <p>{{ $pl->nama }}</p>
                            </div>
                            <h4>{{ $pl->deskripsi }}</h4>
                        </div>

                    </div>
                    @endforeach
                    <div class="col-md-1">
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
                            @foreach($client as $c)
                            <img src="{{ asset('assets/img/'.$c->gambar) }}" style="width:200px;" alt="">
                            @endforeach
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
                                <p style="text-align:left;"> {{$profil[1]->title}} <br>{{$profil[1]->content}} <br>{{$profil[1]->additional}}</p>
                                <hr>

                                <h6> Branch Office </h6><br>
                                <p style="text-align:left;">{{$profil[2]->title}} <br>{{$profil[2]->content}} <br>{{$profil[2]->additional}}
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4376096403333!2d106.87338382916519!3d-6.2964906667001665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTcnNDcuNCJTIDEwNsKwNTInMjYuMiJF!5e0!3m2!1sid!2sid!4v1576459657230!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="connect-us">
                                <h5>Get Social with us</h5>
                                <ul>
                                    @foreach ($media as $m)
                                    <li><a href="{{$m->link}}"><i class="{{$m->logo}}"></i></a></li>
                                    @endforeach
                                </ul>
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
@stop