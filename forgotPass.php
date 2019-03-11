
<?php
require_once('connect.php');
if(isset($_GET) & !empty($_GET)){
	$username = mysqli_real_escape_string($connection, $_GET['username']);
	$sql = "SELECT * FROM `user` WHERE email = '$username'";
	$res = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($res);
	if($count > 0){
		$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$fullname= $r['fullname'];
$to = $r['email'];
$subject = "Recuperación de Contraseña";

$message = "Hola".$fullname. "Te saludamos de BP coaching App Has solicitado una recuperación de tu contraseña:  " .$password;
$headers = "From : desarrollo@bpcoachingapp.com";
if(mail($to, $subject, $message, $headers)){
	echo "Tu contraseña ha sido enviada a tu correo asociado a bpcoachingapp";
	print "<script>window.location='index.php';</script>";
}else{
	echo "Tenemos problemas con tu correo ponte en contacto con soporte de bpcoachingapp";
}
	}else{
		echo "Tenemos problemas con tu correo ponte en contacto con soporte de bpcoachingapp";
	}
}
?>
