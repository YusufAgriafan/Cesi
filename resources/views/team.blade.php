
@extends('layout.master2')
@section('tittle', 'Pesi - Team')
@section('header', 'header4')
@section('page', 'Team')
@section('nav_fitur', 'active')

@section('content')


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tim TEICE</p>
                <h1 class="display-5 mb-5">Tim Pengembang</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Sofia Maulida</h4>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href="sfmldmaulida9@gmail.com"><i
                                        class="fa fa-envelope"></i></a>
                                {{-- <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a> --}}
                                <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com/sofia_sfmld?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Yusuf Agriafan</h4>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href="https://www.facebook.com/yusuf.agriafan"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href="https://x.com/YAgriafan"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square rounded-circle mx-1" href="https://www.instagram.com/yusuf.agung.rizky.afandi/?hl=en"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                        <div class="team-text">
                            <h4 class="mb-0">Qinthara Sadida Azka</h4>
                            <div class="team-social d-flex">
                                <a class="btn btn-square rounded-circle mx-1" href="qintharasa@gmail.com"><i
                                        class="fa fa-envelope"></i></a>
                                {{-- <a class="btn btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a> --}}
                                <a class="btn btn-square rounded-circle mx-1" href=" https://www.instagram.com/qintharasa9?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection