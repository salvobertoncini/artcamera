<!DOCTYPE html>
<html lang="en">
	<head>
		<?php @include "head.php"; ?>
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
                            <h2>Inserisci Post</h2>
                                titolo:   <textarea class="form-control" type="text" name="titolo" id="titolo"></textarea>
                                <script>CKEDITOR.replace( 'titolo' );</script> 
                                <br>
                                descrizione:   <textarea class="form-control" type="text" name="descrizione" id="descrizione"></textarea>
                                <script>CKEDITOR.replace( 'descrizione' );</script>
                                <br>
                                articolo: <textarea type="text" name="articolo" id="articolo"></textarea>
                                <script>CKEDITOR.replace( 'articolo' );</script>

                                <br>
                                scegli immagine: <select name="image" class="form-control" id="menuimmagini"> </select>
                                <br>
                            <input type="submit" class="btn btn-info" value="Insert" id="Insert">
                        </form>
                    </div><!-- /col-lg-8 -->
                </div><!-- /row -->
            </div> <!-- /container -->

    	<?php @include "footer.php"; ?>
        <?php @include "script.php"; ?>
                <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="initialize_insert_post.js"></script>
        <script type="text/javascript" src="insert_post.js"></script>


    </body>
</html>