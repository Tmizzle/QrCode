<?php
session_start();
include("db.php");
$predID = $_SESSION["predavacID"];
$query = $mysqli->query("SELECT naziv FROM predmet WHERE sifra_predmeta IN (SELECT sifra_predmeta FROM predavac_po_predmetu WHERE predavacID='2')");
?>

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
                            <button class="btn btn-block" id="pocetnaprofesor">
                                <b>Pocetna</b>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="pregledpredmeta">
                                <b>Pregled predmeta</b>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                        <a href="./pregledtabela.php">
                            <button class="btn btn-block" id="pregledtabela">
                                <b>Pregled tabela</b>
                            </button></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                        <a href="./qrReader.php">
                            <button class="btn btn-block" id="qrReader">
                                <b>QR Citac</b>
                            </button></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="col">
                            <button class="btn btn-block" id="exporttabela">
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
    <div class="pocetnacontainer2" id="pocetnacontainer2">
    Predmeti:  
<select> 
<option value="izbor">Izaberite predmet</option>} 
<?php
                        while ($row = mysqli_fetch_array($query)) {

                            echo "<option value=" . $row["naziv"] . ">" . $row["naziv"] . "</option>";
                        
                        }
                        ?>
</select>   
</div>
    <div class="pocetnacontainer" id="pocetnacontainer">
                <div class="card">
                    <div class="card-side front">
                        <div class="row" id="panelrow1">
                            <h1>Dobrodosli Ime+Prezime!</h1>
                        </div>
                        <div class="row" id="panelrow2">
                            <h1>Pogledajte tabelu vaseg poslednjeg predavanja ispod!</h1>
                        </div>
                    </div>
                    <div class="card-side back">
                        <div>
                        <h1>Tekst</h1>
                        </div>
                    </div>
                </div>
                <br><br>
                <div>
                    <a href="">
                            <button class="btn btn-hoverbtn" id="poslednjepredavanje"><b>Predavanje</b></button>
                    </a>
                </div>


        <div id="footer" class="footer fixed-bottom">
        Predmeti:  
<select> 
<option value="izbor">Izaberite predmet</option>} 
<?php
                        while ($row = mysqli_fetch_array($query)) {

                            echo "<option value=" . $row["naziv"] . ">" . $row["naziv"] . "</option>";
                        
                        }
                        ?>
</select>   
        </div>






        <script src="../dist/js/jquery.js"></script>
        <script src="../dist/js/popper.js"></script>
        <script src="../dist/js/bootstrap.js"></script>


</body>

</html>