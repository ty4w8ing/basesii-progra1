                <?php
                    include("conexionlocal.php");
                ?>
<html>
	<head>
                <!-- Inclusion de elementos para el proyecto -->
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<script type= "text/javascript">
		
		<!--
                <!--Funcion que hace un bloque visible -->
		function fnMostAgrP(){

			document.getElementById("NuevaPersona").className = "visible";		

			}
                
                <!--Funcion que agrega un elemento a la tabla persona-->                        
		function fnAgrPersona(){

			document.getElementById("NuevaPersona").className = "oculta";		
			
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && xhttp.status == 200) {
				if(xhttp.responseText != 0){	
					alert(this.responseText);	
					}
				    };
				}

                        var nombre = document.getElementById("nombre").value;
                        var apellido = document.getElementById("apellido").value;
                        var cedula = document.getElementById("cedula").value;
                        var tipo = document.getElementById("tipo").value;
                        var rh = document.getElementById("rh").value; 
                        var telegram = document.getElementById("telegram").value;    
                        if(rh == '+'){
                            rh = 1;
                        }

                        xhttp.open("GET", "insertarPersona.php?nombre="+nombre+"&apellido="+apellido+"&cedula="+cedula+"&tipo="+tipo+"&rh="+rh+"&telegram="+telegram, true);
			xhttp.send();	
			
                        }

                <!--Funcion que hace un bloque visible -->			
		function fnMostElimP(){

			document.getElementById("ElimPersona").className = "visible";		
			
			}	


                <!--Funcion que elimina un elemento a la tabla persona-->   
		function fnElimPersona(){

			document.getElementById("ElimPersona").className = "oculta";		
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && xhttp.status == 200) {
				if(xhttp.responseText != 0){	
					alert(this.responseText);	
					}
				    };
				}

                        var id = document.getElementById("ID").value;

                        xhttp.open("GET", "borrarPersona.php?id="+id, true);
			xhttp.send();				
			}		

                <!--Funcion que hace un bloque visible -->  
		function fnMostAgrS(){

			document.getElementById("NuevaSede").className = "visible";		

			}


                <!--Funcion que agrega un elemento a la tabla sedebanco-->   
		function fnAgrSede(){

			document.getElementById("NuevaSede").className = "oculta";		
			
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && xhttp.status == 200) {
				if(xhttp.responseText != 0){	
					alert(this.responseText);	
					}
				    };
				}

                        var nombre = document.getElementById("nombreS").value;
                        var ubicacion = document.getElementById("ubicacion").value;

                        xhttp.open("GET", "insertarSede.php?nombre="+nombre+"&ubicacion="+ubicacion, true);
			xhttp.send();	
			
                        }

                <!--Funcion que hace un bloque visible -->

		function fnMostElimS(){

			document.getElementById("ElimSede").className = "visible";		
			
			}

                <!--Funcion que elimina un elemento a la tabla sedebanco--> 
		function fnElimSede(){

			document.getElementById("ElimSede").className = "oculta";
		
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && xhttp.status == 200) {
				if(xhttp.responseText != 0){	
					alert(this.responseText);	
					}
				    };
				}

                        var id = document.getElementById("IDS").value;

                        xhttp.open("GET", "borrarSede.php?id="+id, true);
			xhttp.send();				
			}

                <!--Funcion que hace un bloque visible -->		
		function fnMostDonacion(){

			document.getElementById("donacion").className = "visible";		
			
			}	

                <!--Funcion que realiza una donacion y la almacena en la tabla donacion--> 
		function fnDonar(){

			document.getElementById("donacion").className = "oculta";
		
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && xhttp.status == 200) {
				if(xhttp.responseText != 0){	
					alert(this.responseText);	
					}
				    };
				}
                        
                        var idp = document.getElementById("IDp").value;
                        var ids = document.getElementById("IDs").value;

                        xhttp.open("GET", "donacion.php?idp="+idp+"&ids="+ids, true);
			xhttp.send();				
			}

                <!--Funcion que hace un bloque visible -->
		function fnMostAgrle(){

			document.getElementById("agrle").className = "visible";		
			
			}	

                <!--Funcion que agrega un elemento a la tabla listaespera--> 
		function fnAgrle(){

			document.getElementById("agrle").className = "oculta";
		
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && xhttp.status == 200) {
				if(xhttp.responseText != 0){	
					alert(this.responseText);	
					}
				    };
				}
                        
                        var idp = document.getElementById("idper").value;
                        var idb = document.getElementById("idb").value;

                        xhttp.open("GET", "insertarle.php?idp="+idp+"&ids="+idb, true);
			xhttp.send();				
			}

                <!--Funcion que hace un bloque visible --> 
		function fnMostTrans(){

			document.getElementById("transfucion").className = "visible";		
			
			}	


                <!--Funcion que realiza una transfucion y la agrega a la tabla transfuciones--> 
		function fnTransfucion(){

			document.getElementById("transfucion").className = "oculta";
		
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && xhttp.status == 200) {
				if(xhttp.responseText != 0){	
					alert(this.responseText);	
					}
				    };
				}
                        
                        var idd = document.getElementById("idd").value;
                        var idle = document.getElementById("idle").value;

                        xhttp.open("GET", "transfucion.php?idd="+idd+"&idle="+idle, true);
			xhttp.send();				
			}
		-->
		</script>
	</head>
	<body>
		
		<header>
			<h1> Banco de Sangre CR </h1>
		</header>
		<nav>
			<ul>
				<li> <a href="usuariolocal.php"> Pagina Principal </a> </li>		
			</ul>				
		</nav>
		<main>
                        
			<h2> Sedes </h2>

			<?php  	
				
				$sql = "select * FROM sedeBanco";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<table><tr><th>ID</th><th>Nombre</th>
                                        <th>Ubicacion</th></tr>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["idSedeBanco"]."</td><td>".$row["nombre"]."
                                                <td>".$row["ubicacion"]."</td></tr>";
					}
				}
				echo "</table>";		  
                        ?>		
			<br>

			<button type="submit" formtarget="_blank" onclick="fnMostAgrS()"> Agregar </button>
			<button type="submit" formtarget="_blank" onclick="fnMostElimS()"> Eliminar </button>
			
			<div id="NuevaSede" class="oculta">
                            <form>
                                    <legend> Agregar Sede </legend>
                                    Nombre:  <input id="nombreS" type="text"> <br>
                                    Ubicacion:  <input id="ubicacion" type="text"> <br>
                                    <button type="button" formtarget="_blank" onclick="fnAgrSede()"> Enviar </button>

                            </form>
                        </div>

                        <div id="ElimSede" class="oculta">
			<form>
				<legend> Eliminar Sede </legend>
                                ID:  <input id="IDS" type="text"> <br>
				<button type="button" formtarget="_blank" onclick="fnElimSede()"> Enviar </button>
			</form>	
			</div>	
				
			<h2> Personas </h2>

			<?php  	
				
				$sql = "select * FROM persona";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<table><tr><th>ID</th><th>nombre</th>
                                        <th>apellidos</th><th>cedula</th>
                                        <th>tipo</th><th>rh</th>
                                        <th>telegram</th><th>ultimaDonacion</th></tr>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["idPersona"]."</td><td>".$row["nombre"]."
                                                <td>".$row["apellidos"]."</td><td>".$row["cedula"]."</td>
                                                </td><td>".$row["tipo"]."</td><td>".$row["rh"]."</td>
                                                </td><td>".$row["telegram"]."</td><td>".$row["ultimaDonacion"]."</td></tr>";
					}
				}
				echo "</table>";
				  
                        ?>		
			<br>

			<button type="submit" formtarget="_blank" onclick="fnMostAgrP()"> Agregar </button>
			<button type="submit" formtarget="_blank" onclick="fnMostElimP()"> Eliminar </button>
			
			<div id="NuevaPersona" class="oculta">
                            <form>
                                    <legend> Agregar Persona </legend>
                                    Nombre:  <input id="nombre" type="text"> <br>
                                    Apellido:  <input id="apellido" type="text"> <br>
                                    cedula:  <input id="cedula" type="text"> <br>
                                    tipo:  <input id="tipo" type="text"> <br>
                                    rh:  <input id="rh" type="text"> <br>
                                    telegram:  <input id="telegram" type="text"> <br>
                                    UltimaDonacion:  <input id="udonacion" type="text"> <br>
                                    <button type="button" formtarget="_blank" onclick="fnAgrPersona()"> Enviar </button>

                            </form>
                        </div>

                        <div id="ElimPersona" class="oculta">
			<form>
				<legend> Eliminar Persona </legend>
                                ID:  <input id="ID" type="text"> <br>
				<button type="button" formtarget="_blank" onclick="fnElimPersona()"> Enviar </button>
			</form>	
			</div>	

			<h2> Stock </h2>

			<?php  	
				
				$sql = "SELECT sedeBanco.idSedeBanco as id,
                                        sedeBanco.nombre,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'AB','+') as AB_pos,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'AB','-') as AB_neg,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'A','+') as A_pos,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'A','-') as A_neg,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'B','+') as B_pos,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'B','-') as B_neg,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'O','+') as O_pos,
                                        cantidad_sangre(sedeBanco.idSedeBanco,'O','-') as O_neg
                                        FROM sedeBanco";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<table><tr><th>ID</th><th>Nombre</th>
                                        <th>AB_pos</th><th>AB_neg</th>
                                        <th>A_pos</th><th>A_neg</th>
                                        <th>B_pos</th><th>B_neg</th>
                                        <th>O_pos</th><th>O_neg</th></tr>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."
                                                <td>".$row["AB_pos"]."</td><td>".$row["AB_neg"]."</td>
                                                <td>".$row["A_pos"]."</td><td>".$row["A_neg"]."</td>
                                                <td>".$row["B_pos"]."</td><td>".$row["B_neg"]."</td>
                                                <td>".$row["O_pos"]."</td><td>".$row["O_neg"]."</td></tr>";
					}
				}
				echo "</table>";		  
                        ?>		
			<br>

			<button type="button" formtarget="_blank" onclick="fnMostDonacion()"> CrearDonacion </button>
						
			<div id="donacion" class="oculta">
                            <form>
                                    <legend> Donacion </legend>
                                    IDPersona:  <input id="IDp" type="text"> <br>
                                    IDsede:  <input id="IDs" type="text"> <br>
                                    <button type="button" formtarget="_blank" onclick="fnDonar()"> Enviar </button>

                            </form>
                        </div>

                        <div id="ElimSede" class="oculta">
			<form>
				<legend> Eliminar Sede </legend>
                                ID:  <input id="IDS" type="text"> <br>
				<button type="button" formtarget="_blank" onclick="fnElimSede()"> Enviar </button>
			</form>	
			</div>
	
			<h2> Donaciones </h2>

			<?php  	
				
				$sql = "SELECT donacion.idDonacion, sedeBanco.nombre as sedenombre, donacion.fecha, persona.nombre, persona.apellidos, persona.tipo, persona.rh FROM donacion, persona, sedebanco WHERE persona.idPersona = donacion.idPersona AND donacion.enStock = '1' AND sedeBanco.idSedeBanco = donacion.idSedeBanco ORDER BY sedeBanco.nombre, persona.tipo;";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<table><tr><th>ID</th><th>sedeBanco</th>
                                                        <th>Nombre</th><th>Apellido</th>
                                                        <th>Tipo</th><th>RH</th>
                                                        <th>Fecha</th></tr>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["idDonacion"]."</td><td>".$row["sedenombre"]."
                                                <td>".$row["nombre"]."</td><td>".$row["apellidos"]."</td>
                                                <td>".$row["tipo"]."</td><td>".$row["rh"]."</td>
                                                <td>".$row["fecha"]."</td></tr>";
					}
				}
				echo "</table>";		  
                        ?>		
			<br>
			<h2> Lista Espera </h2>

			<?php  	
				
				$sql = "SELECT listaEspera.idListaEspera, sedeBanco.nombre as sedenombre, listaEspera.fecha, persona.nombre, persona.apellidos, persona.tipo, persona.rh FROM listaespera, persona, sedebanco WHERE persona.idPersona = listaEspera.idPersona AND sedeBanco.idSedeBanco = listaEspera.idSedeBanco AND listaEspera.esperando = '1' ORDER BY sedeBanco.nombre, persona.tipo;";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<table><tr><th>ID</th><th>sedeBanco</th>
                                                        <th>Nombre</th><th>Apellido</th>
                                                        <th>Tipo</th><th>RH</th>
                                                        <th>Fecha</th></tr>";
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["idListaEspera"]."</td><td>".$row["sedenombre"]."
                                                <td>".$row["nombre"]."</td><td>".$row["apellidos"]."</td>
                                                <td>".$row["tipo"]."</td><td>".$row["rh"]."</td>
                                                <td>".$row["fecha"]."</td></tr>";
					}
				}
				echo "</table>";		  
                        ?>		
			<br>

			<button type="submit" formtarget="_blank" onclick="fnMostTrans()"> Transfucion </button>
                        <button type="submit" formtarget="_blank" onclick="fnMostAgrle()"> Agregar </button>
						
			<div id="transfucion" class="oculta">
                            <form>
                                    <legend> Realizar transfucion </legend>
                                    IdListaEspera:  <input id="idle" type="text"> <br>
                                    IdDonacion:  <input id="idd" type="text"> <br>
                                    <button type="button" formtarget="_blank" onclick="fnTransfucion()"> Enviar </button>

                            </form>
                        </div>

			<div id="agrle" class="oculta">
                            <form> 
                                    <legend> Agregar a lista </legend>
                                    IdPersona:  <input id="idper" type="text"> <br>
                                    IdSede:  <input id="idb" type="text"> <br>
                                    <button type="button" formtarget="_blank" onclick="fnAgrle()"> Enviar </button>

                            </form>
                        </div>

	
			<br>
		</main>
	</body>
</html>
