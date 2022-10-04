<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
    
        <div class="card col-6 align-items-center  ">
            <form action="app/AuthController.php" method="post">
                    <legend class="text-center mb-4">
                        Datos accesso
                    </legend>
                    <label >
                        Email
                    </label>
                    <input type="email" name="email" placeholder="write here"
                    class="col-12 mb-4">
                    <label>
                        Password:
                    </label>
                    <input type="password" name="password" placeholder="password"
                    class="col-12 mb-4">
                    <button type="submit" class="btn btn-primary col-12 mb-2">
                        Acceder
                    </button>
                    <input type="hidden" value="access" name="action">
            </form>
        </div>

    
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>