$(document).ready(function() {
  	event.preventDefault();
	object = JSON.stringify({r: 'InitializeInsertPost'});
	$.post("servo.php", { js_object: object }, 
		function(response)
		{
			var obj = jQuery.parseJSON(response);

			$.each( obj, function( index ) {
				  $('#menuimmagini').append("<option value='"+obj[index].nome+"'>"+obj[index].id+") "+obj[index].nome+"</option>")
				});
			$('#menuimmagini').append("<option value=\"\">NESSUNA IMMAGINE</option>");
			
		}
	);
});