<?php

require_once  ("config.php");

//$sql = new Sql ();

//$usurarios = $sql ->select ("SELECT *FROM  tbusuarios");



//echo json_encode($usurarios);

$root =new Usuario ();
$root ->loadbyId (3);


?>