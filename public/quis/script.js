//selecting all required elements
const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");
// if startQuiz button clicked
start_btn.onclick = ()=>{
    // info_box.classList.add("activeInfo"); //show info box
    quiz_box.classList.add("activeQuiz"); //show quiz box
    showQuetions(0); //calling showQestions function
    queCounter(1); //passing 1 parameter to queCounter
}
// if exitQuiz button clicked
exit_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //hide info box
}
// if continueQuiz button clicked
continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.add("activeQuiz"); //show quiz box
    showQuetions(0); //calling showQestions function
    queCounter(1); //passing 1 parameter to queCounter
}
let timeValue =  15;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;
const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");
// if restartQuiz button clicked
restart_quiz.onclick = ()=>{
    quiz_box.classList.add("activeQuiz"); //show quiz box
    result_box.classList.remove("activeResult"); //hide result box
    timeValue = 15;
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count); //calling showQestions function
    queCounter(que_numb); //passing que_numb value to queCounter
    clearInterval(counter); //clear counter
    clearInterval(counterLine); //clear counterLine
    timeText.textContent = "Time Left"; //change the text of timeText to Time Left
    next_btn.classList.remove("show"); //hide the next button
}
// if quitQuiz button clicked
quit_quiz.onclick = ()=>{
    window.location.reload(); //reload the current window
}
const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");
// if Next Que button clicked
next_btn.onclick = ()=>{
    if(que_count < questions.length - 1){ //if question count is less than total question length
        que_count++; //increment the que_count value
        que_numb++; //increment the que_numb value
        showQuetions(que_count); //calling showQestions function
        queCounter(que_numb); //passing que_numb value to queCounter
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        timeText.textContent = "Time Left"; //change the timeText to Time Left
        next_btn.classList.remove("show"); //hide the next button
    }else{
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        showResult(); //calling showResult function
    }
}
// getting questions and options from array
function showQuetions(index){
    const que_text = document.querySelector(".que_text");
    //creating a new span and div tag for question and option and passing the value using array index
    let que_tag = '<span>'+ questions[index].question +'</span>';
    let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[3] +'</span></div>';
    que_text.innerHTML = que_tag; //adding new span tag inside que_tag
    option_list.innerHTML = option_tag; //adding new div tag inside option_tag

    const option = option_list.querySelectorAll(".option");
    // set onclick attribute to all available options
    for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}
// creating the new div tags which for icons
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';
//if user clicked on option

function optionSelected(answer) {
    clearInterval(counter); // menghentikan hitungan waktu
    clearInterval(counterLine); // menghentikan garis waktu

    let userAns = answer.textContent; // mendapatkan opsi yang dipilih pengguna
    const allOptions = option_list.children.length; // mendapatkan semua opsi

    // Tentukan skor berdasarkan opsi yang dipilih
    let scoreToAdd = 0;
    switch (userAns) {
        case questions[que_count].options[0]:
            scoreToAdd = 3; // Tidak
            break;
        case questions[que_count].options[1]:
            scoreToAdd = 2; // Mungkin
            break;
        case questions[que_count].options[2]:
            scoreToAdd = 1; // Iya
            break;
        case questions[que_count].options[3]:
            scoreToAdd = 0; // Sering
            break;
        default:
            scoreToAdd = 0; // Jika tidak ada yang cocok
            break;
    }

    // Tambahkan skor ke total skor pengguna
    userScore += scoreToAdd;
    answer.classList.add("correct");

    // Tampilkan efek visual berdasarkan jawaban yang benar atau salah
    // if (userAns == questions[que_count].answer) {
    //     answer.classList.add("correct");
    //     answer.insertAdjacentHTML("beforeend", tickIconTag); // Tambahkan ikon centang pada opsi yang benar
    //     console.log("Jawaban Benar");
    //     console.log("Skor Anda = " + userScore);
    // } else {
    //     answer.classList.add("incorrect");
    //     answer.insertAdjacentHTML("beforeend", crossIconTag); // Tambahkan ikon silang pada opsi yang salah
    //     console.log("Jawaban Salah");
    //     // Jika salah, tunjukkan jawaban yang benar dengan warna hijau
    //     for (let i = 0; i < allOptions; i++) {
    //         if (option_list.children[i].textContent == questions[que_count].answer) {
    //             option_list.children[i].setAttribute("class", "option correct");
    //             option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); // Tambahkan ikon centang pada opsi yang benar
    //             console.log("Jawaban Benar Otomatis Terpilih.");
    //         }
    //     }
    // }

    // Matikan opsi setelah dipilih
    for (let i = 0; i < allOptions; i++) {
        option_list.children[i].classList.add("disabled");
    }

    // Tampilkan tombol selanjutnya setelah opsi dipilih
    next_btn.classList.add("show");
}

function showResult(){
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.remove("activeQuiz"); //hide quiz box
    result_box.classList.add("activeResult"); //show result box
    const scoreText = result_box.querySelector(".score_text");
    document.getElementById('resultContainer').style.display = 'block';  
    if (userScore >= 20) { // if user scored 20 or more
        let scoreTag = '<span>Anda mungkin mengalami depresi berat, Skormu </span><h2 style="text-align: center;">' + userScore + '</h2>';
        scoreText.innerHTML = scoreTag;
        document.getElementById('skor5').style.display = 'block';  
    } else if (userScore >= 15) { // if user scored 15-19
        let scoreTag = '<span>Anda mungkin mengalami depresi sedang, Skormu </span><h2 style="text-align: center;">' + userScore + '</h2>';
        scoreText.innerHTML = scoreTag;
        document.getElementById('skor4').style.display = 'block';  
    } else if (userScore >= 10) { // if user scored 10-14
        let scoreTag = '<span>Anda mungkin mengalami depresi ringan, Skormu </span><h2 style="text-align: center;">' + userScore + '</h2>';
        scoreText.innerHTML = scoreTag;
        document.getElementById('skor3').style.display = 'block';  
    } else if (userScore >= 5) { // if user scored 5-9
        let scoreTag = '<span>Anda mungkin mengalami gejala depresi minimal, Skormu </span><h2 style="text-align: center;">' + userScore + '</h2>';
        scoreText.innerHTML = scoreTag;
        document.getElementById('skor2').style.display = 'block';  
    } else { // if user scored 0-4
        let scoreTag = '<span>Kemungkinan depresi rendah, Skormu </span><h2 style="text-align: center;">' + userScore + '</h2>';
        scoreText.innerHTML = scoreTag;
        document.getElementById('skor1').style.display = 'block';  
    }  
    
}
// function startTimer(time){
//     counter = setInterval(timer, 1000);
//     function timer(){
//         timeCount.textContent = time; //changing the value of timeCount with time value
//         time--; //decrement the time value
//         if(time < 9){ //if timer is less than 9
//             let addZero = timeCount.textContent;
//             timeCount.textContent = "0" + addZero; //add a 0 before time value
//         }
//         if(time < 0){ //if timer is less than 0
//             clearInterval(counter); //clear counter
//             timeText.textContent = "Time Off"; //change the time text to time off
//             const allOptions = option_list.children.length; //getting all option items
//             let correcAns = questions[que_count].answer; //getting correct answer from array
//             for(i=0; i < allOptions; i++){
//                 if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer
//                     option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
//                     option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
//                     console.log("Time Off: Auto selected correct answer.");
//                 }
//             }
//             for(i=0; i < allOptions; i++){
//                 option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
//             }
//             next_btn.classList.add("show"); //show the next button if user selected any option
//         }
//     }
// }
// function startTimerLine(time){
//     counterLine = setInterval(timer, 29);
//     function timer(){
//         time += 1; //upgrading time value with 1
//         time_line.style.width = time + "px"; //increasing width of time_line with px by time value
//         if(time > 549){ //if time value is greater than 549
//             clearInterval(counterLine); //clear counterLine
//         }
//     }
// }
function queCounter(index){
    //creating a new span tag and passing the question number and total question
    let totalQueCounTag = '<span><p>'+ index +'</p> of <p>'+ questions.length +'</p> Questions</span>';
    bottom_ques_counter.innerHTML = totalQueCounTag;  //adding new span tag inside bottom_ques_counter
}
