<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    		$firstNameMain = $_POST['first_name'];
    		$lastNameMain = $_POST['last_name'];
    		$phoneMain = $_POST['phone'];
    		$mailMain = $_POST['email'];
    		$messengerMain = utf8_decode($_POST['messenger']);
		    $uid = md5(uniqid(time()));
            $msn_int = "Este mensaje fue enviado desde el formulario de la pagina web www.seay.org\r\n";
            $header = "From: " . $firstNameMain . " <" . $mailMain . ">\r\n";
            $header .= "Reply-To: " . $mailMain . "\r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
            $bodyMsn = "Información del correo\r\n";
            $bodyMsn .= "Datos del contacto\r\n" . "Nombre: " . $firstNameMain . " "  . $lastNameMain . "\r\n";
            $bodyMsn .= "Teléfono: " . $phoneMain . "\r\n";
            $bodyMsn .= "Dirección de correo: " . $mailMain . "\r\n";
            $bodyMsn .= "mensaje: " . $messengerMain . "\r\n";
            $msn_send = "--" . $uid . "\r\n";
            $msn_send .= "Content-type: text/plain; charset= utf-8 \r\n";
            $msn_send .= "Correo de "  . $mailMain . "nombre: " . $firstNameMain . $lastNameMain;
            $msn_send .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
            $msn_send .= $bodyMsn . "\r\n\r\n";
            $msn_send .= "--" . $uid . "\r\n";
            $msn_send .= "--" . $uid . "--";
            if (mail('s.tecnologia@seay.org.mx', $msn_int, $msn_send, $header )) {
                echo "<script type=\"text/javascript\">alert('El Correo fue enviado con exito');</script>";
            } else {
                echo "<script type=\"text/javascript\">alert('El Correo no fue enviado');</script>";
            }
            echo '<meta http-equiv="refresh" content="1; URL=./index.php">';
            exit();
 	}
 ?>