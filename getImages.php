<?php

//$numcde = $_GET['numCde'];
$tb = array();

include 'connexion.php';

$req = "Select * from galleries";
$traitement = $connect ->prepare($req);
    $traitement -> execute();

while($row = $traitement->fetch()){
    $LienImg = "http://campderieucros.siomende.fr/assets/images/photoGallerie/".$row['titreIG'].".jpg";
            $img = array($row['idIG'],$row['titreIG'],$LienImg);
            array_push($tb,$img);
} echo $js  = json_encode($tb);