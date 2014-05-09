<html>
<?php
   include 'php/head.php';
   include 'clases/ConexionTIS.php';
   $conex = new ConexionTIS();
   $codREP = 6;
   
   $nroArchivo = 5; //para que cargue el nro de archivos para cada docente
   $codRepresent = 6; // el codigo del representante de la empresa
   $nonbreDocument = ARRAY("caratula", "carta", "acta-constitucion", "boleta-garantia", "solvencia-tecnica");
   $codEMPRESA = $conex->getCodEmpresa($codREP);
?>
<body>
	Publicacion y Evaluacion De La Propuesta
    <div>
       <div class="container container-fluid">
         Presentacion Parte: A
            <div class="row">
            <?php
                for ($i=0; $i < $nroArchivo; $i++) { 
            ?>
               <form  method="POST" action="upload.php" enctype="multipart/form-data">
                  <div class="col-sm-4 col-md-3">
                     <div class="thumbnail">
                        <img src="img/logos/logo3.jpg" class="img-rounded col-sm-10 col-md-10" alt="Generic placeholder thumbnail"/>
                     </div>
                     <div class="caption">
                        <h3> <?php echo $nonbreDocument[$i];?></h3>
                        <p>Some sample text. Some sample text.</p>
                        <p>
                           <?php
                           echo '<input name="nombre" type="hidden" value="'.$nonbreDocument[$i].$codEMPRESA[0].'"/>';
                           ?>
                           <input name="parte" type="hidden" value="A"/>
                           <input class="btn btn-primary" name="archivo" type="file" size="35"/>
                           <input class="btn btn-primary" name="enviar" type="submit" value="Subir" />
                           <input name="action" type="hidden" value="upload" />
                        </p>
                     </div>
                  </div>
               </form>
            <?php
                }
            ?>
            </div>
        </div>

       
        <!-- segundo div para la parte B de la presentacion -->
        <div class="container container-fluid">
         <font size="6" color="#000099"> Presentacion Parte: B</font>
         <div class="row">
            <form method="POST" action="upload.php" enctype="multipart/form-data">
               <div class="col-sm-4 col-md-3">
                  <div class="thumbnail">
                     <img src="img/image/icono.png" alt="Generic placeholder thumbnail">
                  </div>
                  <div class="caption">
                     <h3>Contenido Sobre B</h3>
                     <p>Some sample text. Some sample text.</p>
                     <p>
                        <?php
                        echo '<input name="nombre" type="hidden" value="contenidoB'.$codEMPRESA[0].'"/>';
                        ?>
                        <input name="parte" type="hidden" value="B"/>
                        <input class="btn btn-primary" name="archivo" type="file" size="35" /><p>
                        <input class="btn btn-primary" name="enviar" type="submit" value="Subir" />
                        <input class="btn btn-primary" name="action" type="hidden" value="upload" />
                     </p>
                  </div>
               </div>
            </form>
         </div>
        </div>
    </div>
</body>
</html>