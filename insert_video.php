<!DOCTYPE html>
<html lang="en">
	<head>
		<?php @include "head.php"; ?>
        <!-- Bootstrap core JavaScript
        ================================================== -->

        <!-- ckeditor -->
    <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>


	</head>
	
    <body>
    	<?php @include "sidebar2.php"; ?>
        <?php @include "navbar.php"; ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 centered">
                        <form action="" method="POST" id="submitForm">
                            <div id="loading"></div>
                            <h2>Inserisci Video</h2>
                                titolo:   <input class="form-control" type="text" name="titolo" id="titolo">
                                <br>
                                descrizione:   <textarea class="form-control" type="text" name="descrizione" id="descrizione"></textarea>
                                <script>CKEDITOR.replace( 'descrizione' );</script>
                                <br>
                                IFRAME VIDEO: <textarea type="text" name="video" id="video"></textarea>
                                <script>CKEDITOR.replace( 'video' );</script>
                                <br>
                                <input type="submit" class="btn btn-info" value="Insert" id="Insert">
                        </form>
                    </div><!-- /col-lg-8 -->
                </div><!-- /row -->
            </div> <!-- /container -->

    	<?php @include "footer.php"; ?>
        <?php @include "script.php"; ?>

        
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="insert_video.js"></script>

    </body>
</html>