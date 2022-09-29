function sleep(delay) {
    var start = new Date().getTime();
    while (new Date().getTime() < start + delay);
}

function beepBadData() {
    var snd = new Audio("../resources/beep.wav");
    snd.play();
}

function beepGood(){
    var snd = new Audio('../resources/ding.mp3');
    snd.play();
}

function checkValid(data){
    var reg = new RegExp('[0-9][0-9][0-9]\/[0-9][0-9][0-9][0-9][K,T,A][G,R,S]');
    return reg.match(data);
}

function sendData(data){
    var xhr = new XMLHttpRequest();
    xhr.open('GET','../scripts/insertDataFromQR.php?qrData=' + data);
    xhr.send();
}

function onScanSuccess(decodedText, decodedResult) {
    if(checkValid(decodedText) == null){
        beepBadData();
    } else {
        sendData(decodedText);
        beepGood();
    }
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);

function alterPage(){
    var imgs = document.querySelectorAll('img');
    var infoImage = imgs[0];
    infoImage.style.visibility = 'hidden';
    var buttons = document.querySelectorAll('button');
    console.log(buttons);
}

window.onload = alterPage;