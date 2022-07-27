<?php

include("registrar.php");


    if(isset($_POST['login'])){
            $email=trim($_POST['email']);
            $contraseña=trim($_POST['contraseña']);
            $select= "SELECT * FROM usuarios where email=$email and contraseña=$contraseña";
            $ejecutar=$con->prepare($select);
            if($select){
              header("location:home.php"); 
            
            }else{
                ?>
                <h1>email o contraseña incorrecta</h1>
                <?php
            }
            
            
    }

    // if(!empty($_POST)){
    //   echo "le dio click"
    // }
          
        
        
        
    







