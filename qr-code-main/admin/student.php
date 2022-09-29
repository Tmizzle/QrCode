<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novi student</title>
    <link rel = "stylesheet" href = "../dist/css/bootstrap.css">
    <link rel = "stylesheet" href = "style.css">

</head>
<body id = "bodyadminpanel">
  
<nav class="navbar bg-primary navbar-dark">
  <a class="navbar-brand" href="./admin.php"><b>ADMIN PANEL</b></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navCollapse">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="./admin.php"><b>INFO</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./smer.php"><b>STUDIJSKI PROGRAMI</b></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="./predmet.php"><b>PREDMETI</b></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="./profesor.php"><b>PROFESORI</b></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="./student.php"><b>STUDENTI</b></a>
    </li>
  </ul>
  </div>  
</nav>

<div class = "container" id = "admincontainer">
<form>
  <div class="form-group">
    <label for="studentime">Ime studenta</label>
    <input type="text" class="form-control" id="studentime" placeholder="Ime">
  </div>
  <div class="form-group">
    <label for="studentprezime">Prezime studenta</label>
    <input type="text" class="form-control" id="studentprezime" placeholder="Prezime">
  </div>
  <div class="form-group">
    <label for="studentindeks">Broj indeksa studenta</label>
    <input type="text" class="form-control" id="studentindeks" placeholder="Broj indeksa">
  </div>
  <button type="submit" class="btn btn-primary">Dodaj studenta</button>
</form>
</div>

<nav class="navbar bg-primary navbar-dark fixed-bottom" id = "copyright">
  <a class="navbar-brand" href="http://kg.asss.edu.rs/">@Copyright Akademija Strukovnih Studija</a>
</nav>


<script src="../dist/js/jquery.js"></script>
<script src="../dist/js/popper.js"></script>
<script src="../dist/js/bootstrap.js"></script>

    
</body>
</html>