<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg_subject = $_POST['msg_subject'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];


    $to = "info@endlos.tech";

    $heder = "From: ".$email."";

    mail($to, $msg_subject, $message, $heder);
    $response['text'] = 'success';
//     require_once "PHPMailer/PHPMailer.php";
//     require_once "PHPMailer/SMTP.php";
//     require_once "PHPMailer/Exception.php";

//     $mail = new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = "smtp.gmail.com";
//     $mail->SMTPAuth   = true;        
//     $mail->Username = "info@endlos.tech";
//     $mail->Password = "s";
//     $mail->Port = 465;
//     $mail->SMTPSecure = 'ssl';

//     $mail->isHTML(true);
//     $mail->setFrom($email, $name);
//     $mail->addAddress('info@endlos.tech');
//     $mail->Subject = $msg_subject;
//     $mail->Body = $message;
    
//     if($mail->send()) {
//         $status = 'Success';
//         $response = 'Email is Sent!';
//     } else {
//         $status = 'failed';
//         $response = 'Something is Wrong! <br>'. $mail-> ErrorInfo;
//     }
   
exit(json_encode($response));
   
}
?>