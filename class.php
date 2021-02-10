<?php
class Trabajo
	private $dbh;
    private $n;

public function constructor()
{
	$this->dbh= new PDO('psql:host=localhost:port=5432;dbname=inscripciones', "postgres","password");
	$this->n=array()
	
}

public function get_estudiantes()
{
	$sql="select * from estudiantes : ";
	foreach($this->dbh->query($sql) as $row)
	{
		$this->n[]=$row;
		
	}
	return $this->n;
	$this->dbh=null;
		
}

public function  delete($Matricula){
	$sql="delete from estudiantes where Matricula=?";
	$stmt=$this->dbh->prepare($sql);
	$stmt->bindParam(1,$Matricula);
	
	$Matricula=$_GET["Matricula"];
	$stmt->excute();
	
	header("Location: index.php?m1")
}
/*public function add()
{
	if(empty($_POST["matricula"]) or empty($_POST["empty"]))
	{
		header("Location: add.php?matricula=1");
		exit;
	}
echo "exito";
}*/

public function insert(){
	if(empty($_POST["$Matricula"]) or empty($_POST["Nombre"]))
	{
		header("Location add.php?m=1");
		exit;
	}
	$sql = "insert into estudiantes values(?,?,?,?,?,?)";
	$stmt=$this->dbh->prepare($sql);
	
	$stmt->bindParam(1,$Matricula);
	$stmt->bindParam(2,$Nombre);
	$stmt->bindParam(3,$Apellido_Materno);
	$stmt->bindParam(4,$Apellido_Paterno);
	$stmt->bindParam(5,$Edad);
	$stmt->bindParam(6,$Email);
	$stmt->bindParam(6,$Telefono);
	
	$Matricula=strip_tags($_POST["Matricula"]);
	$Nombre=strip_tags($_POST["Nombre"]);
	$Apellido_Materno=strip_tags($_POST["Apellido_Materno"]);
	$Apellido_Paterno=strip_tags($_POST["Apellido_Paterno"]);
	$Edad=strip_tags($_POST["Edad"]);
	$Email=strip_tags($_POST["Email"]);
	$Telefono=strip_tags($_POST["Telefono"]);
	
	$stmt->excute();
	$this->dbh=null;
	header("Location: insertar_personas.php?m=2");
	
public function get_estudiante_matricula($Matricula)
{
	$sql = "select * from estudiantes where Matricula=?";
	$stmt = $this->dbh->prepare($sql);
	if($stmt-> execute(array($Matricula) ))
	{
		while($row = $stmt->fetch())
		{
			$this->n[]=$row;
			
		}
	return $this->n;
		$this->dbh=null;
	}
	 
}

public function edit()
{
	if(empty($_POST["$Matricula"]) or empty($_POST["Nombre"]))
	{
		header("Location edit.php?m=1 &id".$_POST["Matricula"]);
		exit;
	}
$sql = "update estudiantes set Matricula=?, Nombre=? where id=?";
	$stmt=$this->dbh->prepare($sql);
	
	$stmt->bindParam(1,$Matricula);
	$stmt->bindParam(2,$Nombre);
	$stmt->bindParam(3,$Apellido_Materno);
	$stmt->bindParam(4,$Apellido_Paterno);
	$stmt->bindParam(5,$Edad);
	$stmt->bindParam(6,$Email);
	$stmt->bindParam(6,$Telefono);
	
	$Matricula=strip_tags($_POST["Matricula"]);
	$Nombre=strip_tags($_POST["Nombre"]);
	$Apellido_Materno=strip_tags($_POST["Apellido_Materno"]);
	$Apellido_Paterno=strip_tags($_POST["Apellido_Paterno"]);
	$Edad=strip_tags($_POST["Edad"]);
	$Email=strip_tags($_POST["Email"]);
	$Telefono=strip_tags($_POST["Telefono"]);
	
	$stmt->excute();
	$this->dbh=null;
}
	
}


?>
