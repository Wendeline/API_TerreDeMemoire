<?php

//$numcde = $_GET['numCde'];
$tb = array();

include 'connexion.php';

$req = "Select * from bornes";
$traitement = $connect ->prepare($req);
    $traitement -> execute();

while($row = $traitement->fetch()){
            $borne = array($row['idB'],$row['nomB'],$row['LAG'], $row['LONG']);
            array_push($tb,$borne);
} echo $js  = json_encode($tb);