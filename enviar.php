<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$tema = $_POST['tema'];
$mensaje = $_POST['mensaje'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$ip = $_SERVER["REMOTE_ADDR"];
$captcha = $_POST['g-recaptcha-response'];
$secretKey = '****';

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip={$ip}");

$atributos = json_decode($response, TRUE);

if (!$atributos['success']) {
    $errors[] = 'Verifica el captcha';
    $response = ['success' => false, 'message' => 'Verificación de reCAPTCHA fallida'];
    echo json_encode($response);
    } else {
        include("conexion.php");
    //Hacemos la petición a la base de datos 
        mysqli_query($conexion_bd,"INSERT INTO consulta (nombre, telefono, correo, tema, mensaje) VALUES ('$nombre', '$telefono', '$correo', '$tema', '$mensaje')");

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'gonzalocivita@gmail.com';                     //SMTP username
        $mail->Password   = 'yyagqzbkgrcenbdf';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you    have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('gonzalocivita@gmail.com', 'GonCiv');
        $mail->addAddress($correo, $nombre);     //Add a recipient
        $mail->addCC('gonzalocivita@gmail.com');

        $mensajeback = '
            <p>Estimado/a ' . $nombre . ',</p>' .
            '<p>Gracias por contactarnos. Hemos recibido su mensaje y le daremos una pronta respuesta.</p>' .
            '<p>Atentamente,</p>' .
            '<p>Gonzalo Civita</p>' .
            '<p>Su mensaje: ' . $mensaje . '</p>';

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $tema;
        $mail->Body    = $mensajeback;
        $mail->AltBody = 'Gracias por contactarnos';

        $mail->send();
            echo 'Message has been sent <a href=index.php>Volver</a>';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>