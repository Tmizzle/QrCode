<?php
include("db.php");

session_start();

$email = stripcslashes($_REQUEST["email"]);
$password = stripcslashes($_REQUEST["password"]);
$md_5 = md5($password);

$query = $mysqli->query("SELECT email, password, prioritet FROM korisnik WHERE email='$email' AND password ='$md_5'");


if($query->num_rows == 1){

    $data = $query->fetch_object();
    $_SESSION["email"] = $data->email;
    $_SESSION["md_5"] = $data->password;
    $_SESSION["prioritet"] = $data->prioritet;   
    if($_SESSION["prioritet"] == "A"){
        header("Location: ../admin/admin.php");
    }
    else if($_SESSION["prioritet"] == "P"){
        header("Location: ../profesor/profesor.php");
    }
    else{
        header("Location: ../student/student.php");
    }
}
?>