<?php
if (isset($_GET['id']))
{
  $id_images = @intval($_GET['id']);
  @include 'config.php';
  $sql = "SELECT * FROM image WHERE id='$id_images'";
  $result = @mysql_query($sql) or die(mysql_error ());
  $row = @mysql_fetch_array($result);
  $id_img = $row['id'];
  $type = $row['tipo'];
  $img = $row['immagine'];
  if (!$id_img)
  {
    echo "Id sconosciuto";
  }else{
    @header ("Content-type: ".$type);
    echo $img;
  }
}else{
  echo "Impossibile soddisfare la richiesta.";
}
?>
