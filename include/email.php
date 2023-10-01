<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    if (isset($_POST["register"])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bushmutally@gmail.com';
        $mail->Password = 'faahvhufczuhvfpt';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('bushmutally@gmail.com');

        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);

        $mail->Subject = 'Verification Code';
        $mail->Body = 'Here is your verification code '.$code;

        $mail->send();

        

    }

    ?>