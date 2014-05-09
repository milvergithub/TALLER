<html>
<?php include 'php/head.php'; ?>
<body>
    <h1> SUBIR CONVOCATORIA</h1>
    <div>
        <div class="container container-fluid">
         SUBIR CONVOCATORIAS
            <div class="row">
            
               <form  method="POST" action="subidor.php" enctype="multipart/form-data">
                  <div class="col-sm-4 col-md-3">
                     <div class="thumbnail">
                        <img src="img/logos/logo3.jpg" class="img-rounded col-sm-10 col-md-10" alt="Generic placeholder thumbnail"/>
                     </div>
                     <div class="caption">
                        <h3> CONVOCATORIA </h3>
                        <p>Some sample text. Some sample text.</p>
                        <p>
                           <input name="nombre" type="hidden" value="convocatoria"/>
                           <input name="parte" type="hidden" value="A"/>
                           <input class="btn btn-primary" name="archivo" type="file" size="35"/>
                           <input class="btn btn-primary" name="enviar" type="submit" value="Subir" />
                           <input name="action" type="hidden" value="subidor" />
                        </p>
                     </div>
                  </div>
               </form>
            </div>
        </div>
        
        
        <div class="container container-fluid">
         <font size="6" color="#000099"> SUBIR PLIEGO DE ESPECIFICACION</font>
         <div class="row">
            <form method="POST" action="subidor.php" enctype="multipart/form-data">
               <div class="col-sm-4 col-md-3">
                  <div class="thumbnail">
                     <img src="img/image/icono.png" alt="Generic placeholder thumbnail">
                  </div>
                  <div class="caption">
                     <h3>PLIEGO DE ESPECIFICACION</h3>
                     <p>Some sample text. Some sample text.</p>
                     <p>
                        <input name="nombre" type="hidden" value="pliego especificacion"/>
                        <input name="parte" type="hidden" value="B"/> 
                        <input class="btn btn-primary" name="archivo" type="file" size="35" /><p>
                        <input class="btn btn-primary" name="enviar" type="submit" value="Subir" />
                        <input class="btn btn-primary" name="action" type="hidden" value="subidor" />
                     </p>
                  </div>
               </div>
            </form>
         </div>
        </div>
        
    </div>
</body>
</html>