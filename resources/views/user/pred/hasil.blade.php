@extends('layout.master2')
@section('tittle', 'Pesi - Prediksi')
@section('header', 'header2')
@section('page', 'Prediksi')
@section('nav_prediksi', 'active')

@section('content')

    <h2>Hasil Prediksi Depresi</h2>
    <p>Probabilitas Kelas 0 (Tidak Depresi): {{ $predicted_proba['predicted_proba_class_0'] }}</p>
    <p>Probabilitas Kelas 1 (Depresi): {{ $predicted_proba['predicted_proba_class_1'] }}</p>



@endsection