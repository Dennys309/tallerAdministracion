 <?php
require_once 'conexion.php';


$n= "admin";
$p= "1234";
$Nombre = $_GET['Nombre'];
$Password = $_GET['Password'];



if ($Nombre == $n and $Password == $p)
{
echo "Bienvenido "  .$Nombre;
echo nl2br(" \n ");

}

else {
echo "usuario o contraseña incorrectos";
}

?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>administracion</title>
	</head>
	<body>
		<h3>Administracion</h3>
		<a href='demolist.php' > llamar demolist </a>
	</body>
</html>
