<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/bootstrap.css">
    <link rel="stylesheet" href="./styles/index_style.css">
    <script src="./dist/js/jquery.js" defer></script>
    <script src="./dist/js/bootstrap.js" defer></script>
    <script src="./dist/js/popper.js" defer></script>
    <title>Prijava</title>
</head>

<body class="parent">
    <div class="card child child-width">
        <div class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">Forma za prijavu</h4>
            <hr>
            <p class="text-success text-center">Poruka o uspesnosti prijave</p>
            <form action = "scripts/login.php" method = "posts">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input name="email" class="form-control" placeholder="Email adresa" type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input name="password" class="form-control" placeholder="Lozinka" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Prijava </button>
                </div>
                 
            </form>
        </div>
    </div>
</body>

</html>