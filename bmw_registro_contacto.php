<?php
include("conexion_db.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['nombre']) >= 1 &&
   	  
	   strlen($_POST['apellido']) >= 1 &&

	   strlen($_POST['correo']) >= 1 &&
	   
	   strlen($_POST['asunto']) >= 1 &&
		 
	   strlen($_POST['mensaje']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$correo = trim($_POST['correo']);
		$asunto = trim($_POST['asunto']);
		$mensaje = trim($_POST['mensaje']);
		$consulta = "INSERT INTO datos_contacto(nombre, apellido, correo, asunto, mensaje) VALUES ('$nombre', '$apellido', '$correo', '$asunto', '$mensaje')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">SU MENSAJE SE HA ENVIADO CORRECTAMENTE</h3>
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


