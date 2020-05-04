<?php
    //Llamando a los campos
    $nombre = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $mensaje = $_POST['servicio'];

    //Datos del correo
    $destinatario = "ciudad@fyfsa.com";
    $ruth ="ruth@evanzu.com";
    $robert ="robert@evanzu.com";
    // $destinatario = "atencion@fyfsa.com";
    $asunto = "Contacto desde nuestra web";

    $carta = "De: $nombre \n";
    $carta .= "Correo: $email\n";
    $carta .= "Telefono: $tel\n";
    $carta .= "Pregunta por: $mensaje";
    
    //Envio de mensaje
    mail($robert, $asunto, $carta);
    mail($ruth, $asunto, $carta);
    mail($destinatario, $asunto, $carta);
    header("Status: 301 Moved Permanently");
    header('Location: http://fyfsa.com');