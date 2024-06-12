@extends('layout.app')

@section('content')
<body>
    <style type="text/css">
    body {
        align-items: center;
        padding-top: 10%
    }
    svg{stroke:currentColor;fill:currentColor;stroke-width:1}
    .w3-bar-item{border-left:6px solid transparent}
    .w3-bar-item:not(:disabled):hover{border-color:#f44336}
    .w3-bar-item:focus{border-color:#2196F3}
    .w3-bar-item.expanded{color:#fff;background-color:#616161}
    .w3-bar-item input[type=radio],.w3-bar-item label{cursor:pointer}
    .w3-bar-item:focus-within{border-color:#2196F3}
    button {
        border: #000;
    }
    .hidden {
        display: none;
    }
    </style>
    
    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:220px;z-index:2" id="mySidebar">
    
    <div class="w3-main">
        <div class="w3-container w3-padding w3-black">
            <h2 style="text-align: center;">Belajar Jam</h2>
        </div>
    
        <div id="timepicker" class="w3-container w3-margin-top w3-padding-16 w3-color">
            <button id="timeString" onclick="pickTime(), toggleFormAturWaktu()" class="w3-input w3-border">
                Mulai
            </button>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/clock-system.js') }}"></script>
    <script type="text/javascript">
    'use strict';
    const picker=new Timepicker();
    const container=document.getElementById('timepicker');
    const pickerElm=picker.getElement();
    pickerElm.style.marginLeft='calc(50% - 120px)';
    pickerElm.style.marginTop='12px';
    container.appendChild(pickerElm);
    picker.setClockMode(true);
    picker.show();
    
    function toggleFormAturWaktu() {
        var formAturWaktu = document.querySelector('.inputTime');
        formAturWaktu.classList.toggle('hidden');
    }
    
    
    function pickTime(ev){
        const docWidth=document.body.offsetWidth;
        ev=ev||window.event;
        let ml=ev.pageX-136;
        if(ml<0)ml=0;
        picker.setClockMode(false);
    }
    
    function setTime(){
        let h=document.getElementById('valHour').value;
        let m=document.getElementById('valMinute').value;
        if(h!='')picker.setHours(h);
        if(m!='')picker.setMinutes(m)
    }
    
    function dropdown(el){
        if(el.className.indexOf('expanded')==-1){
            el.className=el.className.replace('collapsed','expanded');
        }else{
            el.className=el.className.replace('expanded','collapsed')
        }
    
    }
    </script>
    <div class="inputTime hidden">
    <span>Atur Waktu</span>
        <div class="w3-bar-block w3-light-grey">
            <div class="w3-bar-item">
                <input id="valHour" class="w3-input w3-border" type="number" min="0" max="23" placeholder="hours value...">
            </div>
            <div class="w3-bar-item">
                <input id="valMinute" class="w3-input w3-border" type="number" min="0" max="59" placeholder="minutes value...">
            </div>
            <button class="w3-bar-item w3-button w3-ripple" onclick="setTime()">Apply</button>
        </div>
    </div>
    </div>
    </body>
@endsection
