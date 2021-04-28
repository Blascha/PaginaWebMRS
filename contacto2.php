    <?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$queRecibeMRS = "Nombre: " . $nombre . ". mail: " . $email. " mensaje: " . $mensaje . ".";
$emailTo = 'infomrsconstrucciones@gmail.com.ar';
$emailSubject = 'Desde Pagina WEB';
$headers = 'Desde Pagina WEB'
@mail($emailTo, $emailSubject, $queRecibeMRS);
header('Location: prueba.html');
exit;
?>
