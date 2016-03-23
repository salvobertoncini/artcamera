<!DOCTYPE html>
<html lang="en">
	<head>
		<?php @include "head.php"; ?>
	</head>
	
    <body>
    	<?php @include "sidebar2.php"; ?>
        <?php @include "navbar.php"; ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <form role="form" enctype="multipart/form-data" action="upload.php" method="post">
                            <h2>Inserisci Immagine</h2>
                            <br>
                            <input type="file" name="file" size="40"/><br>
                            <input name="submit" type="submit" class="btn btn-info" value="Carica immagine"></input>
                        </form>
                    </div><!-- /col-lg-8 -->
                </div><!-- /row -->
            </div> <!-- /container -->

    	<?php @include "footer.php"; ?>
        <?php @include "script.php"; ?>

    </body>
</html>