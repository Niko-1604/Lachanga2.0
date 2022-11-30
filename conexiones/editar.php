<?php
include('./conexion.php');
include '../img/';
if(isset($_POST['editar'])){
    $historia = $_POST['txtHistoria'];
    $mision=$_POST['txtMision'];
    $vision=$_POST['txtVision'];
    $imagen = $_FILES['fotoHis']['name'];
   

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['fotoHis']['type'];
        $temp  = $_FILES['fotoHis']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo, 'png') || strpbrk($tipo, 'jpg') || strpos($tipo,'webp')))){
         
       }else{
         $query = "UPDATE colectivodeartespopulares SET historia='$historia',imgHistoria='$imagen',Mision='$mision',Vision='$vision' WHERE id=1";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'../img/'.$imagen);   
             
             header('location:../index.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>
