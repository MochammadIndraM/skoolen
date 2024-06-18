@extends('layout.app')

@section('content')
<body>
    <style type="text/css">
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .background-container {
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background-size: cover;
        background-position: center;
        z-index: -1; /* Agar background berada di belakang konten */
    }
    .title-container {
        font-size: 200%;
        text-align: center;
        padding-top: 5vh;
    }
    .mainContainer {
        display: flex;
        justify-content: center;
        padding-top: 120px;
    }
    .mainClockContainer {
        text-align: center;
    }
    .innerClockContainer {
        display: flex;
    }
    .startButton {
        position: absolute;
        top: 22vh;
        left: 5vw;
    }
    #timeString {
        border: 2px solid #fd9b63;
        padding: 10px 20px;
        background-color: white;
        color: #fd9b63;
        cursor: pointer;
        border-radius: 13%;
        font-size: 2em;
        transition: background-color 0.3s ease;
    }
    #timeString:hover {
        border: 2px solid white;
        background-color: #fd9b63;
        color: white;
    }
    .inputTime {
        text-align: center;
        margin-left: 13vw;
        padding-top: 4vh;
    }
    .inputTime span {
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 1.2em;
    }
    .w3-bar-item {
        margin-bottom: 10px;
    }
    .w3-bar-item input[type=number] {
        width: 60px; /* Atur lebar input */
        height: 60px; /* Atur tinggi input */
        font-size: 2em; /* Ukuran font lebih besar */
        text-align: center; /* Pusatkan teks di dalam input */
        margin: 0 auto;
        border: 2px solid #000000; /* Warna border hijau */
        border-radius: 10%; /* Sudut border membulat */
    }
    .w3-bar-item input[type=number]:focus {
        border-color: #000000; /* Warna border hijau gelap saat fokus */
        outline: none; /* Menghilangkan outline default saat fokus */
    }
    .w3-bar-item label {
        display: inline-block;
        width: 50px;
        text-align: right;
        margin-right: 10px;
        font-size: 1.5em; /* Ukuran font label lebih besar */
    }
    .hidden {
        display: none;
    }
    .w3-button.apply-button {
        border-radius: 10%;
        background-color: #4CAF50; /* Warna latar belakang hijau */
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease; /* Transisi saat hover */
        font-size: 1.5em; /* Ukuran font tombol lebih besar */
    }
    .w3-button.apply-button:hover {
        background-color: white;
        color: #4caf50;
        border: 2px solid #4caf50;

    }
    .w3-bar-block {
        display: flex;
        margin: 5%;
    }
    .alert-message {
        color: red;
        font-weight: bold;
        margin-top: 10px;
    }
    </style>

    <div class="background-container" id="background-container"></div>
    <div class="title-container">
        <h2 class="text-2xl text-justify border-b-4 border-red-300 pb-1 px-4 rounded-md" style="display: inline-block">Mari Kita Belajar Jam</h2>
    </div>
    <div class="mainContainer">
        <div id="mySidebar">
            <div class="mainClockContainer">
                <div class="innerClockContainer">
                    <div class="startButton">
                        <button id="timeString" onclick="pickTime(), toggleFormAturWaktu(), toggleButton()">
                            MULAI
                        </button>
                    </div>
                    <div id="timepicker">
                        {{-- memanggil jam --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="inputTime hidden">
            <span style="font-size: 200%;">Atur Waktu</span>
            <div class="inputContainer">
                <div class="w3-bar-block">
                    <div class="w3-bar-item">
                        <label for="valHour">Jam:</label>
                        <input id="valHour" class="w3-input w3-border" type="number" min="0" max="23" required>
                    </div>
                    <div class="w3-bar-item">
                        <label for="valMinute">Menit:</label>
                        <input id="valMinute" class="w3-input w3-border" type="number" min="0" max="59" required>
                    </div>
                </div>
            </div>
            <div id="alertMessage" class="alert-message hidden" style="font-size: 200%;">Jam dan menit harus diisi.</div>
            <button type="button" class="w3-button w3-ripple apply-button" onclick="setTime()">TERAPKAN</button>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/clock-system.js') }}"></script>
    <script type="text/javascript">
    'use strict';
    document.addEventListener("DOMContentLoaded", function() {
        var backgroundContainer = document.getElementById('background-container');
        var imageUrl = '{{ asset("assets/background/background_jam.png") }}';
        backgroundContainer.style.backgroundImage = 'url(' + imageUrl + ')';
    });
    const picker = new Timepicker();
    const container = document.getElementById('timepicker');
    const pickerElm = picker.getElement();
    pickerElm.style.marginLeft = 'calc(50% - 120px)';
    pickerElm.style.marginTop = '12px';
    container.appendChild(pickerElm);
    picker.setClockMode(true);
    picker.show();

    function toggleButton() {
        const button = document.getElementById('timeString');
        if (button.innerText === 'MULAI') {
            button.innerText = 'SELESAI';
        } else {
            button.innerText = 'MULAI';
        }
    }

    function toggleFormAturWaktu() {
        var formAturWaktu = document.querySelector('.inputTime');
        formAturWaktu.classList.toggle('hidden');
    }

    function pickTime(ev) {
        const docWidth = document.body.offsetWidth;
        ev = ev || window.event;
        let ml = ev.pageX - 136;
        if (ml < 0) ml = 0;
        picker.setClockMode(false);
    }

    function setTime() {
        let h = document.getElementById('valHour').value;
        let m = document.getElementById('valMinute').value;
        const alertMessage = document.getElementById('alertMessage');

        if (h === '' || m === '') {
            alertMessage.classList.remove('hidden');
            return;
        }

        alertMessage.classList.add('hidden');
        picker.setHours(h);
        picker.setMinutes(m);
    }
    </script>
</body>
@endsection
