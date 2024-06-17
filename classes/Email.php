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
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'e2f90a9c394d2d';
        $mail->Password = '5ad5656c8ab1df';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Set Html
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en App Salón, 
            solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presion aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" 
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
         $mail->Host = 'sandbox.smtp.mailtrap.io';
         $mail->SMTPAuth = true;
         $mail->Port = 2525;
         $mail->Username = 'e2f90a9c394d2d';
         $mail->Password = '5ad5656c8ab1df';
 
         $mail->setFrom('cuentas@appsalon.com');
         $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
         $mail->Subject = 'Restablece tu password';
 
         // Set Html
         $mail->isHTML(true);
         $mail->CharSet = 'UTF-8';
 
         $contenido = "<html>";
         $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solocitado reestablecer tu 
            password, sigue el siguiente enlace para hacerlo</p>";
        $contenido .= "<p>Presion aquí: <a href='http://localhost:3000/recuperar?token=" 
            . $this->token ."'>Reestablece tu Password</a> </p>";
         $contenido .= "<p> Si no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
         $contenido .= "</html>";
 
         $mail->Body = $contenido;
 
         // Enviar email
         $mail->send();
    }
}

?>