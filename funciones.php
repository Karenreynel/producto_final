<?php
 function conectar_bd($clave,$basedatos)
 {
  $conexion = new mysqli('localhost', 'root', $clave, $basedatos);
     
     if ($conexion->connect_error)
     {   
        die('error de conexion (' . $mysqli->connect_error . ') '. $mysqli->connect_error);
     }

return $conexion;
}     

function consulta ($conexion,$consulta_sql)
{
    $resultado=$conexion->query($consulta_sql);
    
    
    if (!$resultado)
    {
        echo 'no se pudo ejecutar la consulta: ' . $conexion->error;
        exit;
    }
    
    return $resultado;
    }
    
?>    