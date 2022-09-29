<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body id="bodyprofesor">


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
                            <button class="btn btn-block" id="PTpocetnaprofesor">
                                <b>Pocetna</b>
                            </button></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="PTpregledpredmeta">
                                <b>Pregled predmeta</b>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="PTpregledtabela">
                                <b>Pregled tabela</b>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                        <a href="./qrReader.php">
                            <button class="btn btn-block" id="PTqrReader">
                                <b>QR Citac</b>
                            </button></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="PTexporttabela">
                                <b>Export tabela</b>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="logout">
                                <b>Log Out</b>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="containerpregled" id="containerpregled">
        <div class="cardpregled">
            <h1>Card</h1>
            <p>1</p>
</div>
<div class="cardpregled">
            <h1>Card</h1>
            <p>2</p>
</div>
<div class="cardpregled">
            <h1>Card</h1>
            <p>3</p>
</div>
        </div>
        <div class="containerpregled2" id="containerpregled2">
        <h1>
        <select id="dropdownPredmet">
<option value=””>option1</option>
<option value=””>option2</option>
<option value=””>option3</option>
<option value=””>option3</option>
</select>
<button class="btn btn-block" id="prikazitabelu" style="background-color: #5C5470; border: none;">
                                <b>Prikazi tabelu</b>
                            </button>
<table id="tablepregled" style="width: 800px; height: 350px; margin-top:8%; border-color: #5C5470; padding-top: 10px" border="5";><caption>Predmet+Vezbe/Predavanja+Datum/Vreme</caption>
<tbody>
<tr>
<td>Ime</td>
<td>Prezime</td>
<td>Indeks</td>
<td>Datum</td>
<td>Vreme</td>
<td>ID</td>
</tr>
<tr>
<td></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table></h1>
</div>


        <div id="footer" class="footer fixed-bottom">
            <h1 id="footer-text">Copyright @ Akademija strukovnih studija Kragujevac</h1>
        </div>






        <script src="../dist/js/jquery.js"></script>
        <script src="../dist/js/popper.js"></script>
        <script src="../dist/js/bootstrap.js"></script>


</body>

</html>