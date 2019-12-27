@extends('layout.layouts')

@section('title', 'Portfolio Detail')

@section('content')
<div id="history" class="section wb" style="padding-bottom: 80px">
    <div class="container">

        <div class="row" style=" margin-top: 80px;">
            <div class="col-lg-5 col-md-5 col-sm-5" style=" margin-top: 20px;">
                <img src="{{ asset('assets/img/'.$portfolio_page->gambar) }}" alt="" class="img-responsive img-rounded">

            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">

            </div>
            <div class="col-lg-6 col-md-2 col-sm-6">
                <div class="row">
                    <h2>{{$portfolio_page->nama}}</h2>
                </div>
                <div class="row">
                    <p class="lead">{!!$portfolio_page->link!!}</p>
                </div>
            </div>
        </div>
        <!-- end media -->
    </div><!-- end col -->
</div>
</div><!-- end row -->
</div>
</div>
@endsection
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