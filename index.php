<?php
    include("conexion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	  <title>GALERIA DE VIDEOS</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
    <link rel="stylesheet"  href="fancybox.css" />
	  	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
    
    <link rel="stylesheet" href="estilos.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	     <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
        <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
	  
	  
	  
	
	  
	  
	  
	  
	  
<style>
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

body {
  background-color: #e2e6e9;
}

.demo {
  padding: 2rem;
}
.demo-content {
  background-color: #fff;
  padding: 2rem;
  margin: 1rem auto;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  max-width: 600px;
  border-radius: 0.5rem;
}

.skeleton > * {
  background-color: #f3f5f6;
}
.skeleton > * + * {
  margin-top: 1rem;
}
.skeleton-line {
  padding-bottom: 2rem;
}
.skeleton-block {
  padding-bottom: 50%;
}
</style>	  
	  
	 
	 
  </head>
  <body translate="no">
	   <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE id < 801");
	$rowcountt = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql))
	{
		?>
	  
	     	<?php
			}
			
			?>  
	  
	  
	   <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE category = 'sexo'");
	$rowcountse = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql))
	{
		?>
	  
	     	<?php
			}
			
			?> 	  
	  
   <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE category = 'vivo'");
	$rowcountv = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql))
	{
		?>
	  
	     	<?php
			}
				
			?> 	  
	  
  <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE category = 'striptease'");
	$rowcounts = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql))
	{
		?>
	  
	     	<?php
			}
				
			?> 	  
	  
	 <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE category = 'porno'");
	$rowcountp = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql))
	{
		?>
	  
	     	<?php
			}
			
			?>   
	  
	  
	   <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE category = 'anal'");
	$rowcounta = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql))
	{
		?>
	  
	     	<?php
			}
			
			?>  
	  
	  
	  
	  
	  <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE category = 'otros'");
	$rowcount = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql))
	{
		?>
	  
	     	<?php
			}
			
			?> 
	  
  <?php
$sql = mysqli_query($con,"SELECT * FROM dataporn WHERE category = 'culos'");
	$rowcountc = mysqli_num_rows($sql);
	while($row	 = mysqli_fetch_array($sql));
		
		
	{
		?>
	  
	     	<?php
			}
				
			?>	  
	  <div class="contenedor">
	  <header>
			<div class="logo">
				<h1>Galeria de videos</h1>
				
			</div>
		  
		  
			<form action="">
				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">&nbsp;&nbsp;
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Admin
    </button><div class="dropdown-menu">
      <a class="dropdown-item" href="/fancybox-master/Simple filter.php">Simple filter</a>
      <a class="dropdown-item" href="/fancybox-master/admin/index.php">Admin</a>
      <a class="dropdown-item" href="https://bharadwajpro.github.io/m3u8-player/" target="_blank">M3u8 Player</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/fancybox-master/docs/demo.html" target="_blank" >Pruebas</a>
    </div>
		  </form>
			<div class="categorias" id="categorias">
			<p class="btn btn-outline-primary">	<a href="#" class="activo" data-toggle="tooltip" title="<?php echo $rowcountt;?>">Todos</a></p>
				<p class="btn btn-outline-secondary"><a href="#" data-toggle="tooltip" title="<?php echo $rowcountse;?>">sexo</a></p>
				<p class="btn btn-outline-success"><a href="#" data-toggle="tooltip" title="<?php echo $rowcountv;?>">Vivo</a></p>
				<p class="btn btn-outline-info"><a href="#" data-toggle="tooltip" title="<?php echo $rowcounts;?>">Striptease</a></p>
				<p class="btn btn-outline-warning"><a href="#" data-toggle="tooltip" title="<?php echo $rowcountc;?>">Culos</a></p>
               <p class="btn btn-outline-danger"> <a href="#" data-toggle="tooltip" title="<?php echo $rowcountp;?>">Porno</a></p>
			 <p class="btn btn-outline-danger"> <a href="#" data-toggle="tooltip" title="<?php echo $rowcounta;?>">Anal</a></p>
				<p class="btn btn-outline-dark"> <a href="#" data-toggle="tooltip" title="<?php echo $rowcount;?>">Otros</a></p>
			</div>
		</header>
	  
	   <div class="row"  align="center"  style="margin-left: 90px;">
	  <section class="grid row" id="grid">
	  
		   <?php
		
		



			$query = mysqli_query($con,"SELECT * FROM dataporn WHERE id  < 801");
			
			
		$number=0;
	while($row = mysqli_fetch_array($query))
	
		

		  
		{
		
		?>  
		
		 <div class="item"
				 data-categoria="<?php echo $row['category'];?>"
				 data-etiquetas="<?php echo $row['title'];?>"
				 data-descripcion="<?php echo $row['description'];?>"> 
		  
		  <div class="item-contenido">
		     <a href="<?php echo $row['content'];?>" data-fancybox="video-gallery" data-caption="<?php echo $row['title'];?>&nbsp;-&nbsp; <?php echo $row['category'];?>&nbsp;-&nbsp; <?php echo $row['id'];?>" ><img data-alt="<?php echo $row['title'];?>" style="width: 180px; height: 120px;" src="<?php echo $row['thumbnail'];?>" ></a>
			  </div>
			</div>



	<?php

	if ($number%4==4){
						echo '<div class="clearfix" style="content: none;"></div>';
					}
					$number++;		

				}
		 
		 
			?>
		  
		
		  	
			 </section>   
		</div>	 
     

       
      
   
		  
		
		  
		  
		 
	 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
	  
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind('[data-fancybox]', {
        // Custom options
      });    
    </script>
	  
	  <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
	  <script src="main.js"></script>
	  
	  
	   <script src="videojs-contrib-hls.js"></script>
 <script>
    (function(window, videojs) {
      var player = window.player = videojs('videojs-contrib-hls-player');

      // hook up the video switcher
      var loadUrl = document.getElementById('load-url');
      var url = document.getElementById('url');
      loadUrl.addEventListener('submit', function(event) {
        event.preventDefault();
        player.src({
          src: url.value,
		  autoplay: 1,
          
        });
        return false;
      });
    }(window, window.videojs));
	 
	 
	 
	$('[data-fancybox="images"]').fancybox({
  caption : function( instance, item ) {
    var caption = $(this).data('caption') || '';

    if ( item.type === 'image' ) {
      caption = (caption.length ? caption + '<br />' : '') + '<a href="' + item.src + '">Download image</a>' ;
    }

    return caption;
  }
}); 
	 
	 
	 
	 
  </script>
	  
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