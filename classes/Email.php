<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    
    public $email, $nombre, $token;

    public function __construct($nombre, $email, $token) {
        $this->email = $email;    
        $this->nombre = $nombre;    
        $this->token = $token;    
    }

    public function enviarConfirmacion() {
         // Crear el objeto de email
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = $_ENV['EMAIL_HOST'];
         $mail->SMTPAuth = true;
         $mail->Port = $_ENV['EMAIL_PORT'];
         $mail->Username = $_ENV['EMAIL_USER'];
         $mail->Password = $_ENV['EMAIL_PASS'];

        $mail->setFrom($_ENV['EMAIL_USER']);
        $mail->addAddress($this->email, 'APP SALÓN');
        $mail->Subject = 'Confirma tu cuenta';

        // Set Html
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en App Salón, 
            solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] ."/confirmar-cuenta?token=" 
            . $this->token ."'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p> Si no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar email
        $mail->send();
    }

    public function enviarInstrucciones() {
         // Crear el objeto de email
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = $_ENV['EMAIL_HOST'];
         $mail->SMTPAuth = true;
         $mail->Port = $_ENV['EMAIL_PORT'];
         $mail->Username = $_ENV['EMAIL_USER'];
         $mail->Password = $_ENV['EMAIL_PASS'];
 
         $mail->setFrom($_ENV['EMAIL_USER']);
         $mail->addAddress($this->email, 'APP SALÓN');
         $mail->Subject = 'Restablece tu password';
 
         // Set Html
         $mail->isHTML(true);
         $mail->CharSet = 'UTF-8';
 
         $contenido = "<html>";
         $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu 
            password, sigue el siguiente enlace para hacerlo</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] ."/recuperar?token=" 
            . $this->token ."'>Reestablece tu Password</a> </p>";
         $contenido .= "<p> Si no solicitaste este cambio, puedes ignorar el mensaje</p>";
         $contenido .= "</html>";
 
         $mail->Body = $contenido;
 
         // Enviar email
         $mail->send();
    }
}

?>