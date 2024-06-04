<?php
include("conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre=$_POST['nombre'];
    $passwor=$_POST['password'];

    $sql="INSERT INTO usuario(nombre,password) VALUES('$nombre','$password')";
    if(mysqli_query($coneccion,$sql)){
        echo "REGISTRADO";
    }else{
        echo "NO REGISTRADO".mysqli_error($coneccion);
    }
}
mysqli_close($coneccion);