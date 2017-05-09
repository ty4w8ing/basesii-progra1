<?php
	include("conexionlocal.php");
	
	$idp = $_GET["idp"];
        $ids = $_GET["ids"];

	$sql = "INSERT INTO listaEspera (idPersona, idSedeBanco) VALUES ('$idp','$ids')";
        
	if ($conn->query($sql) === TRUE) {
		echo "Se ha agregado";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
