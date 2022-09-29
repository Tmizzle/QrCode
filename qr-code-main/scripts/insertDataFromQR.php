<?php
// dodati povlacenje id predmeta iz sesije 


include('db.php');
$data = $_GET['qrData'];
// dodati query za selektovanje id studenta po broju indeksa koji se dobije iz koda
$today = date("d.m.y");
// dodati broj indeksa na pocetak sifre
$sifra = "idPredmeta_" . $today . "_" . $data;
// promeniti query tako da radi insert u pravu tabelu sa pravim vrednostima
$mysqli->query("INSERT INTO `test_table`(`test_data`, `sifra`) VALUES ('$data', '$sifra')");


?>