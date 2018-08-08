<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';

    if(isset($_POST["submit"])){
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        //Set the hostname of the mail server
        $mail->Host = 'ssl://smtp.gmail.com:465';
        // use
        //$mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 465;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'ssl';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "melius.contact@gmail.com";
        //Password to use for SMTP authentication
        $mail->Password = "meliusinfo";
        //Set who the message is to be sent from
        $mail->setFrom(($user["email"]), ($user["nom"] ." ". $user["prenom"]));
        //Set an alternative reply-to address
        $mail->addReplyTo(($user["email"]));
        //Set who the message is to be sent to
        $mail->addAddress(($user["email"]));
        //Set the subject line
        $mail->Subject = $user["objet"];
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($user["message"]);
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
        $mail->addAttachment("upload/".$user['file']);
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }
?>