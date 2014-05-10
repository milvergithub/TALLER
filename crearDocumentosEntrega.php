<?php
   include 'php/head.php';
?>
<div class="container container-fluid">
   <button class="btn btn-primary btn-sm" onclick="anadirDocumetosPresentacion();">+ documentos</button>
   <form class="form-group panel-info" method="post" enctype="multipart/form-data" action="php/validarDocumentosEntrega.php">
      <table class="table table-hover" id="tablaDocumentosPresentacion">
         <tr><td>nombre</td><td>tipo</td><td>calificacion</td><td>archivo<span class="glyphicon glyphicon-open"></span></td><td><span class="glyphicon glyphicon-export"></span></td></tr>         
         <?php include './php/documentosEntrega.php'; ?>
         <tr>
            <td><input class="form-control input-sm" type="text" name="nombre"/></td>
            <td>
               <select class="form-control" name="tipo">
                  <option value="1">presentacion parte A</option>
                  <option value="2">presentacion parte B</option>
               </select>   
            </td>
            <td>
               <input class="form-control input-sm" type="text" name="calificacion"/>
            </td>
            <td>
               <input type="file" name="archivo" class="btn btn-primary" title="subir archivo"/>
            </td>
            <td>
               <input type="submit" class="btn btn-primary btn-sm"/>
            </td>
         </tr>
      </table>
   </form>
</div>