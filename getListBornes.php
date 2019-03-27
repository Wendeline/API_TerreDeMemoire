<?php

//$numcde = $_GET['numCde'];
$borne = array();

include 'connexion.php';

$req = "Select * from bornes";
$traitement = $connect ->prepare($req);
    $traitement -> execute();

while($row = $traitement->fetch()){
            $borne = array($row['nomB'],$row['LAG'], $row['LONG']);
            array_push($borne);
} echo $js  = json_encode($borne);