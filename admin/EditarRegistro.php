<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$thumbnail = $_POST['nombres'];
			$title = $_POST['apellidos'];
			$description = $_POST['telefono'];
			$content = $_POST['carrera'];
			$category = $_POST['pais'];

			$sql = "UPDATE dataporn SET thumbnail = '$thumbnail', title = '$title', description = '$description', content = '$content', category = '$category' WHERE id = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Registro actualizado correctamente' : 'No se puso actualizar registro';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: index.php');

?>