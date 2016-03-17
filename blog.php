<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
	<head>
		<?php @include "head.php"; ?>
	</head>
	<body>
		
		<?php @include "sidebar.php"; ?>
		<?php @include "navbar.php"; ?>
	
	
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2>Blog</h2>
					<div class="fh5co-spacer fh5co-spacer-sm"></div>

					<?php
					
					$orig = "<div id=\"menublog\"> </div>";

					$a = htmlentities($orig);
					$b = html_entity_decode($a);
					echo $b;

					?>					
					
				</div>
				
        		
        	</div>
       </div>
	</div>

	<?php @include "footer.php"; ?>
	<?php @include "script.php"; ?>
	<script type="text/javascript" src="initialize_blog.js"></script>
	
	</body>
</html>
