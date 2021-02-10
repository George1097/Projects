<?php
require_once("class/class.php");
$tra = new Trabajo();
if(isset($_POST["grabar"] and $_POST["grabar"]=="si"))
{
	$tra->edit();
	exit;
}
$datos=$tra->get_estudiante_matricula($_GET["Matricula"]);
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
			  <h4 style="align-content:center; color:red;">La noticia a sido editada exitosamente</h4>
	<?php
				  break;
		   }
	   }		
?>
<h2> Editar Informacion Estudiante: </h2>
<form name="form" action="" method="post">
Matricula: <input type="textbox" name="matricula" value="<$php echo datos [0]["Matricula"] ?>" /><br />
Nombre: <input type="textbox" name="nombre"value="<$php echo datos [0]["Nombre"] ?>" /><br />
Apellido Materno: <input type="textbox" name="apellido_m" value="<$php echo datos [0]["Apellido_Materno"] ?>" /><br />
Apellido Paterno: <input type="textbox" name="matricula_p" value="<$php echo datos [0]["Apellido_Paterno"] ?>" /><br />
Edad: <input type="textbox" name="edad" value="<$php echo datos [0]["Edad"] ?>"/><br />
Email: <input type="textbox" name="email" value="<$php echo datos [0]["Email"] ?>"/><br />
Telefono: <input type="textbox" name="telefono" value="<$php echo datos [0]["Telefono"] ?>"/><br />
<input  type="hidden" name="grabar" value="si"/>
<input type ="hidden" name="matricula" value="<?php $_GET["Matricula"]; ?>" />	
<input type="submit" value="editar" title="Editar"/>
</form>
</body>
</html>