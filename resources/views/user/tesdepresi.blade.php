@extends('layout.master2')
@section('tittle', 'Pesi - Tes Cek Depresi')
@section('header', 'header1')
@section('page', 'Tes Cek Depresi')
@section('nav_tes', 'active')

@section('css')
    <link rel="stylesheet" href="{{ asset('quis/kuis.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.1/apexcharts.min.js" integrity="sha512-qiVW4rNFHFQm0jHli5vkdEwP4GPSzCSp85J7JRHdgzuuaTg31tTMC8+AHdEC5cmyMFDByX639todnt6cxEc1lQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.1/apexcharts.min.css" integrity="sha512-LJwWs3xMbOQNFpWVlpR0Dv3ND8TQgLzvBJsfjMcPKax6VJQ8p9WnQvB5J5Lb9/0D31cbnNsh9x5Lz6+mzxgw1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

    <!-- start Quiz button -->
    <div class="start_btn"><button>Mulai Kuis</button></div>
    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Beberapa aturan kuis</span></div>
        <div class="info-list">
            <div class="info">1. Kamu hanya memiliki waktu <span>15 detik</span> disetiap soalnya.</div>
            <div class="info">2. Setelah Anda memilih jawaban Anda, itu tidak dapat dibatalkan.</div>
            <div class="info">3. Anda tidak dapat memilih opsi apa pun setelah waktu habis.</div>
            <div class="info">4. Anda tidak dapat keluar dari Kuis saat Anda bermain.</div>
            <div class="info">5. Anda akan mendapatkan poin berdasarkan jawaban Anda yang benar.</div>
        </div>
        <div class="buttons">
            <button class="quit">Keluar</button>
            <button class="restart">Lanjutkan</button>
        </div>
    </div>
    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Cek Depresi</div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>
        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Selanjutnya</button>
        </footer>
    </div>
    <!-- Result Box -->
    <div class="result_box">
        <div class="complete_text">Kamu telah menyelesaikannya!</div>
        <div class="score_text">
          
        </div>
        <div class="buttons">
            <button class="restart">Ulangi</button>
            <button class="quit">Keluar</button>
        </div>
    </div>
    

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div id="resultContainer" class="container-xxl py-5" style="display: none;">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Saran</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                            <img class="img-fluid rounded" src="{{ asset('/img/image (3).jpg') }}" >
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    {{-- <p>Probabilitas Kelas 0 (Tidak Depresi): {{ $predicted_proba['predicted_proba_class_0'] }}</p>
                    <p>Probabilitas Kelas 1 (Depresi): {{ $predicted_proba['predicted_proba_class_1'] }}</p> --}}

                        {{-- <h1 class="display-5 mb-4">Hasil</h1>
                        <p></p> --}}

                        <h1 class="display-5 mb-4">Saran</h1>
                        <p id="skor1"  style="display: none;">Skormu menunjukkan bahwa kamu mengalami tidak ada gejala depresi dalam dua minggu 
                            terakhir. Ini adalah hasil yang positif dan menkamukan bahwa kamu mungkin merasa relatif baik secara 
                            emosional dan mental. Tetaplah menjaga keseimbangan hidup yang sehat dengan memperhatikan pola makan 
                            yang baik, tidur yang cukup, dan olahraga teratur. Pastikan juga untuk tetap terhubung dengan teman-teman 
                            dan keluarga yang positif. Jika kamu merasa stres atau sedang menghadapi tantangan dalam hidup, penting untuk 
                            menemukan cara untuk mengelola stres secara efektif, seperti melalui meditasi atau aktivitas yang kamu nikmati.</p>
                        
                        <p id="skor2" style="display: none;">
                            Skormu menunjukkan adanya sedikit mengalami gejala depresi. Meskipun gejalanya mungkin tidak mengganggu secara signifikan, 
                            ini bisa menjadi peringatan untuk memperhatikan kesehatan mentalmu lebih serius. Pertimbangkan untuk mencari dukungan 
                            dari orang terdekat atau dari profesional kesehatan mental. Terkadang, hanya dengan berbicara kepada seseorang yang 
                            dipercaya atau dengan mengikuti terapi singkat bisa membantu mengatasi gejala ini sebelum menjadi lebih mengganggu. 
                            Selain itu, menjaga rutinitas harian yang sehat dan mencari kegiatan yang memberimu kegembiraan juga bisa membantu 
                            memperbaiki moodmu secara keseluruhan.
                        </p>

                        <p id="skor3" style="display: none;">
                            Hasil tesmu menunjukkan bahwa kamu mengalami depresi ringan. Gejala ini mungkin telah mempengaruhi beberapa 
                            aspek dari kehidupan sehari-harimu. Sangat penting untuk tidak mengabaikan perasaanmu dan untuk mencari 
                            bantuan profesional sesegera mungkin. Psikoterapi atau konseling dapat memberikan wadah untuk memahami dan 
                            mengelola gejala depresi ini dengan lebih baik. Selain itu, penting untuk menjaga dukungan sosial yang baik 
                            dan mencari cara untuk merawat diri sendiri dengan penuh kasih sayang. Ingatlah bahwa perasaan ini tidak 
                            bersalah dan tidak sendirian; banyak orang mengalami hal yang serupa dan menemukan bantuan yang mereka butuhkan untuk mengatasi tantangan ini.
                        </p>

                        <p id="skor4" style="display: none;">
                            Skormu menunjukkan bahwa kamu mengalami depresi sedang. Gejala ini bisa sangat mempengaruhi kehidupan 
                            sehari-harimu, termasuk hubungan interpersonal dan pekerjaan. Sangat penting untuk segera mencari bantuan dari 
                            profesional kesehatan mental. Pertimbangkan untuk mengatur pertemuan dengan psikolog atau psikiater untuk evaluasi 
                            lebih lanjut dan perencanaan perawatan yang tepat. Terapi dan mungkin pengobatan bisa membantumu mengatasi gejala 
                            ini dan kembali ke kesehatan mental yang stabil. Berbicara dengan orang-orang terdekat juga bisa memberikan dukungan 
                            emosional yang sangat dibutuhkan dalam menghadapi depresi ini.
                        </p>

                        <p id="skor5" style="display: none;">
                            Skor kamu menunjukkan bahwa kamu mengalami depresi berat. Ini adalah kondisi serius yang memerlukan perhatian segera 
                            dari profesional kesehatan mental. Pertimbangkan untuk menghubungi dokter kamu atau pergi ke departemen darurat terdekat 
                            untuk evaluasi dan perawatan lebih lanjut. Terapi intensif, mungkin dengan kombinasi obat-obatan, mungkin diperlukan untuk 
                            membantu mengelola gejala ini. Ingatlah bahwa meminta bantuan adalah langkah penting dan bukan tkamu kelemahan. Dukungan dari 
                            orang-orang yang kamu percayai dan profesional kesehatan mental dapat membantumu melalui masa sulit ini menuju pemulihan.
                        </p>

                        <h1 class="display-5 mb-4">Rekomendasi Bacaan</h1>
                        {{-- <div class="col-lg-6"> --}}
                            <div class="row g-4 align-items-center">

                                <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Gejala Depresi</h4>
                                        <p class="mb-3">
                                            Depresi adalah gangguan mental yang memengaruhi aspek emosional, motivasi, fungsi motorik, dan kognitif, 
                                            dengan gejala seperti perubahan mood drastis, kurang motivasi, gangguan tidur, perubahan nafsu makan, dan pemikiran negatif.</p>
                                        <a class="fw-semi-bold" href="{{ route('info2') }}">Baca<i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Macam macam gangguan depresi</h4>
                                        <p class="mb-3">Depresi memiliki berbagai jenis, termasuk Major Depressive Disorder yang ditandai dengan kesedihan 
                                            mendalam dan kehilangan minat, serta Dysthymic Disorder yang merupakan depresi kronis lebih ringan tetapi berlangsung lama.
                                        </p>
                                        <a class="fw-semi-bold" href="{{ route('info3') }}">Baca<i class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                </div>
                
            </div>
        </div>
    </div>

    @if(!empty($lineChartData))
    <div id="resultContainer" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Kurva Hasil Tes</p>
                <h1 class="display-5 mb-4">Kurva Hasil Tes</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100" id="chart">
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100" id="chart2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Event listener untuk tombol "Ulangi" pada result_box
        var restartButtons = document.querySelectorAll('.result_box .restart');
        restartButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Sembunyikan resultContainer
                document.getElementById('resultContainer').style.display = 'none';
                document.getElementById('skor1').style.display = 'none';
                document.getElementById('skor2').style.display = 'none';
                document.getElementById('skor3').style.display = 'none';
                document.getElementById('skor4').style.display = 'none';
                document.getElementById('skor5').style.display = 'none';
            });
        });
    });

    </script>
<script>
    var options = {
          series: [{
            name: "Nilai Tes",
            data: @json($lineChartData)
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        // title: {
        //   text: 'Hasil Tes Depresi',
        //   align: 'center'
        // },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
            labels: {
            datetimeFormatter: {
                year: 'yyyy',
                month: 'MMM \'yy',
                day: 'dd MMM',
                hour: 'HH:mm'
            }
            }
         }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>

<script>
     var options = {
          series: @json($pieChartData),
          chart: {
          width: 380,
          type: 'pie',
        },
        labels: @json($pieChartLabels),
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
</script>

<script>
    let url = '{{ route('tes.rec') }}';
    let urlApiSend = '{{ route('tes.api') }}';
</script>

<script src="{{ asset('quis/depresi.js') }}"></script>
    <script src="{{ asset('quis/questions.js') }}"></script>

@endsection