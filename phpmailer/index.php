<?php
    require_once('vendor/autoload.php');
    

use PHPMailer\PHPMailer\PHPMailer;



$mail = new PHPMailer;


$mail->isSMTP();

$mail->SMTPOptions= array(
    'ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>true
    )
    );

$mail->SMTPDebug = 2;

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = "seuemail@gmail.com";

$mail->Password = "suasenha";

$mail->setFrom('seuemail@gmail.com', 'Marcelo');

//$mail->addReplyTo('replyto@example.com', 'First Last');

$mail->addAddress('destino@hotmail.com', 'Marcelo Abrão da Silva');

$mail->Subject = 'PHPMailer Test';

$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

$mail->AltBody = 'Teste corpo alternativo';

$mail->addAttachment('images/teste.jpg');

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}


function save_mail($mail)
{
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
?>