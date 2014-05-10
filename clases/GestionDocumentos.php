<?php
include 'ConexionTIS.php';

/**
 * @author milver
 */
class GestionDocumentos {
   private $conexion;
   public function __construct() {
      $this->conexion=new ConexionTIS();
   }
   function dameDocumentosTipoPresentacion() {
      $resultado=  $this->conexion->dameDocumetosPresentacion();
      while ($regDDTP = pg_fetch_assoc($resultado)) {
         echo '<option value="'.$regDDTP['codigo'].'">'.$regDDTP['nombre'].'</option>';
      }
   }
   function dameTodoDocumentosConvActual($codConv) {
      $resultadoDTDCA=  $this->conexion->dameDocumentosSubidosPorLaConvocatoria($codConv);
      while ($regDTDCA = pg_fetch_assoc($resultadoDTDCA)) {
         echo '<tr>
            <td>
               '.$regDTDCA['nombre'].'
            </td>
            <td>
               '.$regDTDCA['tipo'].'
            </td>
            <td>
               '.$regDTDCA['nota'].'
            </td>
            <td>
               '.$regDTDCA['ruta'].'
            </td>
            <td>
               <a href="'.$regDTDCA['ruta'].'" class="btn btn-link">Descargar<span class="glyphicon glyphicon-download-alt"></span></a>
            </td>
         </tr>';
      }
   }
}
?>