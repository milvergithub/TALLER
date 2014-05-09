<?php
include '../clases/RegistroTIS.php';
   $registroDoc=new RegistroTIS();
   
   $usuariod=$_POST['nombreuser'];
   $nombresDoc=$_POST['nombres'];
   $apellidosDoc=$_POST['apellidos'];
   $grupo=$_POST['nrogrupo'];
   $pass=$_POST['password'];
   $emailDoc=$_POST['emailDoc'];
   $telefono=$_POST['telefono'];
   
   if((trim($usuariod)==NULL)|(trim($nombresDoc)==NULL)|(trim($apellidosDoc)==NULL)|(trim($grupo)==NULL)|(trim($pass)==NULL)) {
		echo "Hay Campos Vacios";
		echo '<script type="text/javascript">
               window.location="../registroDoc.php?'.md5("registrocamposvaciosDoc").'";
              </script>';
   }
   if ($registroDoc->usuarioUnico($usuariod)=='t') {
      if ($registroDoc->emailUnico($emailDoc)=='t') {
         if ($registroDoc->verificarGrupo($grupo)=='t') {
            echo "usuario = ".$usuariod."<br>";
            echo "nombres = ".$nombresDoc." ".$apellidosDoc."<br>";
            echo "password = ".$pass."<br>";
            echo "email = ".$emailDoc."<br>";
            echo "telefono = ".$telefono."<br>";
            echo "grupo = ".$grupo."<br>";
            $connec=new ConexionTIS();
            $connec->registrarUsuarioDoc($grupo, $usuariod, $pass, $nombresDoc." ".$apellidosDoc,$telefono,$emailDoc);
         }
         else{
            echo '<script type="text/javascript">
                  window.location="../registroDoc.php?'.md5("grupoExisteDoc").'";
                </script>';
         }
      }
      else{
         echo '<script type="text/javascript">
                  window.location="../registroDoc.php?'.md5("emailExisteDoc").'";
                </script>';
      }
   }
   else{
       echo '<script type="text/javascript">
               window.location="../registroDoc.php?'.md5("registroUsuarioExisteDoc").'";
             </script>';
   }
?>
