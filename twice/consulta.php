<?php
include("conexion.php");

if(isset($_POST['enviar'])){
    if(strlen($_POST['nombre'])>=1 && strlen($_POST['password'])>=1){
        $nombre=trim($_POST['nombre']);
           $password=trim($_POST['password']);
           $insertar="INSERT INTO usuario( nombre, password) VALUES ('$nombre','$password')";
           $mostrar= mysqli_query($coneccion,$insertar);

           if($mostrar){
            ?>
            <h3 class="ok"> la conexion es excelente </h3>
            <?php

           }else{
            ?>
            <h3 class="ok"> la conexion es erronea </h3>
            <?php
           }
    }
}
?>