<?php

include_once('ciudadn.php');
include_once("../../modelo/Collector.php");


class ciudadnCollector extends Collector
{
  
  function showciudadesn() {
    $rows = self::$db->getRows("SELECT * FROM ciudadn ");   
    $arrayCiudadn= array();        
    foreach ($rows as $c){
      $aux = new ciudadn($c{'idciudad'},$c{'nombre'});
      array_push($arrayCiudadn, $aux);
    }
    return $arrayCiudadn;        
  }
    function showciudadn($id) {
    $row = self::$db->getRows("SELECT * FROM ciudadN where idciudad= ?", array("{$id}"));
    $ObjCiudadn= new ciudadn($row[0]{'idciudad'},$row[0]{'nombre'});
    return $ObjCiudadn;        
  }

  function updateCiudadn($id, $nombre){
      $insertrow= self::$db->updateRow
                  ("UPDATE public.ciudadN SET nombre= ? where idciudadn = ?", 
                  array( "{$nombre}",$id ));
  }

  function deleteCiudadn($id){
    $insertrow= self::$db->deleteRow
                  ("DELETE FROM public.ciudadn where idciudad = ?", 
                  array( $id ));
  }
  function createCiudadn($nombre){
    $insertrow= self::$db->insertRow
                  ("INSERT INTO public.ciudadN (nombre) VALUES (?)", array("{$nombre}"));
  }
}
?>