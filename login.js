$(document).ready(function() {
  $("#login").click(function(){
  	event.preventDefault();
    var user = $("#user").val();
    var password = $("#password").val();
    object = JSON.stringify({r: 'Login', u: user, p: password});
	$.post("servo.php", { js_object: object }, function(msg){ 
		alert(msg);
		if(msg == true)
		{
			window.location.replace("insert_post.php");
		}

	});
  });
});