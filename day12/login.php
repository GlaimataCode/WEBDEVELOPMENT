<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid bg-primary text-white text-center p-5">
        <h1>SISTEMA INFORMASAUN ESKOLA</h1>
        <p>Sistema hodi Jere Dadus Estudante hotu iha Eskola ETI-DILI</p>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center m-5">
             <div class="col-md-4 border p-5" style="background-color:azure;"> <!--bele aumenta css tuir nesesidade presiza -->

                <h3>Formulariu Login</h3>
                <hr>

               <form action="login_control.php" method="post">
                    <div class="m-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Hatama Username">
                    </div>
                    <div class="m-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="hatama Password">
                    </div>
                    <div class="m-3">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
               </form>
            </div>
        </div>
    </div>
    <footer class="bg-secondary text-white p-2 fixed-botton text-center">
        <p>&copy;SIE @<?= date('Y')?> | ETI-DILI</p>
    </footer>
</body>
</html>