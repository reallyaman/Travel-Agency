<!-- INSERT into contact(name,email,phone,line) VALUES("Afroj","abc@gmail.com","9784587073","hbcugugggsbsccigiggiu"); -->
<?php
include("db.php");
if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql = "INSERT into contact(name,email,phone,line) VALUES('$name','$email','$tel','$message')";
        ;

        mysqli_query($conn,$sql);

        // if(mysqli_query($conn,$sql)){
        //     header("ooo.php");
        //     echo"";
        // }
        // else{
        //     echo"error";
        // }

    }
     
    ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/4c68aea23b.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fluid.css">	
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Contact</title>
</head>
		<nav class="sticky-nav">
			<a href="#"><img src="digisolve-logo.png" alt="Logo" class="logo"></a>
			<ul class="main-nav">
				<li><a href="index.html" target="_blank">Home</a></li>
				<li><a href="contact.php" target="_blank">Contact</a></li>
				<li><a href="aboutus.html" target="_blank">About</a></li>
			</ul>
		</nav>
	<section class="contact-section">
		<div class="row">
			<h2 class="contact-heading">We'll contact you ASAP!</h2>
		</div>
		<div class="row">
			<form method="post" action="contact.php" class="contact-form">
				<div class="row">
					<div class="col span_1_of_3">
						<label for="name">Name</label>
					</div>
					<div class="col span_2_of_3">
						<input type="text" name="name" id="name" placeholder="Your name" required>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="email">Email</label>
					</div>
					<div class="col span_2_of_3">
						<input type="email" name="email" id="email" placeholder="Your email" required>
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label for="tel">Contact number</label>
					</div>
					<div class="col span_2_of_3">
						<input type="tel" name="tel" id="tel" placeholder="Enter your contact number here" pattern="[0-9]{10}" required>
					</div>
				</div>

				<div class="row">
					<div class="col span_1_of_3">
						<label for="newsletter">Urgent?</label>
					</div>
					<div class="col span_2_of_3">
						<input type="checkbox" name="newsletter" id="newsletter" checked>&nbsp;Yes
					</div>
				</div>
				<div class="row">
					<div class="col span_1_of_3">
						<label>Drop us a line</label>
					</div>
					<div class="col span_2_of_3	">
						<textarea name="message" id="message" placeholder="Your message"></textarea>
					</div>
				</div>
				<div>
					&nbsp;
				</div>
				<div class="submit-btn">
					<input type="submit" name="submit" value="Send it!">
				</div>
			</form>
		</div>
	</section>
    <footer>
		<div class="row">
			<div class="col span_1_of_2">
				<ul class="footer-nav">
					<li>
						<a href="aboutus.html" target="_blank">About us</a>
					</li>
					<li>
						<a href="health.html" target="_blank">Health & Support</a>
					</li>
					<li>
						<a href="faqs.html" target="_blank">FAQ's</a>
					</li>
					<li>
						<a href="terms_and_conditions.html" target="_blank">T&C</a>
					</li>
				</ul>
			</div>

			<div class="col span_1_of_2">
				<ul class="social-links">
					<li>
						<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li>
						<a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
					</li>
					<li>
						<a href="https://www.google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row" align="center">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
	</footer>
	</html>
