<!DOCTYPE html>
<html>
    <head>
        <title>Message | Fuquay-Varina Tree Service</title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <section class="hero is-fullheight parallax3">
    <nav class="navbar navbar-expand-lg  navbar-light bg-transperant is-size-4-desktop is-size-4-tablet is-size-3-mobile" style="font-family: 'League Gothic';">
        <a class="navbar-brand" href="index.html">
			<span class="fa-stack fa-1x">
				<i class="fa-solid fa-tree fa-2x" style="color: rgb(2, 139, 2);"></i>
				<i class="fa-solid fa-tree fa-2x fa-inverse" style="color: orange;"></i>
			</span>
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html#about-section">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#contact-section">Contact</a>
            </li>
			<li class="nav-item">
				<a class="nav-link" href="index.html#services-section">Services</a>
			</li>
            
          </ul>
        </div>
      </nav>
            <div class="hero-body">
                <div class="container-fluid" style="margin-top:-5%;">
                    <div class="columns has-text-centered">
                        <div class="column">
                          


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
                                $mail->SMTPDebug = 3;                      //Enable verbose debug output
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
                                $mail->Subject = 'Website Conact From ';
                                $mail->Body    ="Hello I'm $_POST['name'], \n $_POST['message'] \n my phone number is $_POST[number].";

                                
                                echo "<h1 class='has-text-white title is-size-1-desktop is-size-3-tablet is-size-3-mobile' style='text-shadow: 2px 2px 2px black;'>Thank you, Your Message has been sent</h1>";
                                echo "<h4 class='subtitle has-text-white is-size-3-desktop is-size-4-tablet is-size-4-mobile' style='text-shadow: 2px 2px 2px black;'>We will be in contact with you soon</h4>";
                            } catch (Exception $e) {
                                echo "<h1 class='title has-text-white is-size-1-desktop is-size-3-tablet is-size-3-mobile' style='text-shadow:2px 2px 2px black;'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h1>";
                                echo "<h4 class='subtitle has-text-white is-size-3-desktop is-szie-4-tablet is-size-3-mobile' style='text-shadow:2px 2px 2px black'>Please try giving us a call instead.</h4>"
                            }

                                ?>

                        

                            

                        </div>
                    </div>
                        <div class="columns is-desktop is-centered">
                            <div class="column has-text-centered">
                                <h5 class="title has-text-white is-size-5-desktop is-size-5-tablet is-size-5-mobile" style="text-shadow: 2px 2px 2px black;">ADDRESS</h5>
                                <hr style="margin-left: 25%;width: 50%;height:2px;margin-top: -3% ;border-width:0;color:yellow;background-color:yellow">
                                <ul class="subtitle has-text-white is-size-6-desktop is-size-6-tablet is-size-6-mobile" style="text-shadow: 2px 2px 2px black;" >
                                    <li>
                                        Fuaquay-Varina / Angier, 
                                    </li>
                                    <li>
                                        North Carolina
                                    </li>
                                </ul>
                            </div>

                            <div class="column has-text-centered">
                                <h5 class="title has-text-white is-size-5-desktop is-size-5-tablet is-size-5-mobile" style="text-shadow: 2px 2px 2px black;">WORKING HOURS</h5>
                                <hr  style="margin-left:25%;width: 50%;height:2px;margin-top: -3% ;border-width:0;color:yellow;background-color:yellow">
                                
                                <ul class="subtitle has-text-white is-size-6-desktop is-size-6-tablet is-size-6-mobile" style="text-shadow: 2px 2px 2px black;">
                                    <li>
                                        <strong class="has-text-white" style="text-shadow: 2px 2px 2px black;">Monday-Friday:</strong> 8:00am - 5:00pm
                                    </li>
                                    <li>
                                        <strong class="has-text-white" style="text-shadow: 2px 2px 2px black;">Saturday:</strong> 8:00am - 12:00pm
                                    </li>
                                    <li>
                                        <strong class="has-text-white" style="text-shadow: 2px 2px 2px black;">Sunday:</strong> CLOSED
                                    </li>
                                </ul>
                            </div>

                            <div class="column has-text-centered">
                                <h5 class="title has-text-white is-size-5-desktop is-size-5-tablet is-size-5-mobile" style="text-shadow: 2px 2px 2px black;">CONTACT INFO</h5>
                                <hr style="margin-left:25%; width: 50%;height:2px;margin-top: -3% ;border-width:0;color:yellow;background-color:yellow">
                                <a href="tel:9196251417">
                                    <p class="subtitle has-text-white is-size-6-desktop is-size-6-tablet is-size-6-mobile" style="text-shadow: 2px 2px 2px black;"><i class="fa fa-phone">(919)625-1417</i></p>
                                </a>	
                            </div>
                        </div>
                </div>        
            </div>
    </section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>


