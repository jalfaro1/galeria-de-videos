<?php
    include("conexion.php");
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

  
<title>GALERIA DE VIDEOS</title>
   
<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
  
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj.css">
  
<style>
.imglist {
  background: #eee;
  padding: 20px;
}
	a.scroll-top {
  color: #fff;
  display: none;
  width: 30px;
  height: 30px;
  position: fixed;
  z-index: 1000;
  bottom: 50px;
  right: 30px;
  font-size: 20px;
  background: #222;
  border-radius: 3px !important;
  text-align: center;
  border: 1px solid hsla(0, 0%, 78%, 0.3)
}
a.scroll-top i {
  position: relative;
  top: 2px;
}
</style>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
	
	<div class="container pt-5">
	<p align="center"> <h2 align="center">Galeria de videos 2</h2></p>


 

 
	
	
	<?
$mysqli = new mysqli('localhost', 'jalfaro', 'leny12', 'videodb');
?>
	<div class="row form-group"> 
		<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Selector de enlaces:</label>
					</div>
		
		<select   class="form-control" id="filter" style="width:400px;" >
        <option value="">Todos</option>
        <?php
          $query = $mysqli -> query ("SELECT DISTINCT category FROM dataporn");
		  
		  
          while ($row2 = mysqli_fetch_array($query)) {
			  
			
			  
			  
            echo '<option  value="'.$row2["category"].'">'.$row2["category"].'</option>';
          }
	
	  
        ?>
	  
	  
      </select>	
	
	
	

	</div>
	<form action="">
				
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Admin
    </button><div class="dropdown-menu">
      <a class="dropdown-item" href="/fancybox-master/index.php">Galeria de videos 1</a>
      <a class="dropdown-item" href="/fancybox-master/admin/index.php">Admin</a>
      <a class="dropdown-item" href="https://bharadwajpro.github.io/m3u8-player/" target="_blank">M3u8 Player</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#"  >Another link</a>
    </div>
		  </form>
	</div>
	
<hr class="my-5" />

<p class="imglist">
	<a href="#" class="scroll-top" title="Ir arriba">
    <i class="fa fa-angle-up"></i>
</a>
	   <?php
		
		



			$query = mysqli_query($con,"SELECT * FROM dataporn WHERE id < 801");
			
			
		$number=0;
	while($row = mysqli_fetch_array($query))
	
		

		  
		{
		
		?> 
	
	
	
	
  <a  class="<?php echo $row['category'];?>" href="<?php echo $row['content'];?>" data-caption="<?php echo $row['title'];?>&nbsp;-&nbsp; <?php echo $row['category'];?>&nbsp;-&nbsp; <?php echo $row['id'];?>">
    <img src="<?php echo $row['thumbnail'];?>" style="width: 170px; height: 120px;"/>
  </a>

	
  <?php

	if ($number%4==4){
						echo '<div class="clearfix" style="content: none;"></div>';
					}
					$number++;		

				}
		 
		 
			?>
	
	
  
</p>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
      <script id="rendered-js" >
// Init fancybox
$().fancybox({
  selector: '.imglist a:visible',
  thumbs: {
    autoStart: true } });



// Simple filter
$('#filter').on('change', function () {
  var $visible,val = this.value;

  if (val) {
    $visible = $('.imglist a').hide().filter('.' + val);

  } else {
    $visible = $('.imglist a');
  }

  $visible.show();
});
//# sourceURL=pen.js
    </script>

  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
    $('[data-fancybox]').fancybox({
  buttons : ['share', 'close'],
  hash : false,
  share : {
    url : function( instance, item ) {
      if (item.type === 'inline' && item.contentType === 'video') {
        return item.$content.find('source:first').attr('src');
      }
      
      return item.src;
    }
  }
});  
    </script>
	
	
	 <script id="rendered-js" >
	$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('a.scroll-top').fadeIn('slow');

    } else {
        $('a.scroll-top').fadeOut('slow');
    }
});

$('a.scroll-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 600);
});
	
	</script>
</body>

</html>
