<!DOCTYPE html>
<html lang="en">
	<head>

		<?php @include "head.php"; ?>
    	
	</head>
	
    <body>
    	<?php @include "sidebar.php"; ?>
    	<?php @include "navbar.php"; ?>

		    <div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 centered">
						<form action="" method="POST" id="submitForm">
				    		<div id="loading"></div>
				    		<h2>Login</h2>
				    			<input class="form-control" type="text" name="user" id="user">
				    			<input class="form-control" type="password" name="password" id="password">
				    			<br>
				    		<input type="submit" class="btn btn-info" value="Login" id="login">
				    	</form>
					</div><!-- /col-lg-8 -->
				</div><!-- /row -->
		    </div> <!-- /container -->

    	<?php @include "footer.php"; ?>
    	
    	<?php @include "script.php"; ?>

    	<script type="text/javascript" src="login.js"></script>

    </body>
</html>