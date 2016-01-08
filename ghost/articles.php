<h3><a id="dateArticle" style='cursor: pointer;' onclick="muestra_oculta('agosto')">Agosto 2015</a></h3>
<div  class="titleArticle" id="agosto" style="display:none">
	
		<?php
		// Déclaration des paramètres de connexion
		$host = 'localhost';

		// Généralement la machine est localhost
		// c'est-a-dire la machine sur laquelle le script est hébergé

		$user = 'root';

		$bdd = 'ghost';

		$passwd  = '';

		// Connexion au serveur

		$mysqli=new mysqli($host, $user,$passwd,$bdd) or die("erreur de connexion au serveur");
		if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

		// Creation et envoi de la requete
		$query = "SELECT fecha, nombre,direccionphp FROM articulos";

		$result = mysqli_query($mysqli,$query);	

		// Recuperation des resultats

		while($row = mysqli_fetch_array($result)){
			$date = $row[0];
			$nombre=$row[1];
			$href=$row[2];


			$date_explosee = explode("-", $date);

			$jour = $date_explosee[0];
			$mois = $date_explosee[1];
			$annee = $date_explosee[2];
			if ($mois=='08'){
				echo "<a href='affiche_article.php?article=".$href."'>" .$nombre."</a></br>";
			}
		}
		mysqli_close($mysqli);
	?>
	
</div>	
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