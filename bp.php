<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'grobdi.com.pe';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'developer@grobdi.com.pe';
   $mail->Password = 'wYi0x]fS50GF';
   $mail->setFrom('developer@grobdi.com.pe', 'Sistemas');
   $mail->addReplyTo('developer@grobdi.com.pe', 'Sistemas');
   $mail->addAddress('a.culqui02@gmail.com', 'Ventas');
   $mail->Subject = 'Checking if PHPMailer works';
   $mail->isHTML(true);

   $htmlBody = '
   <h1>Hola!!</h1>
   <p>Ha recibido un correo desde la web</p>
   <p>Nombre: '.$_POST['name'].'</p>
   <p>Email: '.$_POST['email'].'</p>
   <p>Asunto: '.$_POST['subject'].'</p>
   <p>Mensaje: '.$_POST['message'].'</p>
   <p>Se han enviado los siguientes documentos: </p>
    ';

$documents = json_decode($_POST['documentos']);

foreach($documents as $document){
    $htmlBody = $htmlBody . '<p><a href="https://grobdi.com.pe/recetas/'.$document.'" >'.$document.'</a></p>';
}

$htmlBody = $htmlBody . '<p>Saludos Cordiales</p>';

$mail->msgHTML($htmlBody);
   //$mail->addAttachment('attachment.txt');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
?>



