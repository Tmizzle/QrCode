<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/student.js" defer></script>
    <script src="../dist/js/qrcode.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container centered">
        <div class="row">
            <div class="col-3">
                <?php
                    echo "<p id='indeks'>007/2019</p>";
                ?>
            </div>
            <div class="col-6">


                <div class="card text-white bg-dark " style="text-align:center">
                    <h3 class="card-header">Dobro dosao: Nina Nikolic </h3>
                
                    <div class="row text-muted" style="text-align:center">
                        <div class="col-4">
                        <div class="qrdiv" id="qrdiv">
                            <div class="qrcode" id="qrcode" title="005/2019">
                                <canvas width="260" height="260" style="display: none;"></canvas><img alt="Scan me!" src="data:image/png;base64,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" style="display: block;"></div>
                                <button id="downloadBtn">Preuzmi QR kod</button>
                            </div>
                        </div>
                        <a href="promena.php">
                            <button>Change Password</button>
                        </a>
                    </div>




                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
</body>

</html>