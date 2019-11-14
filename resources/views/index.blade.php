@extends('layout.layouts')

@section('title', 'PT MET')

@section('content')

<!-- Content -->
<div class="parallax-content baner-content" id="ho  me">
    <div class="container">
        <div class="text-content">
            <h2><em>{{ $home[1]->title }}</em></h2>
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
                    <h2>{{ $home[0]->title }}</h2>
                    <p class="lead">{{ $home[0]->content }}</p>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="{{ asset('assets/img/'.$home[0]->gambar) }}" alt="" class="img-responsive img-rounded">
                    <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                </div><!-- end media -->
            </div><!-- end col -->
            <hr class="hr1">
        </div><!-- end row -->

    </div><!-- end container -->
</div><!-- end section -->

<!-- //portfolio -->
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
                    @foreach($portfolio as $p)
                    <div class="col-lg-12 col-md-12 width:300px;">

                        <div class="work">
                            <div class="hovereffect">
                                <a data-toggle="modal" data-target="#modal-approve{{$p->id}}"> <img class="img-responsive" src="{{asset('assets/img/'.$p->gambar) }}">
                                    <div class="overlay">
                                        <h2>{{$p->nama}}</h2>
                                    </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                @foreach($portfolio as $p)
        <div class=" modal fade" data-toggle="" id="modal-approve{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                                <div class="modal-dialog modal-dialog-centered" style="margin-top:200px;" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$p->nama}}</h5>
                                        </div>

                                        <div class="modal-body">
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Close</button>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>
                    @endforeach
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
                            @foreach($service as $s)
                            <div class="service-block col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                <div class="inner-box">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                        </div>


                                        <div class="col-md-9 col-sm-9 col-xs-9" style="width: 60%; margin-left:-20px;">
                                            <h4>{{$s->nama}}</h4>
                                            <div class="text">Develop native web and {{$s->deskripsi}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                    @foreach($testimony as $t)
                    <div class="item">
                        <div class="testimonials-item">
                            <p>“ {{ $t->testimoni }} ”</p>
                            <h4>{{ $t->nama }}</h4>
                            <span>{{ $t->position }}</span>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="item">
                        <div class="testimonials-item">
                            <p>“ Suspendisse magna mauris, convallis vel finibus eget, lobortis dictum neque. Nam tincidunt metus nec eros dignissim consectetur. ”</p>
                            <h4>Dr. Titin Hardiana</h4>
                            <span>New Manager</span>
                        </div>
                    </div> -->
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
            <div class="col-md-8 col-sm-12">
                <div class="location">
                    <h4>Location</h4>
                    <ul>
                        <li>
                            <h6> Head Office</h6> <br>{{$profil[1]->title}} <br>{{$profil[1]->content}} <br>{{$profil[1]->additional}}
                        </li>
                        <li>
                            <h6>Branch Office</h6><br>{{$profil[2]->title}} <br>{{$profil[2]->content}} <br>{{$profil[2]->additional}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="contact-info">
                    <h4>Contact</h4>
                    <ul>
                        <li><em>Phone</em>: {{$profil[3]->content}}
                        <br><em>Fax</em>: +6221 87792645
                            <br><em>Email</em>: {{$profil[4]->content}}</br>
                    </ul>
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