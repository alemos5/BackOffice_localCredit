<?php

require("class.phpmailer.php");
$mail = new PHPMailer();

//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "mail.efectylogistic.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
$mail->Username = "logistico@efectylogistic.com"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
$mail->Password = "Mayo2015"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
$mail->Port = 465; // Puerto de conexión al servidor de envio.
$mail->From = "logistico@efectylogistic.com"; // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
$mail->FromName = "EfectyLogistic"; //A RELLENAR Nombre a mostrar del remitente.
$mail->AddAddress("josearmandomarcano@gmail.com"); // Esta es la dirección a donde enviamos
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = 'Titulo'; // Este es el titulo del email.
$body = "Hola mundo. Esta es la primer línea";
$body .= "Aquí continuamos el mensaje";
$mail->Body = $body; // Mensaje a enviar.
$exito = $mail->Send(); // Envía el correo.
if($exito){
    echo 'El correo fue enviado correctamente.';
}else{
    echo 'Hubo un problema. Contacta a un administrador.';
}