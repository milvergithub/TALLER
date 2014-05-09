<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
   <link rel="stylesheet" href="css/redmond/jquery-ui-1.10.4.custom.css"/>
   <link rel="stylesheet" href="css/calendario.css"/>
   <script src="js/jquery-1.10.2.js"></script>
   <script src="js/jquery.ui.core.js"></script>
   <script src="js/jquery.ui.widget.js"></script>
   <script src="js/jquery.ui.datepicker.js"></script>
   <script src="js/validarCalendario.js"></script>

</head>

<body>
	<h2>CREAR CONVOCATORIA</h2>
    <div>
    	<div class="container container-fluid">
        NOMBRE DE LA CONVOCATORIA <p>
        	<div class="row">
            	<form  method="POST" action="subrirCrearConvocatoria.php" enctype="multipart/form-data">
                	Nombre Convocatoria : <input type="text" name="nombreconv" placeholder="nombre convocatoria"><br>
                	Fecha De Presentacion de Prepopuesta: 
                        <!-- <input name="fecha" type="date" /><br />  -->
                        <input type="text" id="fechai" name="fecha" readonly="true" value="" onfocus="entraFoco(this);" onblur="saleFoco(this);"/><span></span> <br>
                    <input type="submit" name="subrirCrearConvocatoria"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>