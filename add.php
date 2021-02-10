<?php
require_once("class/class.php")
$tra=new Trabajo();
if(isset($_POST["grabar"]) and  $_POST["grabar"]=="si"){
$tra->add(); 
exit;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modulo de Inscripciones con CRUD</title>
</head>

<body>
<p>
<a href="Index.php" title="Inicio">Inicio</a>
</p>
<?php
	if(isset($_GET["m"])
	   {
		   switch($_GET["m"]){
			   case '1':
				    ?>
			  <h4 style="align-content:center; color:red;">Datos vacios</h4>
	<?php
				  break;
		   }
	   }		
?>
<h2> Alta de Estudiantes</h2>
<form name="form" action="" method="post">
Matricula: <input type="textbox" name="matricula" /><br />
Nombre: <input type="textbox" name="nombre" /><br />
Apellido Materno: <input type="textbox" name="apellido_m" /><br />
Apellido Paterno: <input type="textbox" name="matricula_p" /><br />
Edad: <input type="textbox" name="edad" /><br />
Email: <input type="textbox" name="email" /><br />
Telefono: <input type="textbox" name="telefono" /><br />
<input  type="hidden" name="grabar" value="si"/>
	
<input type="submit" value="crear" title="Alta"/>
</form>
</body>
</html>