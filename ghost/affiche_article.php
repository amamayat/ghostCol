<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<title>Ghost Colombia </title>
	
	<head>
		<link rel="stylesheet" href="css/style2.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script src=//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js></script>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
	</head>
	
	<body>
	<div class="container-narrow">
		<div class="masthead">
		<img src="img/img_ghostCol.jpg"/>
		<div class="row-fluid">
			<div class="span3">
		
				<div class "well sidebar-nav">
						
					<div class="menu" >
						<ul>
							<li ><a  id="active" href = "#">Incipiens</a></li>
							<li ><a style='cursor: pointer;' onclick="muestra_oculta('sousmenu')">Evangelium</a></li>
							<div id="sousmenu" style="display:none">
								<ul>
									<li> <a href="#">Ghost</a></li>
									<li> <a href="album.php">Albumes </a></li>
									<li> <a href="sencillos.php">Sencillos </a></li>
									<li> <a  style="border-bottom:5px solid rgb(27, 10, 10);" href="demos.php">Demos </a></li>
								</ul>
							</div>
							
							<li><a href = "psalmorum.php">psaLmorum</a></li>
							<li><a href = "verbum.php">verbum</a></li>
							<li><a href = "video.php">video</a></li>
							<li><a href = "scriptum.php">scriPtum</a></li>
							<li><a href = "#">Clerus</a></li>
						</ul>
					</div>
					</br></br>
					<div class="articulos">
						<h4 id= "date_create">
								Artículos<br/>
						</h4>
						<?php include "articles.php";?>
						</br></br>
						
					
					</div>
						

				</div>
		</div>
		
		
		
			<div class="span8">
				<?php $href=$_GET['article'];include $href;?>
				
				
				
			</div>
			<div class="span2">
				<?php include "bande-gauche.php" ?>
			</div>
		</div>	
	</div>
	
	
</body>

	<script>
		function muestra_oculta(id){
		if (document.getElementById){ //se obtiene el id
		var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
		el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
		}
		}
		window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
		muestra_oculta(id);/* "contenido_a_mostrar" es el nombre de la etiqueta DIV que deseamos mostrar */
		}
		
		
	</script>
</html>
