<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>subida Archivos</title>
</head>
<body>
   <br>
   <h1> </h1>
  <?php
        include 'clases/ConexionTIS.php';
        $conex = new ConexionTIS();
        
      if ($_POST["action"] == "upload") {
          // obtenemos los datos del archivo
          $tamano = $_FILES["archivo"]['size'];
          $tipo = $_FILES["archivo"]['type'];
          $archivo = $_FILES["archivo"]['name'];
          //$prefijo = substr(md5(uniqid(rand())),0,6);//generamos una clave
          if ($archivo != "") 
		  {
              // guardamos el archivo a la carpeta img/image/
              //$destino =  "img/image/".$prefijo."_".$archivo;
			  $destino =  "files/empresas/".$_POST['nombre'].".pdf";
                          $nombDoc = $_POST['nombre']."pdf";
			  $extencion = strtolower(array_pop(explode(".",$archivo))); //para verificar la extencion de un archivo
                           
                          if($extencion =="pdf"){
				if (copy($_FILES['archivo']['tmp_name'],$destino)){
                                    $nombreArchi=$archivo;
                                    echo $nombreArchi;
                                    $parte=$_POST['parte'];
                                    $codREP = 6;
                                    // $_SESSION['coduser']     esto es una variable de secion donde almacena el codUser
                                    $conex->insetarDocumentos($codREP, $nombDoc, $destino, $parte);
                                    //echo "muestar = ".$_FILES['archivo']['tmp_name']."<br>";
                                    echo "<br>El archivo se subio exitosamente, puede verificar en el directorio files de su servidor!!!";	  
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
<a href="evaluacionpropuesta.php">Volver atras</a>
</body>
</html>