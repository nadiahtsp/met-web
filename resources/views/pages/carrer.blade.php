@extends('layout.layouts')
@section('title', 'Careers')
<!-- Content -->
@section('content')
<div class="parallax-content-about baner-content-about" id="home">
    <div class="container">
        <div class="text-content">
            <h2><em style="font-size:60px">Careers</em></h2>
        </div>
    </div>
</div>
<section id="portfolio">
    <div class="inner-container container">
        <div class="projects-holder">
            <div class="row">
                <div class="col-md-4 col-sm-6 project-item mix nature">
                    <div class="thumb">
                        <div class="image">
                            <a href="#exampleModalCenter" data-toggle="modal"><img src="{{ asset('assets/img/ui.png') }}"">
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 col-sm-6 project-item mix animation">
                                <div class="thumb">
                                    <div class="image">
                                        <a href="" data-lightbox="">
                                            <img src="{{ asset('assets/img/ps.png') }}""></a>
                                            </div>
                                        </div>
                                    </div>
                                            <div class=" col-md-4 col-sm-6 project-item mix branding">
                                            <div class="thumb">
                                                <div class="image">
                                                    <a href="" data-lightbox="image-1"><img src="{{ asset('assets/img/pm.png') }}""></a>
                                                 </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-4 col-sm-6 project-item mix graphic nature">
                                                        <div class="thumb">
                                                            <div class="image">
                                                                <a href="img/blog_item_02.jpg" data-lightbox="image-1"><img src="{{ asset('assets/img/sa.png') }}""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-4 col-sm-6 project-item mix branding">
                                                                    <div class="thumb">
                                                                        <div class="image">
                                                                            <a href="img/blog_item_02.jpg" data-lightbox="image-1"><img src="{{ asset('assets/img/frontend.png') }}""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-4 col-sm-6 project-item mix graphic animation">
                                                                                <div class="thumb">
                                                                                    <div class="image">
                                                                                        <a href="img/blog_item_02.jpg" data-lightbox="image-1"><img src="{{ asset('assets/img/backend.png') }}""></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=" modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                                                            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                                                                                            <div class="modal-dialog modal-dialog-centered" style="margin-top:200px;" role="document">


                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                        <h5 class="modal-title" id="exampleModalLongTitle">UI/UX</h5>
                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                            <br>
                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                        ...
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        <button type="button" class="btn btn-primary">Apply</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
</section>
@stop
<!-- End Content -->
@section('footer')
<!-- Footer -->
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