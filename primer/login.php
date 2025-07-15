<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

    <body>

        <?php require_once "html_delovi/navigacija.php" ?>

        <div class="container d-flex justify-content-center mt-4">
            <form class="col-md-4 col-12" action="modeli/loginUser.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email adresa</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="examplePassword" class="form-label">Lozinka</label>
                    <input type="password" name="sifra" class="form-control" id="examplePassword">
                </div>
                <button class="btn btn-primary w-100">Uloguj me</button>
            </form>
        </div>
        
    </body>

</html>