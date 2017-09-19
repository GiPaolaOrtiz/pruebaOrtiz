<?php

class museo
{
    private $id;
    private $nombre;
    private $idciudad;
    
     function __construct($id,$nombre,$idciudad) {
       $this->id = $id;
       $this->nombre = $nombre;
        $this->idciudad = $idciudad;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
    
    function setIdciudad($idciudad){
       $this->idciudad = $idciudad;
     } 
     function getIdciudad(){
       return $this->idciudad;
     }
}

?> 
