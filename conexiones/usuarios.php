<?php
include './conexion.php';


if (isset($_POST['Ingresar'])) {
    $Username=$_POST['txtusuario'];
    $Pass=$_POST['txtclave'];
    
    $select= mysqli_query($conn, "Select * from `integrantes` where nombre='$Username' and contr='$Pass' ");
    $row= mysqli_fetch_array($select);
    if (is_array($row)) {
        $_SESSION["Username"]=$row['nombre'];
        $_SESSION["Pass"]=$row['contr'];
    } else {
        header("Location:login.php");
    }
}

if (isset($_SESSION["Username"])) {
    header("Location:../administracion.php");
}
?>