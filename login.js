$(document).ready(function() {
  $("#login").click(function(){
  	event.preventDefault();
    var user = $("#user").val();
    var password = $("#password").val();
    object = JSON.stringify({r: 'Login', u: user, p: password});
	$.post("servo.php", { js_object: object },
		function(response)
		{
			var obj = jQuery.parseJSON(response);
			$.each( obj, function( index ) 
			{
				if(obj[index].r == true)
				{
					window.location.replace("insert_post.php");
				}
				else
				{
					alert("Dati Errati, ridigita!");
					window.location.replace("login.php");
				}
			}
		});
  });
});