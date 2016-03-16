$(document).ready(function() {
  	event.preventDefault();
	object = JSON.stringify({r: 'InitializeBlog'});
	$.post("servo.php", { js_object: object }, 
		function(response)
		{	
			var obj = jQuery.parseJSON(response);

			$.each( obj, function( index ) {
					var temp = $("<div/>").html(obj[index].articles).text();
					
					var temp2 = $("<div/>").html(obj[index].title).text();
					$('#menublog').append("<p><img src=\"images/img_29_large.jpg\" class=\"img-rounded img-responsive\"></p> <p>Posted on "+obj[index].date+"</p> <h4>"+temp2+"</h4> <div class=\"anteprimatesto\">"+temp+"</div> <p><a href=\"article.php?id="+obj[index].id+"\">Comment / Continue Reading...</a></p><hr>");
				});			
		}
	);
});


