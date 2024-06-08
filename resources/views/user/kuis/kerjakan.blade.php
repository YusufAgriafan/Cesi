<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALWEBI - Kuis</title>
    <link rel="stylesheet" href="{{ asset('quiz/quiz3.css') }}">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
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
            <div class="title">Kuis</div>
            <div class="timer">
                <div class="time_left_txt">Waktu</div>
                <div class="timer_sec">15</div>
            </div>
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
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Kamu telah menyelesaikan kuis!</div>
        <div class="score_text">
          
        </div>
        <div class="buttons">
            <button class="restart">Ulangi Kuis</button>
            <button class="quit">Keluar Kuis</button>
        </div>
    </div>
    {{-- <script src="{{ asset('quiz/questions.js') }}"></script> --}}
    <script>
        // let questions = [];
        let questions = JSON.parse('<?= json_encode($questions) ?>');
        let quizBy = '{{ $quiz->by }}';
        let url = '{{ route('kuis.rec') }}';
        let urlApiSend = '{{ route('kuis.api', $quiz->id) }}';
    </script>
    <script src="{{ asset('quiz/script.js') }}"></script>

</body>
</html>
</html>