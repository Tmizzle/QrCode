<?php 

    $ime = $_POST['profIme'];
    $prezime = $_POST['profPrezime'];
    $email = $_POST['profEmail'];
    $pass = $_POST['profPass'];
    $md_5 = md5($pass);
    require("db.php");
    $sql = "INSERT INTO `korisnik`(`ime`, `prezime`, `email`, `password`, `prioritet`) VALUES ('$ime', '$prezime', '$email', '$md_5', 'P')";
    $mysqli->query($sql);
    $result = $mysqli->query("SELECT korisnikID FROM korisnik WHERE email = '$email'");
    $id = $result->fetch_assoc();
    $korisnikID = $id['korisnikID'];
    $mysqli->query("INSERT INTO `predavac`( `korisnikID`) VALUES ('$korisnikID')");
    session_start();
    die(Header("Location: ../admin/admin.php"));

?>