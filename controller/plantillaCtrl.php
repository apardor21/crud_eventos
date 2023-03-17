<?php

class mostrarIndex
{
    public function index(){
        $contenido = 'views/plantilla.php';
        include($contenido);
    }

    public function saludo($saludo)
    {
        echo 'saludos '.$saludo;
        
    }
}
 
 
 


?>
