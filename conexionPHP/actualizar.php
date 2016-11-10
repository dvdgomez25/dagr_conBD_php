<?php
// conexion con la base de datos

    function actualizarCliente(){
        echo "hola";
        }
        
$host = "localhost";
$user ="root";
$password ="";
$database = "tiendaimpresora";
$conectar = mysqli_connect($host, $user, $password, $database);

    $consultar = "select * from cliente";
    $datos = mysqli_query($conectar, $consultar);
    
    echo "<table border = 'solid'>";
    echo "<tr><td>ID Cliente</td>"
    . "<td>Nombre Cliente</td>"
    . "<td>Ciudad Cliente</td><tr>";
    
    while ($row = mysqli_fetch_array($datos)){
        echo "<tr>";
        
        echo "<td><a onClick='actualizar.php?id=".$row['idCliente']."'>".$row['idCliente']."</a></td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['ciudad']."</td></tr>";
    }
    
    echo "</table>";
    
      
