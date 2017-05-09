<?php
	include("conexionlocal.php");
	
	$nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $cedula = $_GET["cedula"];  
        $tipo = $_GET["tipo"];
        $rh = $_GET["rh"];
        if($rh == '1'){
            $rh = '+';
        }
        $telegram = $_GET["telegram"];

	$sql = "INSERT INTO persona (nombre, apellidos, cedula, tipo, rh, telegram) 
        VALUES ('$nombre', '$apellido', '$cedula','$tipo', '$rh', '$telegram');";

        
	if ($conn->query($sql) === TRUE) {
		echo "Insertado existosamente ID = $conn->insert_id";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
