<?php
	include("conexionlocal.php");
	
	$id = $_GET["id"];

	$sql = "DELETE FROM persona WHERE idPersona='$id'";

        
	if ($conn->query($sql) === TRUE) {
		echo "Eliminado existosamente ID = $id";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
