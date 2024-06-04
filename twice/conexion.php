<?php
$servidor = "localhost";
$nombre = "root";
$password = "";
$bd = "rege";
$puerto ="3586";
$coneccion = mysqli_connect($servidor, $nombre, $password, $bd, $puerto);
if($coneccion){
    echo'conectado';
}else{
        echo'no conectado';

}
?>