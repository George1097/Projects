<?php
require_once("class/class.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modulo de Inscripciones con CRUD</title>
<script type="text/javascript">
function eliminar (url)
	if(confirm("Deseas Eliminar el registro"))
		{
			window.location=url;
		}
</script>
</head>

<body>

<table>
<tr>
<td  style="text-align: left;" colspan="5"><a href="add.php">Inscripcion Estudiante</a><hr/></td>

</tr>
</table>	
//Tabla Estudiante
	
<table>
<tr style= "font-weight:20 bold; color:black; background-color: azure;">
<td>Matricula</td>
<td>Nombre</td>
<td>Apellido Materno</td> 
<td>Apellido Paterno</td>
<td>Edad</td>
<td>Email</td>	
<td>Telefono</td>
<td>Editar</td>
<td>Eliminar</td>
</tr>	

//Ciclo para obtener los datos	
<?php
	$tra = new Trabajo();
	$datos = $tra->get_estudiantes();
	for(i=0; $i<sizeof($datos); $i++)
	{
		
	}
?>	
	
<tr style= "font-weight:20 bold; background-color:midnightblue;">
<td><?php  echo $datos[$i]["Matricula"]?></td>
<td><?php  echo $datos[$i]["Nombre"]?></td>
<td><?php  echo $datos[$i]["Apellido_Materno"]?></td> 
<td><?php  echo $datos[$i]["Apellido_Paterno"]?></td>
<td><?php  echo $datos[$i]["Edad"]?></td>
<td><?php  echo $datos[$i]["Email"]?></td>	
<td><?php  echo $datos[$i]["Telefono"]?>/td>
<td><a href="edit.php?Matricula=<?php echo $datos[$i]["Matricula"];?>">Editar</a></td>
<td><a href="javascript:void(0);" title="Eliminar " <?php  echo $datos[$i]["Matricula"]?> onclick="Eliminar(delete.php?<?php  echo $datos[$i]["Matricula"]?>)";>Eliminar</a></td>
</tr>	

</table>
	
//Tabla de Grupo
	
<table>
<tr style= "font-weight:20 bold; color:black; background-color: azure;">
<td>ID Grupo</td>
<td>Semestre</td>
<td>Grupo</td>
<td>Turno</td>
<td>Editar</td>
<td>Eliminar</td>
</tr>	

//Ciclo para obtener los datos	
<?php
	$tra = new Trabajo();
	$datos = $tra->get_estudiantes();
	for(i=0; $i<sizeof($datos); $i++)
	{
		
	}
?>	
	
<tr style= "font-weight:20 bold; background-color:midnightblue;">
<td><?php  echo $datos[$i]["Id_Grupo"]?></td>
<td><?php  echo $datos[$i]["Semestre"]?></td>
<td><?php  echo $datos[$i]["Semestre"]?></td>
<td><?php  echo $datos[$i]["Grupo"]?></td>
<td><?php  echo $datos[$i]["Nombre"]?></td>
<td>Editar</td>
<td>Eliminar</td>
</tr>		
	
</table>
	
</body>
</html>