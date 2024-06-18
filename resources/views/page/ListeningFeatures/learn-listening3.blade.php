<!-- resources/views/game.blade.php -->

@extends('layout.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawaban Gambar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .listening {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
        }

        .center {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .box {
            width: 74px;
            height: 74px;
            box-sizing: border-box;
            border-style: solid;
            border-width: 37px 0px 37px 74px;
            border-color: transparent transparent transparent steelblue;
            transition: all 100ms ease-in-out;
            cursor: pointer; /* Tambahkan cursor pointer untuk menunjukkan elemen bisa diklik */
        }

        .pause {
            border-style: double;
            border-width: 0px 0px 0px 60px;
        }

        .questionContainer {
            margin-top: 25%;
            text-align: center;
            font-size: 1.5rem; /* Sesuaikan ukuran font sesuai keinginan */
            background-color: rgba(240, 255, 255, 0.589);
            width: 50%;
        }
        .questionContainer h1 {
            padding: 2%;
            margin: 0; /* Hapus margin agar tidak ada ruang tambahan */
        }

        .answerContainer {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            width: 100%; /* Misalnya, atur width 100% */
        }

        .answer {
            text-align: center;
            align-items: center;
            background-color: #ffc700;
            border-radius: 10%;
            margin: 3%;
            width: 10%; /* Sesuaikan jika perlu */
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative; /* Tambahkan position relative untuk menentukan posisi teks jawaban */
        }

        .answer img {
    width: 15vw; 
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.692); /* Hapus background color yang tidak diinginkan */
    padding: 5px; /* Tambahkan padding jika diperlukan */
    border-radius: 10%; /* Sesuaikan dengan border-radius elemen .answer */
    border: 2px solid #ffc700; /* Atur border yang sesuai dengan desain */
    box-sizing: border-box; /* Pastikan border tidak mempengaruhi lebar gambar */
}


        .answer p {
            height: auto;
            padding: 0;
            max-width: 100%;
            border-radius: 10%;
            font-size: 150%;
            margin: 0; /* Pastikan margin nol untuk menghindari ruang tambahan */
            padding-bottom: 5%; /* Sesuaikan jika perlu */
            object-fit: cover;
        }

        /* Stil untuk pesan jawaban */
        .answerFeedback {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px;
            margin-top: 8%;
            border-radius: 5px;
            font-weight: bold;
            font-size: 2rem;
            display: none;
            z-index: 1000; /* Pastikan z-index cukup tinggi agar muncul di atas elemen lain */
        }

        .correct {
            background-color: rgba(0, 128, 0, 0.8);
            color: white;
        }

        .wrong {
            background-color: rgba(255, 0, 0, 0.8);
            color: white;
        }
        .nextButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            width: 10vw;
            background-color: steelblue;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="listening">
        <div class="playButton">
            <div class="container">
                <div class="box center">
                    <audio id="audio" src="{{ asset('assets/voice/bintang.mp3') }}"></audio>
                </div>
            </div>
        </div>
        <div class="questionContainer">
            <h1>AKU MELIHAT APA?</h1>
        </div>
        <div class="answerContainer">
            <div class="answer" data-answer="pelangi">
                <img src="{{ asset('assets/img/listening-features/pelangi.png') }}" alt="Pelangi">
                <p>Pelangi</p>
            </div>
            <div class="answer" data-answer="matahari">
                <img src="{{ asset('assets/img/listening-features/matahari.png') }}" alt="Matahari">
                <p>Matahari</p>
            </div>
            <div class="answer" data-answer="bintang">
                <img src="{{ asset('assets/img/listening-features/bintang.png') }}" alt="Bintang">
                <p>Bintang</p>
            </div>
            <div class="answer" data-answer="bulan">
                <img src="{{ asset('assets/img/listening-features/bulan.png') }}" alt="Bulan">
                <p>Bulan</p>
            </div>
        </div>

        <!-- Pesan jawaban -->
        <div id="answerFeedback" class="answerFeedback"></div>

    </div>

    <script>
        const box = document.querySelector('.box');
        const audio = document.getElementById('audio');
        let isPaused = true;
        let pauseTime = 0;

        box.addEventListener('click', () => {
            box.classList.toggle('pause');
            if (isPaused) {
                audio.currentTime = pauseTime;
                audio.play();
                isPaused = false;
            } else {
                audio.pause();
                pauseTime = audio.currentTime;
                isPaused = true;
            }
        });

        // Tambahkan event listener untuk event 'ended' dari audio
        audio.addEventListener('ended', () => {
            box.classList.remove('pause'); // Hapus class 'pause' dari box
            isPaused = true;
            pauseTime = 0;
        });

        // Tambahkan event listener untuk setiap jawaban
        const answers = document.querySelectorAll('.answer');
        answers.forEach(answer => {
            answer.addEventListener('click', () => {
                const selectedAnswer = answer.getAttribute('data-answer');
                if (selectedAnswer === 'bintang') { // Ubah ini sesuai dengan jawaban yang benar
                    showAnswerFeedback('Jawaban Benar', 'correct');
                } else {
                    showAnswerFeedback('Jawaban Salah', 'wrong');
                }
            });
        });

        // Fungsi untuk menampilkan pesan jawaban
        function showAnswerFeedback(message, type) {
            const feedbackDiv = document.getElementById('answerFeedback');
            feedbackDiv.textContent = message;
            feedbackDiv.className = `answerFeedback ${type}`;
            feedbackDiv.style.display = 'block';
        }
    </script>
    
</body>
</html>

@endsection
