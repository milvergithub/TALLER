<?php
include '../clases/GestionFiles.php';
include '../clases/ConexionTIS.php';
$gestion=new GestionFiles();
$conexGD=new ConexionTIS();

$nombre=$_POST['nombre'];
$tipos=$_POST['tipo'];
$calificaciones=$_POST['calificacion'];
$archivo=$_FILES['archivo']['name'];

$origenDoc=$_FILES['archivo']['tmp_name'];
$destino="../files/convocatorias/".$nombre.".pdf";

echo 'nombre ='.$nombre."<br>";
echo 'tipo ='.$tipos."<br>";
echo 'calificacion ='.$calificaciones."<br>";
echo 'nombre Doc ='.$archivo."<br>";

if ($gestion->validarExtensionArchivo($archivo)==TRUE) {
   $conexGD->subirDocumentos(1, $nombre,$_POST['tipo'] , $calificaciones, "files/convocatorias/".$nombre.".pdf");
   $gestion->guardarDocumento($origenDoc, $destino);
}
?>
