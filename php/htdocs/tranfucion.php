<?php
	include("conexionlocal.php");
	
	$idd = $_GET["idd"];
        $idle = $_GET["idle"];

	$sql = "INSERT INTO transfucion (idDonacion ,idListaEspera) VALUES ('$idd','$idle')";
        
	if ($conn->query($sql) === TRUE) {
		echo "Transfucion realizada";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
