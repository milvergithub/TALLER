<?php
class GestionFiles {
   function __construct() {
      
   }
   function validarExtensionImagen($archivo) {
      $extencion=  strtolower(array_pop(explode(".", $archivo)));
      if (($extencion=="jpg")||($extencion=="png")||($extencion=="gif")) {
         $res=TRUE;
      }
      else {
         $res=FALSE;
      }
      return $res;
   }
   function validarExtensionArchivo($archivo) {
      $extencion=  strtolower(array_pop(explode(".", $archivo)));
      if (($extencion=="pdf")||($extencion=="zip")) {
         $res=TRUE;
      }
      else {
         $res=FALSE;
      }
      return $res;
   }
   
   function guardarLogo($archivoLog,$origen) {
      $destino="img/logos/".$archivoLog;
      copy($origen, $destino);
   }
}
