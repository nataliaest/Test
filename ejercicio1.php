<?php
$precios = array ("","1,3","2,2","4,55","","2");
$nuevosPrecios = modificar($precios);
imprimir($nuevosPrecios);

function imprimir($ar){
    $primero = true;
    foreach ($ar as $elemento){
        if (empty($elemento)){
            $elemento = "vacío";
        }            
        if($primero){
            echo $elemento;
            $primero = false;
        }
        else{
            echo " - " .$elemento;      
        }     
    }
}

function modificar($cadena)
{
    for ($i = 0; $i < count($cadena); $i++){
        $palabra = $cadena[$i];
        $cadena[$i] = str_replace(",",".",$palabra);
    }
    return $cadena;
}



?>