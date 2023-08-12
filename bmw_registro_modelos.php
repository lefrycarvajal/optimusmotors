<?php
include("conexion_db.php");

if(isset($_POST['send'])){

	if(strlen($_POST['nombre']) >= 1 &&
   	  
	   strlen($_POST['correo']) >= 1 &&

	   strlen($_POST['seleccion']) >= 1 &&
	   
	   strlen($_POST['fecha']) >= 1 &&
		 
	   strlen($_POST['direccion']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$seleccion = trim($_POST['seleccion']);
		$fecha = trim($_POST['fecha']);
		$direccion = trim($_POST['direccion']);
		$consulta = "INSERT INTO modelos(nombre, correo, seleccion, fecha, direccion) VALUES ('$nombre','$correo','$seleccion','$fecha','$direccion')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">SU CITA SE HA GUARDADO CORRECTAMENTE</h3>
<?php
		} else {
			?>
	<h3 class="bad">HA OCURRIDO UN ERROR</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">PORFAVOR COMPLETE LOS CAMPOS</h3>
			<?php
			
		}
		
}
	



?>


