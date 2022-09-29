<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
    <script src="../dist/js/html5-qrcode.min.js"></script>
    <script src="./js/qr-handler.js" defer></script>
    <script src="../dist/js/jquery.js"></script>
    <title>QR citac</title>
</head>

<body id="bodyqrreader">
<nav id="navbar" class="navbar navbar-expand-md fixed-top navbar-light">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand"><img class="img-fluid" src="../dist/img/horizontalni-transparentno.png"
                    height="60px" width="240px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="col">
                            <a href="./profesor.php">
                            <button class="btn btn-block" id="QRpocetnaprofesor">
                                <b>Pocetna</b>
                            </button></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="QRpregledpredmeta">
                                <b>Pregled predmeta</b>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <a href="./pregledtabela.php">
                            <button class="btn btn-block" id="QRpregledtabela">
                                <b>Pregled tabela</b>
                            </button></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <a href="./qrReader.php">
                            <button class="btn btn-block" id="QRqrReader">
                                <b>QR citac</b>
                            </button></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="QRexporttabela">
                                <b>Export tabela</b>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="QRlogout">
                                <b>Log Out</b>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="containerQrReader centered">
        <div class="row">
            <div class="col-12">
                <div id="reader"></div>
            </div>
        </div>
    </div>
    <script>
        $("button").addClass("btn btn-primary");
    </script>

<div id="footer" class="footer fixed-bottom">
            <h1 id="footer-text">Copyright @ Akademija strukovnih studija Kragujevac</h1>
        </div>

        <script src="../dist/js/jquery.js"></script>
        <script src="../dist/js/popper.js"></script>
        <script src="../dist/js/bootstrap.js"></script>
</body>

</html>