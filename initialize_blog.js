(function($) {
  $.fn.anteprima = function(elems,length) {
    $.each($(elems), function() {
      var item_html = $(this).html(); // salvo in una variabile il contenuto dell'elemento
      item_html = item_html.replace(/<\/?[^>]+>/gi, ''); // tolgo eventuali tags HTML
      item_html = jQuery.trim(item_html);  // elimino eventuali spazi bianchi prima e dopo
      $(this).html(item_html.substring(0,length) + '...');
    });
    return this;
  }
})(jQuery);

$(document).ready(function() {
  	event.preventDefault();
	object = JSON.stringify({r: 'InitializeBlog'});
	$.post("servo.php", { js_object: object }, 
		function(response)
		{	
			var obj = jQuery.parseJSON(response);

			$.each( obj, function( index ) {
					var temp = $("<div/>").html(obj[index].articolo).text();
					$().anteprima('.notizia',300);
					
					var temp2 = $("<div/>").html(obj[index].titolo).text();

					var temp3 = $("<div/>").html(obj[index].descrizione).text();

					$('#menublog').append("<p> <h4>"+temp2+"</h4> <center><img src=\""+obj[index].immagine+"\" class=\"img-rounded img-responsive\"></center> </p> <h5>"+temp3+"</h5>  <p>Pubblicato il "+obj[index].data+"</p> <div class=\"notizia\">"+temp+"</div> <p><a href=\"article.php?id="+obj[index].id+"\">Comment / Continue Reading...</a></p><hr>");
				});			
		}
	);
});


