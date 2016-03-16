$(document).ready(function() {
  $("#Insert").click(function(){
  	event.preventDefault();
	var titolo = $('#titolo').val(), descrizione = CKEDITOR.instances['descrizione'].getData(), video = CKEDITOR.instances['video'].getData();
    object = JSON.stringify({r: 'InsertVideo', t: titolo, d: descrizione, v: video});
	$.post("servo.php", { js_object: object }, 
		function(msg){
			console.log(msg);
			if(msg)
			{
				alert("Video inserito con successo!");
				location.reload();
			}
		});
  });
});