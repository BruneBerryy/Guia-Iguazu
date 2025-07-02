<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secretKey = 'http://127.0.0.1:5500/index.html';
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Verificar el CAPTCHA con Google
    $verifyURL = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents("$verifyURL?secret=$secretKey&response=$responseKey&remoteip=$userIP");
    $responseKeys = json_decode($response, true);

    if ($responseKeys['success']) {
        echo "¡Formulario enviado correctamente!";
        // Aquí procesa los datos del formulario (guardar en BD, enviar email, etc.)
    } else {
        echo "Error: Verificación CAPTCHA fallida.";
    }
}
?>