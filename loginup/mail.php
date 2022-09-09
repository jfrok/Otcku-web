<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
// // Import PHPMailer classes into the global namespace
// require 'phpmailer/PHPMailer.php';
// require 'phpmailer/SMTP.php';
// require 'phpmailer/Exception.php';

// // These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// // Load Composer's autoloader
// // require 'phpmailer/autoload.php';

// // Instantiation and passing `true` enables exceptions
// $mail = new PHPMailer();
// // print_r(PHPMailer());
// //Server settings
// //   $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
// $mail->isSMTP();                                            // Send using SMTP
// $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
// $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
// $mail->Username   = 'ootcku@gmail.com';                     // SMTP username
// $mail->Password   = 'JfrO123JfrO';                               // SMTP password
// $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
// $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

// // Contente forward1.registrar-servers.com
// $mail->setFrom("ootcku@gmail.com", "OTCKU");
// $mail->Subject = "رمز تحقق من بريد الكتروني";
// $mail->Body = '<h1> شكرا لتسجيلك في موقعنا</h1>';
// $mail->addAddress("soppurtootcku@gmail.com");

// $mail->send();
// $mail->smtpClose();

// $mail->isHTML(true);
// $mail->CharSet = "UTF-8";

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailers/src/Exception.php';
require 'PHPMailers/src/PHPMailer.php';
require 'PHPMailers/src/SMTP.php';
$mail = new PHPMailer;

$mail->isSMTP();                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;               // Enable SMTP authentication
$mail->Username = 'soppurtootcku@gmail.com';   // SMTP username
$mail->Password = 'JfrO123JfrO';   // SMTP password
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                    // TCP port to connect to

// Sender info
// $mail->setFrom('soppurtootcku@gmail.com', 'FromName');
// $mail->addReplyTo('soppurtootcku@gmail.com', 'ReplyName');

// Add a recipient
// $mail->addAddress('soppurtootcku@gmail.com');

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
// $mail->Subject = 'Email from local host to test';

// Mail body content
// $bodyContent = '<h1>How to Send Email from Localhost using PHP by InfoTech</h1>';
// $bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>TechWAR</b></p>';
// $mail->Body    = $bodyContent;

// Send email 
// if(!$mail->send()) { 
//     echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
// } else { 
//     echo 'Message has been sent.'; 
// } 

?>