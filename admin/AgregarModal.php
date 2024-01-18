<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="AgregarNuevo.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombres">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Titulo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidos">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Descripcion:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Video:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="carrera">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Categoria:</label>
					</div>
					<div class="col-sm-10">
						
						
							
						
						
						
			<?php
$mysqli = new mysqli('localhost', 'jalfaro', 'leny12', 'videodb');
?>
		<p><select size="1"  class="form-control" name="pais" style="width:400px;" >
        <option value="">Seleccionar categoria</option>
        <?php
          $query = $mysqli -> query ("SELECT DISTINCT category FROM dataporn");
		  
		  
          while ($valores = mysqli_fetch_array($query)) {
			  
			
			  
			  
            echo '<option  value="'.$valores["category"].'">'.$valores["category"].'</option>';
          }
	
	  
        ?>
	  
	  
      </select>
      			
						
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			</form>
            </div>

        </div>
    </div>
</div>