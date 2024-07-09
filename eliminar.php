<?php

include('bd.php');

$id = $_REQUEST['id'];
$sql ="DELETE FROM film2 where id = $id" or die("error al eliminar");

$resultado = $conex -> query($sql);

if ($resultado) {

    header("Location:mostrar.php");

}else{

    echo "No se elimino el dato";

}

?> 