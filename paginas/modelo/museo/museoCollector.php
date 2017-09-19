<?php

include_once('museo.php');
include_once("../../modelo/Collector.php");


class ciudadnCollector extends Collector
{
  
  function showMuseos() {
    $rows = self::$db->getRows("SELECT * FROM museo ");   
    $arrayMuseo= array();        
    foreach ($rows as $c){
      $aux = new museo($c{'id'},$c{'nombre'},$c{'idciudad'});
      array_push($arrayMuseo, $aux);
    }
    return $arrayMuseo;        
  }
    
   

  function deleteMuseo($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.museo where id = ?", 
                  array( $id ));
  }
  function createCiudadn($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.ciudadN (nombre) VALUES (?)", array("{$nombre}"));
  }
}
?>