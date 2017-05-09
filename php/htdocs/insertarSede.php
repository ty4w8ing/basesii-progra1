<?php
	include("conexionlocal.php");
	
	$nombre = $_GET["nombre"];
        $ubicacion = $_GET["ubicacion"];

	$sql = "INSERT INTO sedebanco (nombre, ubicacion) 
        VALUES ('$nombre', '$ubicacion');";

	if ($conn->query($sql) === TRUE) {
		echo "Insertado existosamente ID = $conn->insert_id";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
