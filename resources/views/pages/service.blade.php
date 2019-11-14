@extends('layout.layouts')
@section('title', 'Services')
<!-- Content -->
@section('content')
<div class="parallax-content-about baner-content-about" id="home">
    <div class="container">
        <div class="text-content">
            <h2><em style="font-size:50px">Services</em></h2>
            <p style="color:#fff;margin-top:20px;font-size:16px">
                We have a history of doing what our name implies, creating a visual language around the beliefs of the brands we work with.
            </p>
        </div>
    </div>
</div>
<!--service-->
<div id="service" class="section wb">
    <div class="container">
        <!--services wrapper-->
        <section class="services-style-one">
            <div class="outer-box clearfix">
            </div>
            <div class="services-column">
                <div class="content-outer">
                    <div class="row clearfix " style="text-align:left">
                        @foreach($service as $s)
                        <div class="service-block col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="inner-box  ">
                                <div class="icon-box"><i class="fa fa-briefcase" aria-hidden="true"></i></div>

                               
                                    <h4>{{$s->nama}}</h4>
                                    <div class="text">{{$s->deskripsi}}
                                    
                                </div>

                            </div>
                           
                        </div>
                        @endforeach

                        <!-- <div class="service-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
    <!-- </div> -->
    <!-- </div> -->
</div>
@stop
<!-- End Content -->
@section('footer')
<!-- Footer -->
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
<!-- End Footer -->
@stop