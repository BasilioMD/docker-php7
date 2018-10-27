<?php

$conexion = mysqli_connect( "bbdd7" , "root", "root" ) or die ( "No se ha podido conectar al servidor de Base de datos" );
$db = mysqli_select_db( $conexion, "bbdd" ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
$consulta = "SELECT * FROM Personas";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos" );

echo "<table borde='2'><tr><th>id</th><th>nombre</th></tr>";

while ( $columna = mysqli_fetch_array( $resultado ) ){
 echo "<tr>";
 echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td>";
 echo "</tr>";
}

echo "</table>";

mysqli_close( $conexion );

?>

