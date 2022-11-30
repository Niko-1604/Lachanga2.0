<?php
include './conexiones/conexion.php';
$varsesion= $_SESSION['Username'];
if ($varsesion==null || $varsesion='') {
    header("location:login.php");
}else{

include './conexiones/paginaPrincipalinformacion.php';    
}
?>
<?php

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/> 
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 
    </head>
    <body>
        <h1>Hola <?php echo  $_SESSION['Username']; ?>
            <a href="conexiones/salir.php">salir</a></h1>
        
        <table class="table" >
  <thead class="thead-dark">
    <tr>
        <th  colspan="2" scope="col" class="text-center">Configuracion De Nuestra Pagina
          
        </th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">pagina</th>
      <td><button type="button" class="btn btn-outline-success" data-toggle="modal" 
                  data-target="#agregarProductoModal" >Success</button></td>
                  
                  
                  
  <div class="modal fade" id="agregarProductoModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-black" style="background-color: #00659B;">
                        <h5 class="modal-tittle" style="color: white">Factura</h5>
                       
                    </div>

                    <form action="conexiones/editar.php" method="POST" class="was-validated" enctype="multipart/form-data">
                        <div class="modal-body">


                    <div class="container-fluid mt-1 me-1">
                        <div class="row" style=";justify-content: center"> 
                            
                                <div class="card m-5" style="width: 10rem;background: transparent;">
                                <img src="" class="img-fluid" alt="...">
                           
                                </div>  
                        
                        </div>
                    </div>
                            
                                                           
    
                <label for="exampleFormControlTextarea4">Texto Historia</label>
                     
                <input type="text" required class="form-control" value=" <?php foreach($resultado as $row){ ?>  <?php echo $row['historia']; ?>  <?php }?>" name="txtHistoria" />

                        
         


                            <div class="form-group">
                                 <div class="col-md-6">
                                     <img src="" class="img-fluid" alt="imgencenttro"> 
                        <input type="file" class="form-control" name="fotoHis" >
                    </div>
                            </div>


                            <div class="form-group purple-border">
                <label for="exampleFormControlTextarea4">Texto Mision</label>
                    <input type="text" required class="form-control" value=" <?php foreach($resultado as $row){ ?>  <?php echo $row['Mision']; ?>  <?php }?>" name="txtMision" />
             </div>


                                        
                <label for="exampleFormControlTextarea4">Texto Vision</label>
                    <input type="text" required class="form-control" value=" <?php foreach($resultado as $row){ ?>  <?php echo $row['Vision']; ?>  <?php }?>"
                            name="txtVision" />
             
                            
                            

                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit" name="editar" value="editar">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
      
        
      
    </tr>
    
  </tbody>
</table>

     <!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>  
    <script src="https://kit.fontawesome.com/d826e2fbf6.js" crossorigin="anonymous"></script>       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </body>
</html>
