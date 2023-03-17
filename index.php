<?php 
require_once('controller/plantillaCtrl.php');

$index = new mostrarIndex;

$index->index();

$saludar = 'andres';

$index->saludo($saludar);

?>
