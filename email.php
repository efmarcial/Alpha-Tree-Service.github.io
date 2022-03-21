

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = 3;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'ssl://smtp.gmail.com';                   //Set the SMTP server to send through
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'drdfajardo18@gmail.com';                     //SMTP username
    $mail->Password   = 'Ef2083131';
    $mail->Port = 465;                                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->From='drdfajardo18@gmail.com';
    $mail->addAddress('efmarcial1060@gmail.com');     //Add a recipient
                   //Name is optional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $_POST['message'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    ?>


<!DOCTYPE html>
<html>
<head>
    <title>Thank You | Fuquay-Varina Tree Service</title>
    <meta charset="utf-8">
    <meta name="description" content="Tree Service Tree & Stump Removal, Trimming And Cutting Services. Call for a Estimate! Todo en arboles">
	<meta name="author" content="Eduardo-Fajardo-Marcial" >
	<meta name="Robots" content="all" />
    <meta name="keywords" content="Fuaquay-Varina Tree Services, Angier Tree Service, Fuquay-Varina, Angier, Tree Services, Raleigh NC, Dunn NC , Fayetville NC , Benson NC, Stump Removal, Trimming, Cutting Services, tree services, tree services raleigh, tree services fayetville, tree service dunn nc, residential tree services, Commercial tree services, Tree Climbing Specialist, Tree Removal, Stump Grinding. Trimming, Prunning, Chopping, alpha, tree service raleigh, tree sercivies nc, tree services garner, tree services dunn">
	
    <!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">

<!-- static main.css-->
<link rel="stylesheet" href="css/main.css" type="text/css">
<!-- W3-CSS -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<!-- Link to Bulma IO css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


<!-- Links to font awesome -->
<script src="https://kit.fontawesome.com/4156d66cb5.js" crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N9LS3TG3JF"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-N9LS3TG3JF');
</script>


<style type="text/css">
    html {
        scroll-behavior: smooth;
        }

  </style>
</head>
<body>
<section id="thank-you" class="hero ">
        <div class="hero-head">

        </div>

        <div class="hero-body">

        </div>
</section>
<footer class="footer has-background-success">
	<div class="content has-text-centered">
		<p>
			<a href="www.facebook.com">
				<span class="fa-stack fa-2x">
					<i class="fa-solid fa-circle fa-stack-2x"></i>
					<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
				</span>
				
			</a>

			<a href="www.google.com">
				<span class="fa-stack fa-2x">
					<i class="fa-solid fa-circle fa-stack-2x"></i>
					<i class="fa fa-google fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</p>
		<p class="has-text-white"><span>&COPY;</span>2022 All Rights Reserved </p>
	</div>
</footer>
</body>
</html>