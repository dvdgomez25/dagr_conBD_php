<?php
$host = "localhost";
$user ="root";
$password ="";
$database = "tiendaimpresora";
$conectar = mysqli_connect($host, $user, $password, $database);

if ($conectar){
    echo "Conectado"."</br>";
    $idCliente = $_POST['idCliente'];
    $nombreC = $_POST['nombre'];
    $ciudadC = $_POST['cuidad'];
    
    //$consultar="select * from cliente";
    $consultar = "INSERT INTO cliente (idCliente, nombre, ciudad) values ($idCliente, '$nombreC', '$ciudadC')";
    $resultado = mysqli_query($conectar, $consultar);
    echo $resultado;
    if($resultado){
        echo "Perfil almacenado";
    }
    else{echo "ERROR ERROR!!! en la ejecucion de la consulta";}
    
    if(mysqli_close($conectar)){
        echo "Desconexion realizada";
    }
    else{echo "ERROR en la desconexion";}
    
    
}
else{
    echo "JODIDO";
}

