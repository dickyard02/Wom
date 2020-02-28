<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include "koneksi.php";

    /* $username = "root";
    $password = "";
    $database = "website";
    $mysqli = mysqli_connect("localhost", "root", "", "website");
 */
    //require 'PHPMailer/PHPMailer Autoload.php';

    if (isset($_POST['name']) && isset($_POST['email'])) {

        
         $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();
		

        //SMTP Settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = mysql_query($koneksi, "SELECT email from data_user where Username = 'email'"); //email user
        $mail->Password = '25neotrace88';
        $mail->Port = 465; //587.465
        $mail->SMTPSecure = "ssl"; //tls.ssl
/* 		$mail->SMTPOptions = array(
                    'tls' => array(s
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
				); */
        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("$_POST[email]","$_POST[name]"); //email tujuan
        $mail->Subject = $subject;
        $mail->Body = $body;

        if(!$mail->Send()){
            $php_errormsg = 'Email not sent';
        }else
        {
            $php_errormsg = 'mail sent';
        }
        exit(json_encode(array("status" => $status, "response" => $response))); 
    }
?>