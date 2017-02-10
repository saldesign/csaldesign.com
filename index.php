<?php 
//load the functions file
require_once('functions.php');
//parse the form when it is submitted
/*if( true == $_POST['did_send'] ){
	//extract and sanitize user submitted data
	$name    = filter_var( $_POST['name'] , FILTER_SANITIZE_STRING );
	$email   = filter_var( $_POST['email'] , FILTER_SANITIZE_EMAIL );
	$phone 	 = filter_var( $_POST['phone'] , FILTER_SANITIZE_NUMBER_INT );
	$website 	 = filter_var( $_POST['website'] , FILTER_SANITIZE_URL );
	$message = filter_var( $_POST['message'] , FILTER_SANITIZE_STRING );
	
	//validate all fields
	$valid = true;
	//check to see if name is blank
	if( '' == $name ){
		$valid = false;
		$errors['name'] = 'Please provide your name.';
	}
	//check for invalid or blank email
	// ! means 'not'
	if( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
		$valid = false;
		$errors['email'] = 'Please provide a valid email address.';
	}
	//if the data passes validation, send the mail.
	//otherwise, show an error message
	if( $valid ){
		//send mail!
		$to = 'saldarriagadesign@gmail.com';
		$subject = 'Somebody Wants To Hire You!';
		//  \n is line break
		//  .= is the concatenating operator (add on to)
		$body = "Sent By: $name \n";
		$body .= "Email: $email \n";
		$body .= "Phone Number: $phone \n";
		$body .= "Website: $website \n";
		$body .= "Message: $message";
		$headers = "From: $email \r\n";
		$headers .= "Reply-to: $email";
		$mail_status = mail($to, $subject, $body, $headers);
		if($mail_status){
			$feedback = 'Thank you for your message';
		}else{
			$feedback = 'There was a problem sending the mail.';
		}
		
	}else{
		$feedback = 'Something went wrong. Try again.';
	}
}*/
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title>CSalDesign | Web Designer | San Diego</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="dist/aos.css" />	
	<link rel="icon" 
	      type="image/png" 
	      href="http://csaldesign.com/csaldesign/images/logo.png">
</head>

<body>
<header>
		<h1>Christian Saldarriaga | Front End Web Designer in San Diego</h1>
	<div data-aos="fade-down" data-aos-offset="0" class="header-container">
		<h2>Nice to meet you! I'm Christian Saldarriaga,   
			San Diego Based Web Designer &amp; Brand Strategist.</h2>
		<a href="#contact" id="introContact" class="button">Contact Me</a>
	</div>
	<a href="#specialties" class="learn-more">Learn More About My Work</a>
</header>

<main>
	<section class="specialties cf" id="specialties">
		<div>
			<span data-aos="fade-down">
				<h2>My Specialties</h2>
				<p>These are some of my skills to apply to your projects!</p>
			</span>
			<a href="#web"><section data-aos="fade-down" class="code">
				<h3>Code</h3>
				<p>Custom Built Wordpress Themes</p>
				<p>Responsive Mobile Friendly Websites</p>
				<p>HTML5 &amp; CSS3 Best Practices</p>
			</section></a>
			<a href="#branding"><section data-aos="fade-down" class="branding">
				<h3>Branding</h3>
				<p>Logo Design</p>
				<p>Branding Strategy</p>
				<p>Marketing</p>
			</section></a>
			<a href="#web"><section data-aos="fade-down" class="ui">
				<h3>UI/UX</h3>
				<p>User Behavior Research</p>
				<p>Conversion Optimization</p>
				<p>User Interface Design</p>
			</section></a>
		</div>
	</section>

	<section id="web" class="projects">
		<span data-aos="fade-down">
			<h2>Web Design | Web Development</h2>
			<p>These projects were done for clients and as school projects</p>
		</span>
		<section data-aos="fade-down" class="cf">
			<img src="http://csaldesign.com/csaldesign/images/beetroot-mock.png" />
			<div>
				<h3><a href="http://beetrootrestaurant.com/" target="_blank">Beetroot Restaurant</a></h3>
				<p class="tags">Wordpress | Branding  | UI/UX</p>
				<p>Website and branding built for a healthy/homemade restaurant in Guadalajara, Mexico.</p>
				<p>The client requested a logo, print menu and website with menu, reservation, blog and event capabilities. These features have been implemented using a custom wordpress theme, custom post types and wordpress plugins</p>
				<p>Website and brand strategy process included product/target audience research, <a href="https://app.moqups.com/saldarriagadesign@gmail.com/jQfuOEAD6S/view" target="_blank">moqups</a>/thumbnails, styletiles, and comps to the final version. The client signed off on the final photoshop comps of the website and a rough version of the logo before going to development.</p>
				<a href="http://beetrootrestaurant.com/" target="_blank" class="button">View Website</a>		
			</div>
		</section>
		<section data-aos="fade-down" class="cf">
			<img src="http://csaldesign.com/csaldesign/images/rennspec-mock.png" />
			<div>
				<h3><a href="http://csaldesign.com/public/rennspecmotorsports/" target="_blank">Rennspec Motorsports</a></h3>
				<p class="tags">Branding  | UI/UX | HTML5/CSS3</p>
				<p>Website and branding strategy built for a fictional performace auto shop specializing in performance vehicle service, parts and events. </p>
				<p>The website features product galleries, service request forms, and race events. The site is fully mobile responsive, hand coded using HTML5, CSS3 and JQuery.</p>
				<p>Website and branding strategy process included product/target audience research, thumbnails, styletiles, and comps to the final version.</p>
				<a href="http://csaldesign.com/public/rennspecmotorsports/" target="_blank" class="button">View Website</a>		
			</div>
			</section>
	</section>	

	<section id="branding" class="projects">
		<span data-aos="fade-down">
			<h2>Graphic Design | Branding</h2>
			<p>Logos and Branding Strategy projects done for clients and class projects.</p>
		</span>	
		<section data-aos="fade-down" class="cf">
			<img src="http://csaldesign.com/csaldesign/images/nbs.png" />
			<div>
				<h3><a href="http://csaldesign.com/public/nbs_rjs2/" target="_blank">Neighborhood Bike Shop</a></h3>
				<p class="tags">Branding  | UI/UX</p>
				<p>This project was a class project that became a testing piece for layout options and branding. The Website layout and design were designed to be responsive and functional. This was a project assigned in an earlier class before I learned responsive design. See the Pre-Redesign <a href="http://csaldesign.com/public/nbs/"  target="_blank">here</a></p>
				<a href="http://csaldesign.com/public/nbs_rjs2/" target="_blank" class="button">View Website</a>		
			</div>
		</section>
		<section data-aos="fade-down" class="cf">
			<img src="http://csaldesign.com/csaldesign/images/betabase.png" />
			<div>
				<h3><a href="http://csaldesign.com/public/beta-base_site/" target="_blank">Beta Base</a></h3>
				<p class="tags">Branding | UI/UX | PHP | MySQL</p>
				<p>Branding and logo designed for PHP class project. Climbing database website designed from scratch using PHP and MySQL.</p>
				<a href="http://csaldesign.com/public/beta-base_site/" target="_blank" class="button">View Website</a>		
			</div>
		</section>
	</section>
</main>

<footer>
	<section id="contactform" class="form">
		<span data-aos="fade-down">
			<h2>Let's Get To Work</h2>
			<p>Currently Welcoming New Projects!</p>
			<a href="#contactform" id="contact" class="button contact">Contact Me!</a>	
		</span>
		<?php 
		//show the feedback if it exists
		if(isset($feedback)){
			echo '<div class="feedback">';
			echo $feedback;
			
			mmc_array_list($errors);
			
			echo '</div>';
		} ?>
		<form id="form" method="post" action="#form">
<!-- 			<p><span class="close">X</span><p>
 -->			<p>Please take a moment and describe what you are looking for.</p>
			<label for="name">Name:
				<input type="text" name="name" id="name" size="30" maxlength="50" placeholder="Name" autofocus="" required="" value="<?php echo $name; ?>">
				<?php mmc_inline_error( $errors , 'name' ); ?>
			</label>
			<label for="email">Email:
				<input type="email" name="email" id="email" size="30" maxlength="50" placeholder="Email" required="" value="<?php echo $email; ?>">
				<?php mmc_inline_error( $errors , 'email' ); ?>
			</label>
			<label for="phone">Phone Number:
				<input type="tel" name="phone" id="phone" size="30" maxlength="50" placeholder="Phone Number" required="" value="<?php echo $phone; ?>">
			</label>
			<label for="website">Website &#40;optional&#41;:
				<input type="text" name="website" id="website" size="30" maxlength="50" placeholder="Website &#40;optional&#41;" >
			</label>
			<label for="message">Message &#40;optional&#41;:
				<textarea type="text" name="message" id="message" size="30" placeholder="Message &#40;optional&#41;" ><?php echo $message; ?></textarea>
				<?php mmc_inline_error( $errors , 'message' ); ?>
			</label>
			<input class="button" type="submit" name="submit" id="submit" value="Submit">
			<input type="hidden" name="did_send" value="true">
		</form>	
	</section>
	
	<section class="social">
		<span data-aos="fade-down">
			<h2>Follow My Recent Work &amp; Fun!</h2>
			<p>Follow me to stay up to date with my most recent projects!</p>
			<div class="cf">
				<a class="linkedin" target="_blank"href="https://www.linkedin.com/in/christian-saldarriaga-6069444a?trk=hp-identity-headline"></a>			
				<a class="behance" target="_blank"href="https://www.behance.net/CSaldesign"></a>			
				<a class="facebook" target="_blank"href="https://www.facebook.com/christian.saldarriaga"></a>			
				<a class="instagram" target="_blank"href="https://www.instagram.com/csaldarrr/"></a>			
			</div>
		</span>
	</section>
</footer>

<!-- Form Validation &amp; Contact
https://github.com/melissacabral/WIP400-days-1-5/tree/master/day5-validation  -->


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
	<script src="script.js"></script>
</body>
</html>

