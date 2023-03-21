<?php

class mostrarIndex
{
    public function index(){
        $contenido = 'views/template.php';
        include($contenido);
    }

    public function saludo($saludo)
    {
        echo 'saludos '.$saludo;
        
    }
}
 
 
 


?>
