
<!DOCTYPE html>
<html class="no-js">
<head>
	
	<?php @include "head.php"; ?>

</head>
<body>

	<?php @include "sidebar.php"; ?>
	<?php @include "navbar.php"; ?>
	
	<div id="fh5co-main">
		<div class="container">

			<div class="row">

				<div id="fh5co-board" data-columns>

				<?php 
					@include "config.php";
					// estraiamo i dati relativi agli articoli dalla tabella
					$sql = "SELECT * FROM video";
					$query = @mysql_query($sql) or die (mysql_error());

					if(mysql_num_rows($query) > 0){
					  // se la tabella contiene records mostriamo tutti gli articoli attraverso un ciclo
					  while($row = mysql_fetch_array($query)){
					    $id = $row['id'];
					    $video = html_entity_decode(stripslashes($row['video']));
					    $titolo = html_entity_decode(stripslashes($row['titolo']));
					    $descrizione = html_entity_decode(stripslashes($row['descrizione']));
					    $data = $row['data'];

						echo "<div class=\"item\">
							<div class=\"animate-box\">
								".$video."
								<div class=\"fh5co-desc\">
									<a href=\"#\">
										<h4>".$titolo."</h4>
									</a>
										".$descrizione."
								</div>
							</div>
						</div>";

					}
				}

				?>

				</div>

			</div>
		</div>
	</div>

	<?php @include "footer.php"; ?>

	<?php @include "script.php"; ?>

</body>
</html>
