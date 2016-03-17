<?php
      @include "config.php";
      $result = false;
      $immagine = '';
      $size = 0;
      $type = '';
      $nome = '';
      $max_size = 30000000000;
      $result = @is_uploaded_file($_FILES['file']['tmp_name']);
      if (!$result)
      {
      echo "Impossibile eseguire l'upload.";
      }else{
      $size = $_FILES['file']['size'];
      if ($size > $max_size)
      {
        echo "Il file è troppo grande.";
      }
      $type = $_FILES['file']['type'];
      $nome = $_FILES['file']['name'];
      $immagine = @file_get_contents($_FILES['file']['tmp_name']);
      $immagine = addslashes ($immagine);
      $sql = "INSERT INTO `image`(`id`, `immagine`, `dimensione`, `tipo`, `nome`, `data`) VALUES (null,'$immagine','$size','$type','$nome', CURDATE())";
      $result = @mysql_query ($sql) or die (mysql_error());
      echo "Caricamento effettuato";
      echo "<script>
      function continueExecution()
      {
            location.replace(\"insert_image.php\")
      }
      setTimeout(continueExecution, 1500)
      </script>";
      }
?>