
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
            <center><div class="container mt-5">
                    <form  method="post" action="conexiones/usuarios.php">
                        <div class="card" style="width: 30rem">
                            <div class="card-body">
                                <input type="text" name="txtusuario" class="form-control mt-2 " placeholder="Ingrese Usuario">
                                <input type="password" name="txtclave" class="form-control mt-2" placeholder="Ingrese Clave">
                                <input type="submit" class="btn btn-primary btn-block mt-2" name="Ingresar" value="Ingresar">
                            </div>
                        </div>
                    </form>
        </div>
        
    </center>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
