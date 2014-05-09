<html>
<?php include 'php/head.php'; ?>
<body>
    <?php
        include 'clases/ConexionTIS.php';
        $conex = new ConexionTIS();
        $codConv = 3; // el codigo de las convocatorias
        
      if ($_POST["action"] == "subidor") {
          // obtenemos los datos del archivo
          $tamano = $_FILES["archivo"]['size'];
          $tipo = $_FILES["archivo"]['type'];
          $archivo = $_FILES["archivo"]['name'];
          //$prefijo = substr(md5(uniqid(rand())),0,6);//generamos una clave
          if ($archivo != "") 
		  {
              // guardamos el archivo a la carpeta img/image/
              //$destino =  "img/image/".$prefijo."_".$archivo;
			  $destino =  "files/convocatorias/".$_POST['nombre'].".pdf";
                          $nombDoc = $_POST['nombre']."pdf";
			  $extencion = strtolower(array_pop(explode(".",$archivo))); //para verificar la extencion de un archivo
                           
                          if($extencion =="pdf"){
				if (copy($_FILES['archivo']['tmp_name'],$destino)){
                                    $nombreArchi=$archivo;
                                    $parte=$_POST['parte'];
                                    //echo $nombreArchi;
                                    //echo $parte;
                                    // $_SESSION['coduser']     esto es una variable de secion donde almacena el codUser
                                    //$conex->insetarDocumentos($codREP, $nombDoc, $destino, $parte);
                                    //echo "muestar = ".$_FILES['archivo']['tmp_name']."<br>";
                                    //echo "<br>El archivo se subio exitosamente, puede verificar en el directorio files de su servidor!!!";
                                    if($parte =="A"){
                                        $conex->insetarAnexosConv($codConv, $destino);
                                        echo "<br>El archivo se subio exitosamente, puede verificar en el directorio files de su servidor!!!";
                                    }  
                                    else {
                                        $conex->insetarAnexoPliego($codConv, $destino);
                                        echo "<br>El archivo se subio exitosamente, puede verificar en el directorio files de su servidor!!!";
                                    }
				} 
                                else 
				  {
					  $status = "Error al subir el archivo";
					  echo $status;
					  return;
				  } 
			  }
			  else
			  {
				$status ="formato no soportado cargue un pdf";
				echo($status);  
			  }
          } 
		  else 
		  {
              $status = "Error al subir archivo";
			  echo $status;
			  return;
          }
		  //echo "<br>El archivo se subio exitosamente, puede verificar en el directorio files de su servidor!!!";
      }
?>
<br>
    <a href="subidaconvocatoria.php">Volver atras</a>
</body>
</html>