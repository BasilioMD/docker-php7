<html>
 <head>
  <title>Bienvenido</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
    	<?php echo "<h1><u>Datos</u></h1>"; 
	
	// Conectando, seleccionando la base de datos
	$link = mysqli_connect( 'bbdd7' , 'root' , 'root' ) 
		or die ( 'No se pudo conectar: ' . mysqli_error() );
	mysqli_select_db( $link, 'bbdd' ) or die( 'No se pudo seleccionar la base de datos' );

	// Realizar una query MySQL
	$query = 'SELECT * FROM Personas';
	$result = mysqli_query( $link, $query ) or die ( 'Consulta fallida: ' . mysqli_error()  );

	// Imprimir los results en HTML
	echo '<table class="table table-striped">';
	echo '<thead><tr><th></th><th>Id</th><th>Nombre</th></tr></thead>';
	while ( $line = mysqli_fetch_array( $result ) ){
		echo '<tr>';
		echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
	    foreach ( $line as $col_value ) {
		echo "<td>$col_value</td>";
	    }
	    echo "</tr>";
	}
	echo '</table>';

	// Cerrar la conexión
	mysqli_close( $link );

	?>

    </div>
</body>
</html>

