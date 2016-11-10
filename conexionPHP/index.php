<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conexion con PHP</title>
    </head>
    <body>
        <div>
            <h1>Conexion con PHP</h1>
        </div>
        <menu>
            <li><a href="consultarCliente.php">Consultar Clientes</a></li>
            <li><a href="actualizar.php">Actualizar</a></li>
            <li><a href="GuardarCliente.html">Guardar</a></li>
            <li><a href="eliminar.php">Eliminar</a></li>
            <li><button onClick="'index.php?hello=true'">fffEliminar</button></li>
        </menu>  
        <?php
        echo "<h1>Hola</h1>";
          function runMyFunction() {
            echo 'I just ran a php function';
          }

          if (isset($_GET['hello'])) {
            runMyFunction();
          }
         ?> 


        <p>Hello there!</p>
        <a href='index.php?hello=true'>Run PHP Function</a>

        
    </body>
</html>
