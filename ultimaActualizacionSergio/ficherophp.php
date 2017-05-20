<?php
//conexion con la base de datos y el server 
define('DB_HOST', 'localhost');
 define('DB_NAME', 'datos3');
 define('DB_USER','root'); 
 define('DB_PASSWORD','');
  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
   $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
if (mysqli_connect_errno($con)) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
 else { 
  }

function NewUser()
{
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$telefono=$_POST['telefono'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$localidad= $_POST['localidad'];
	$tipo1=$_POST['gender1'];
	$tipo2=$_POST['gender2'];
	$query= "INSERT INTO tabla_datos (nombre_completo,apellido,telefono,pass,email,localidad,tipohm,tipoua)VALUES('$nombre','$apellido','$telefono','$pass',
		'$email','$localidad','$tipo1','$tipo2')";
	

$data = mysql_query ($query)or die(mysql_error());
 if($data) {
     
	header("location:ClinkPortadaRegistro.php");
     
	   }}

   
if(isset($_POST['submit'])) {
	 
	  NewUser();
  }

?>
