@extends('layout.layouts')
@section('title', 'Our Works')
<!-- Content -->
@section('content')
<div class="parallax-content-about baner-content-about" id="home">
    <div class="container">
        <div class="text-content">
            <h2><em style="font-size:60px">Our Works </em> </h2>
        </div>
    </div>
</div>
<div id="portfolio1" class="section wb">
    <div class="container">
        <div class="row">
            <div class="span12">
            @foreach($portfolio as $p)
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="work">
                            <div class="hovereffect" style="width:40%">
                                <img class="img-responsive" src="{{ asset('assets/img/'.$p->gambar) }}" alt="">
                                <div class="overlay">
                                    <h2>{{ $p->nama }}</h2>
                                    <a class="info" href="{{ $p->link }}">link here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 
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
                </div> -->

                </div>
            </div>
            @endforeach
        </div>

    </div><!-- end row -->

</div><!-- end container -->
@stop
<!-- End Content -->
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
<!-- End Footer -->
@stop