$(document).ready(function() {
  	event.preventDefault();
	object = JSON.stringify({r: 'InitializeBlog'});
	$.post("servo.php", { js_object: object }, 
		function(response)
		{	
			var obj = jQuery.parseJSON(response);

			$.each( obj, function( index ) {
					var temp = $("<div/>").html(obj[index].articolo).text();
					
					var temp2 = $("<div/>").html(obj[index].titolo).text();

					var temp3 = $("<div/>").html(obj[index].descrizione).text();

					$('#menublog').append("<p> <h4>"+temp2+"</h4> <img src=\"show.php?id="+obj[index].id_immagine+"\" class=\"img-rounded img-responsive\"></p> <h5>"+temp3+"</h5>  <p>Pubblicato il "+obj[index].data+"</p> <div class=\"anteprimatesto\">"+temp+"</div> <p><a href=\"article.php?id="+obj[index].id+"\">Comment / Continue Reading...</a></p><hr>");
				});			
		}
	);
});


