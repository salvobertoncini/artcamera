<?php

@include "config.php";

function returnsomething($return)
{
//Encode the stdClass object containing information and return data as a json string
	$json = json_encode($return);

//Return the json string to the JavaScript
	echo $json;
}

function sanitize($str, $quotes = ENT_NOQUOTES)
{
	$str = htmlspecialchars($str, $quotes);
	return $str;
}

function initialize_index()
{
	$risposta = [];
	$sql = "SELECT * FROM `video` ORDER BY id DESC ";	
	$query = @mysql_query($sql) or die (mysql_error());

	//verifichiamo che siano presenti records
	if(mysql_num_rows($query) > 0)
	{

		while($row = mysql_fetch_array($query))
		{
			$id = $row['id'];
			$video = $row['video'];
			$titolo = $row['titolo'];
			$descrizione = $row['descrizione'];
			$date = $row['data'];

			$data = array('id'=> $id, 'titolo'=>$titolo, 'descrizione'=>$descrizione, 'video'=>$video, 'data'=>$date);
			array_push($risposta, $data);
		}
	}

	return $risposta;
}

function initialize_blog()
{
	$risposta = [];
	$sql = "SELECT * FROM `post` ORDER BY id DESC ";	
	$query = @mysql_query($sql) or die (mysql_error());

	//verifichiamo che siano presenti records
	if(mysql_num_rows($query) > 0)
	{

		while($row = mysql_fetch_array($query))
		{  

			$id = $row['id'];
			$immagine = $row['image'];
			$titolo = $row['titolo'];
			$descrizione = $row['descrizione'];
			$articolo = $row['articolo'];
			$date = $row['data'];

			$data = array('id'=> $id, 'immagine' => $immagine, 'titolo'=>$titolo, 'descrizione'=>$descrizione, 'articolo'=>$articolo, 'data'=>$date);
			array_push($risposta, $data);
		}
	}

	return $risposta;
}

function initialize_insert_post()
{
	$risposta =[];

	$dirname = "images/";
	$images = glob($dirname."*.*");
	$id = 1;

	foreach($images as $image) 
	{
		$data = array('id'=> $id, 'nome'=>$image);
		array_push($risposta, $data);
		$id++;
	}
	
	return $risposta;
}

function insert_post($descrizione, $titolo, $articolo, $id_immagine)
{

	$sql = "INSERT INTO `post`(`id`, `image`, `titolo`, `descrizione`, `articolo`, `data`) VALUES (null,'$id_immagine','$titolo','$descrizione','$articolo',CURDATE())";
	$query = @mysql_query($sql) or die (mysql_error());
	return true;
}

function insert_image($immagine, $dimensione, $tipo, $nome, $titolo, $descrizione, $data)
{

	$sql = "INSERT INTO `image`(`id`, `immagine`, `dimensione`, `tipo`, `nome`, `titolo`, `descrizione`, `data`) VALUES (null,'$immagine','$dimensione','$tipo','$nome','$titolo','$descrizione',CURDATE())";
	$query = @mysql_query($sql) or die (mysql_error());
	return true;
}

function login($username, $password)
{
	$risposta=[];
	$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."';";
	$query = @mysql_query($sql) or die (mysql_error());
	//verifichiamo che siano presenti records
	if(mysql_num_rows($query) > 0)
	{
		array_push($risposta, array('r'=>true));
	}
	else
	{
		array_push($risposta, array('r'=>false));
	}
	return $risposta;
}

function insert_video($titolo, $descrizione, $video)
{

	$sql = "INSERT INTO `video`(`id`, `video`, `titolo`, `descrizione`, `data`) VALUES (null,'".$video."','".$titolo."','".$descrizione."',CURDATE())";
	$query = @mysql_query($sql) or die (mysql_error());
	return true;
}


//Create a stdClass instance to hold important information
	$return = new stdClass(); 
	$return->success = true;
	$return->errorMessage = "";
	$return->data = array();

	$method = $_POST;

//Sanitize the string and json strings received from the front-end
//Corresponds to 'data:{ js_string: val , js_array: arr,  js_object: obj }' in $.ajax
	if(isset($method['js_object'])) $json_object = sanitize($method['js_object']); 

//Decode the json to get workable PHP variables
	$php_object = json_decode($json_object);

	switch ($php_object->r) 
	{
		case "InitializeInsertPost":
			$return = initialize_insert_post();
			returnsomething($return);
			break;

		case "InitializeBlog":
			$return = initialize_blog();
			returnsomething($return);
			break;

		case "InitializeIndex":
			$return = initialize_index();
			returnsomething($return);
			break;

		case "InsertPost":
			$return = insert_post($php_object->d, $php_object->t, $php_object->a, $php_object->i);
			returnsomething($return);
			break;

		case "InsertImage":
			$return = insert_image($php_object->d, $php_object->t, $php_object->a, $php_object->i);
			returnsomething($return);
			break;

		case "InsertVideo":
			$return = insert_video($php_object->t, $php_object->d, $php_object->v);
			returnsomething($return);
			break;

		case "Login":
			$return = login($php_object->u, $php_object->p);
			returnsomething($return);
			break;
	}

	?>