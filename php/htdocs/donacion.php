<?php
	include("conexionlocal.php");
	
	$idp = $_GET["idp"];
        $ids = $_GET["ids"];

	$sql = "INSERT INTO donacion (idPersona, idSedeBanco) VALUES ('$idp','$ids')";
        
	if ($conn->query($sql) === TRUE) {
		echo "Donacion realizada";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
