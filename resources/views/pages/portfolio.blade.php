@extends('layout.layouts')
@section('title', 'Our Works')
<!-- Content -->
@section('content')
<div class="parallax-content-about baner-content-about" id="home">
    <div class="container">
        <div class="text-content">
            <h2><em style="font-size:50px">Our Works </em> </h2>
        </div>
    </div>
</div>
<div id="portfolio1" class="section wb" style="padding-bottom: 80px">
    <div class="container">
        <div class="row">
            <div class="span12">
                @foreach($portfolio as $p)
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="work">
                            <div class="hovereffect">
                                <a href="/portfolio-page/{{$p->id}}"><img src="{{ asset('assets/img/'.$p->gambar) }}" alt="">
                                    <div class="overlay">
                                        <h2>{{ $p->nama }}</h2>

                                    </div>
                                </a>
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
            @endforeach
        </div>

    </div><!-- end row -->

</div><!-- end container -->
@stop
<!-- End Content -->
<!-- Footer -->
@section('footer')
<footer >
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
                                <li>
                                    <a href="{{$m->link}}">
                                        <i class="{{$m->logo}}"></i>
                                    </a>
                                </li>
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