<?php
$target_dir = "tmp/";
if(isset($_FILES['blah']))
{
     $dossier = 'tmp/';
     $fichier = basename($_FILES['blah']['name']);
     echo $fichier;
     echo $_FILES['blah']['tmp_name'];
     if(move_uploaded_file($_FILES['blah']['tmp_name'], $target_dir . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
?>
