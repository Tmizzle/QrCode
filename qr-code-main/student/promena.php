
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="promenaC.php" method="post">
     	
     	

        <div class="container">
        <h1 class="display-2"> Change Password</h1>
        
            
            <div class="form-group " >
                <label> Old Password</label>
                <input type="password" class="form-control" name="op" placeholder="Old Password">
            </div>

            <div class="form-group ">
                <label for="password"> New Password</label>
                <input type="password" class="form-control" name="np" placeholder="New Password">
            </div>
        
        <div class="form-group ">
            <label for="adress"> Confirm New Password</label>
            <input type="password" class="form-control" name="c_np" placeholder="Confirm New Password">
        </div>

        <button type="submit">CHANGE</button>
        
</div>
</form>
</body>
</html>