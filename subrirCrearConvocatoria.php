<html>
<body>
	<?php
        include 'clases/ConexionTIS.php';
        $conex = new ConexionTIS();
        
	$nombre=$_POST['nombreconv'];
	$fecha=$_POST['fecha'];
	echo 'el nombre de la convocatoria es :'.$nombre."<br>";
	echo 'la fecha de cracion es:'.$fecha."<br>";
        //echo 'la fecha es: '.getdate().'<br>';
        //$hoy = getdate();
        //print_r($hoy);
        //$hoy = date("j - n - Y");
        //$hoy = date("Y-n-j");
        //echo ''.$hoy.'<br>';
        $fechaActual= $conex->getFechaActual();
        //echo 'la fecha actual es:'.$fechaActual[0].'<br>';
        $fechaInsert = date("Y-m-d", strtotime($fecha));
        $nvoNomb = trim($nombre);
        echo 'fecha='.$fechaInsert;
        if ($nvoNomb == '') {
            echo 'el nombre la convocatoria no puede ser nulo <br>';
        }
        else {
            if ($fechaInsert == '' || $fechaInsert < $fechaActual[0]) {
            echo 'la fecha de la convocatoria no puede ser nula o menor a la actual <br>';
            }
            else {
                $conex->insertarConvocatoria($nombre, $fechaInsert);
                echo 'convocatoria creada correctamente';
            }
        }
        
	?>
    <br>    
    <a href="crearConvocatoria.php">Volver atras</a>
    
</body>
</html>