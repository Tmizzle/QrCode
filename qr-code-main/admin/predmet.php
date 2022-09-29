<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novi predmet</title>
    <link rel="stylesheet" href="../dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
    <script src="../dist/js/vue.js" defer></script>
    <script src="./js/predmet-insert.js" defer></script>

</head>

<body id="bodyadminpanel">

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
                <li class="nav-item active">
                    <a class="nav-link" href="./predmet.php"><b>PREDMETI</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./profesor.php"><b>PROFESORI</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./student.php"><b>STUDENTI</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" id="admincontainer">
        <form>
            <div class="form-group">
                <label for="profIme">Naziv predmeta</label>
                <input type="text" class="form-control" id="predmetNaziv" placeholder="Naziv predmeta">
            </div>
            <hr>
            <div id="app">
              <div>
                <label for="select_akademija">Odaberite Akademiju&nbsp;&nbsp;</label>
                <select name="select_akademija" id="select_akademija" @change="doOnChange($event)" class="form-control">
                  <option disabled selected></option>
                  <option value="KG">Kragujevac</option>
                  <option value="AR">Arandjelovac</option>
                  <option value="KS">Krusevac</option>
                  <option value="TS">Trstenik</option>
                </select>
              </div>
              <hr>
              <p>Smer</p>
              <div v-for="(smer, index) in data" class="form-check">
                  <input class="form-check-input" type="radio" :id="'rb' + index" :value="smer + akademija" name="rb">
                  <label class="form-check-label" :for="'rb' + index">
                      {{smer}}
                  </label>
              </div>
              <hr>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Dodaj predmet</button>
            </div>
        </form>
    </div>

    <footer>
        <nav class="navbar bg-primary navbar-dark fixed-bottom" id="copyright">
            <a class="navbar-brand" href="http://kg.asss.edu.rs/" id="footer-text">@Copyright Akademija Strukovnih
                Studija</a>
        </nav>
    </footer>

    <script src="../dist/js/jquery.js"></script>
    <script src="../dist/js/popper.js"></script>
    <script src="../dist/js/bootstrap.js"></script>


</body>

</html>