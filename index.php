<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-4.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./CSS/Estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<form action="respuesta.php" method="POST">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre">
                            
                            </div>
                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input type="number" name="edad" class="form-control" id="edad">
                            </div>
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <select class="form-control" id="genero">
                                <option value="mujer">Mujer</option>
                                <option value="hombre">Hombre</option>
                                
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="tel">Telefono</label>
                                <input type="number" name="telefono" class="form-control" id="telef">
                            
                            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="correo" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input name="acepta_tyc" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

<script src="./javascript.js"></script>
 <script src="./bootstrap-4.6/js/bootstrap.bundle.min.js"></script>
</body>

</html>