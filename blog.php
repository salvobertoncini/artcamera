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


					<p>
					<img src="images/img_29_large.jpg" class="img-rounded img-responsive"></p>

					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
				
					<p> The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. </p>
					
					
				</div>
				
        		
        	</div>
       </div>
	</div>

	<?php @include "footer.php"; ?>

	<?php @include "script.php"; ?>
	
	</body>
</html>
