var QR_CODE = new QRCode("qrcode", {
    width: 260,
    height: 260,
    colorDark: "#000000",
    colorLight: "#ffffff",
    correctLevel: QRCode.CorrectLevel.H,
});

QR_CODE.clear();

function onloadFunction(){
    var indeksInsert = document.getElementById('indeks');
    indeksInsert.style.visibility = 'hidden';
    brojIndeksa = indeksInsert.innerHTML;
    generateQRCode(brojIndeksa);
    hideBadImage();
}

document.onload = onloadFunction();

function generateQRCode(brojIndeksa) {
	const qrdiv = document.getElementById("qrdiv");
    QR_CODE.clear();
    QR_CODE.makeCode(brojIndeksa);
    qrdiv.className = 'qrdiv';
}

function hideBadImage(){
    var images = document.querySelectorAll('img');
    images[0].style.display = 'none';
}

var downloadBtn = document.getElementById('downloadBtn');
downloadBtn.onclick = function (e) {
    const img = qrcode.getElementsByTagName("img")[0];
    const canvas = qrcode.getElementsByTagName("canvas")[0];
    const padding = 40;
    canvas.width = canvas.width + padding;
    canvas.height = canvas.height + padding;
    const context = canvas.getContext("2d");
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.fillStyle = "#ffffff";
    context.fillRect(0, 0, canvas.width, canvas.height);
    context.drawImage(img, padding / 2, padding / 2);
    const image = canvas.toDataURL("image/png", 1);
    const filename = "QR_Code_" + Date.now() + ".png";
    downloadImage(image, filename);
};

function downloadImage(image, filename) {
    var element = document.createElement("a");
    element.setAttribute("href", image);
    element.setAttribute("download", filename);
    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
};
