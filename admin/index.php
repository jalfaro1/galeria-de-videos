<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GALERIA DE VIDEOS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
	
<style>
    table{
    table-layout: fixed;
    width: 250px;
}

th, td {
    border: 1px solid blue;
    width: 100px;
    word-wrap: break-word;
}
	
	
	.toTop {
  border: none;
  display: flex;
  right: 1rem;
  bottom: 1rem;
  position: fixed;
  z-index: 9999;
  cursor: pointer;
  transition: opacity 0.3s, transform 0.3s;
  background-color: #252525;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
  border-radius: 0.5rem;
  padding: 0.75rem;
  color: #fff;
}
.toTop:not(.is-visible) {
  pointer-events: none;
  opacity: 0;
  transform: translateY(-2rem);
}
.toTop svg {
  stroke-width: 3px;
  stroke: currentColor;
  fill: none;
  width: 24px;
}

*,
::after,
::before {
  box-sizing: border-box;
}
	
	
        </style>	
	
</head>
<body translate="no">
<nav class="navbar navbar-default">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
   
  <!-- /.container-fluid --> 
</nav>
<div class="container">
	
	<div class="row">
		<div class="">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo Registro</a><a href="http://localhost/fancybox-master/" class="btn btn-primary" >Galeria</a><a href="http://localhost/fancybox-master/Simple filter.php" class="btn btn-primary" >Galeria 2</a>
<?php 
	session_start();
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
?>
<table class="table table-bordered table-striped" style="margin-top:20px;">
	<thead>
		<th style="width: 20px;">ID</th>
		<th style="width: 70px;">Imagen</th>
		<th>Titulo</th>
		<th>Descripcion</th>
		<th>Url Video</th>
		<th style="width: 50px;">Categoria</th>
		<th style="width: 70px;">Acción</th>
	</thead>
	<tbody>
		<?php
			//incluimos el fichero de conexion
			include_once('dbconect.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT * FROM dataporn WHERE id < 700';
				foreach ($db->query($sql) as $row) {
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><img data-alt="<?php echo $row['title'];?>" style="width: 120px; height: 80px;" src="<?php echo $row['thumbnail'];?>" ></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['content']; ?></td>
						<td><?php echo $row['category']; ?></td>
						<td><p>
							<a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
							<a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Borrar</a></p>
						</td>
						<?php include('BorrarEditarModal.php'); ?>
					</tr>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('AgregarModal.php'); ?>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<button class="toTop" id="toTop">
  <svg viewBox="0 0 24 24">
    <path d="m4 16 8-8 8 8"></path>
  </svg>
</button>
  
      <script id="rendered-js" >
// Subir
const toTop = (() => {
  let button = document.getElementById("toTop");
  window.onscroll = () => {
    button.classList[
    document.documentElement.scrollTop > 200 ? "add" : "remove"](
    "is-visible");
  };
  button.onclick = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };
})();
//# sourceURL=pen.js
    </script>
	
	
	
	
</body>
</html>