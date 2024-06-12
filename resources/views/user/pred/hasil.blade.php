@extends('layout.master2')
@section('tittle', 'Pesi - Prediksi')
@section('header', 'header2')
@section('page', 'Prediksi')
@section('nav_prediksi', 'active')

@section('content')

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Hasil</p>
                    <h1 class="display-5 mb-4">Hasil Prediksi</h1>
                    <p>Probabilitas Kelas 0 (Tidak Depresi): {{ $predicted_proba['predicted_proba_class_0'] }}</p>
                    <p>Probabilitas Kelas 1 (Depresi): {{ $predicted_proba['predicted_proba_class_1'] }}</p>

                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        {{-- <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe> --}}
                            {{-- <img class="img-fluid rounded" src="{{ asset('/img/image (3).jpg') }}" style="width: 200px; height: auto;"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection