<?php
include("conexion.php");



if($_POST){// este es para que entre a post ya que lo puede tomar como get y no toma los datos del formulario 
    if(isset($_POST['registrar'])){
        if(strlen($_POST['email'])>=1 && strlen($_POST['contraseña'])>=1){
            $nombre=trim($_POST['nombre']);
            $email=trim($_POST['email']);
            $contraseña=trim($_POST['contraseña']);
            $insert="INSERT INTO usuarios( nombre, email, contraseña) VALUES ('$nombre','$email','$contraseña')";
            $ejecutar=mysqli_query($con,$insert);
             header("location:home.php");
        }else{
           
        }
        
    }





 }



 
?>