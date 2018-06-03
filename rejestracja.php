<?php
session_start();
if (file_exists("config/config.php")) require_once("config/config.php");
if (file_exists("lib/funkcje.php")) require_once("lib/funkcje.php");

$key=substr(md5(time().range(1, 9999)), 1, 12);

$query="INSERT INTO cw5_users VALUES ('','".$_POST[login]."','".$_POST[password]."','".$_POST[email]."','$key','0')";
$query2="INSERT INTO cw5_user_profiles VALUES ('','".$_POST[imie]."','".$_POST[nazwisko]."','".$_POST[email]."')";

$wynik=mysqli_query($link,$query);
$wynik2=mysqli_query($link,$query2);
se($link);



while($wiersz = mysqli_fetch_assoc($wynik))
{
	$_SESSION[user_id]=$wiersz[user_id];
	$_SESSION[login]=$wiersz[login];
 
}

$body="<p>Dziękujemy za zarejetrowanie się w aplikacji Warsztat Pro.</p>\n
                      <p>Kliknij w poniższy link, aby aktywować swoje konto.</p>\n
                      <p>http://www.manticore.uni.lodz.pl/~lukplu/activation.php?key=$key</p>\n
                      <p>Jeśli nie wiesz o co chodzi, zignoruj tę wiadomość</p>";


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.wp.pl';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'warsztatpro@wp.pl';                 // SMTP username
    $mail->Password = 'Zaliczenie10.06';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('warsztatpro@wp.pl', 'Warsztat Pro');          
    $mail->addAddress("$_POST[email]");     
 

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Witamy w Warsztacie Pro';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

header("location: glowna.php"); 

?>
