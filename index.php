<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>

	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<nav>
				<div class="logo">
					<a href="#"><span>Foysal</span> Ahmed</a>
				</div>

				<div class="list-darkmode-menu">
					<ul>
						<li>
							
							<a class="active" href="#home">Home</a>
							<a href="#about">About</a>
							<a href="#services">Services</a>
							<a href="#portfolio">Portfolio</a>
							<a href="#clients">Clients</a>
							<a href="#contact">Contact</a>
							
						
						</li>
					</ul>
					<label class="mode">
						<input type="checkbox" checked="checked" id="darkModeButton">
						<i class="fa-solid fa-sun"></i>
						<i class="fa-solid fa-moon"></i>
					</label>
					<button class="hamburger">
						<div class="bar">
						</div>
					</button>
				</div>
			</nav>
		</div>
	</header>

	<section id="home" class="home">
		<div class="container">
			<div class="home-info">
				<div class="left">
					<h3>Hello I'm</h3>
					<h1>Foysal Ahmed</h1>
					<h4>And I'm a <span class="multiple"></span></h4>
					<p>
						Hi! I'm Foysal Ahmed, a passionate front-end developer specializing in
						translating design concepts into seamless and interactive web
						experiences using HTML, CSS, and JavaScript.
					</p>
					<div class="social">
						<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-behance"></i></a>
						<a href="#"><i class="fa-brands fa-upwork"></i></a>
					</div>
					<div class="btn">
						<button>Download CV</button>
					</div>
				</div>
				<div class="right">
					<div class="profile">
						<img src="<?php echo get_theme_file_uri() ?>/img/1.jpg" alt="Profile">
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section id="about" class="about">
		<div class="container">
			<div class="about-wrapper">
				<div class="about-left">
					<div class="about-img">
						<img src="<?php echo get_theme_file_uri() ?>/img/2.jpg" alt="about image">
					</div>
				</div>
				<div class="about-right">
					<div class="about-info">
						<h2>About <span>Me</span></h2>
						<h3>Front-End Developer</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi nulla voluptatem delectus, assumenda, blanditiis sapiente ipsam! Nihil fuga, hic nam? Sit sed quod minus commodi sequi molestias laboriosam quidem quasi.</p>
						<button>Read More</button>
					</div>
				</div>
			</div>
		</div>
	</section>

 	<section id="services" class="services">
		<div class="container">
			<h2>Our <span>Services</span></h2>
			<div class="services-box foysalanimated">
				<div class="box-s">
					<div class="icon">
						<i class="fa-solid fa-code"></i>
					</div>
					<h3>Web Development</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. At pariatur harum asperiores, dignissimos eos in neque quam rerum quas, consequatur ipsa quaerat aperiam cupiditate aut, distinctio quisquam possimus. Ducimus minus iure.
					</p>
					<div class="services-btn">
						<button>Read More</button>
					</div>
				</div>

				<div class="box-s">
					<div class="icon">
						<i class="fa-solid fa-pen-nib"></i>
					</div>
					<h3>Graphic Design</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. At pariatur harum asperiores, dignissimos eos in neque quam rerum quas, consequatur ipsa quaerat aperiam cupiditate aut, distinctio quisquam possimus. Ducimus minus iure.
					</p>
					<div class="services-btn">
						<button>Read More</button>
					</div>
				</div>

				<div class="box-s">
					<div class="icon">
						<i class="fa-solid fa-chart-column"></i>
					</div>
					<h3>Digital Marketing</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. At pariatur harum asperiores, dignissimos eos in neque quam rerum quas, consequatur ipsa quaerat aperiam cupiditate aut, distinctio quisquam possimus. Ducimus minus iure.
					</p>
					<div class="services-btn">
						<button>Read More</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="portfolio" class="portfolio">
		<div class="container">
			<h2>Latest <span>Project</span></h2>
			<div class="portfolio-wrapper">
				<div class="portfolio-box foysalanimated">
					<img src="<?php echo get_theme_file_uri() ?>/img/p4.png" alt="">
					<div class="portfolio-info">
						<h4>Graphic Design</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Dolore saepe </p>
						<a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
					</div>
				</div>

				<div class="portfolio-box foysalanimated">
					<img src="<?php echo get_theme_file_uri() ?>/img/p1.png" alt="">
					<div class="portfolio-info">
						<h4>Web Design</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Dolore saepe
						</p>
						<a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
					</div>
				</div>

				<div class="portfolio-box foysalanimated">
					<img src="<?php echo get_theme_file_uri() ?>/img/p5.png" alt="">
					<div class="portfolio-info">
						<h4>Web Design</h4>
						<p> Lorem ipsum dolor sit amet consectetur adipisicing elit Dolore saepe</p>
						<a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	 <section id="clients">
	  <div class="client-container">
	    <div class="client-heading aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
	      <h4>
	        Our Happy <span>Clients</span> 
	      </h4>
	      <p> 
	        Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Alias rerum repudiandae eligendi quas unde eaque maxime magni iste volupta
	      </p>

	      <marquee onmouseover="this.stop()" onmouseout="this.start()" class="client-marquee aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client8.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client2.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client3.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client4.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client5.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client6.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client7.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client8.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client9.png">
	        <img src="<?php echo get_theme_file_uri() ?>/img/client1.png">
	      </marquee>
	    </div>
	  </div>
	</section> 

	<section id="contact" class="contact">
		<div class="container">
			<div class="contact-info">
				<div class="contact-left">
				<h1> Get In <span>Touch </span></h1>

		     	<p> Hello Sir'<br>If you need any graphic and web design Project, Full Free please contact me! 
		     	</p>
		     	<br>
		     	<h3>HEAD OFFICE </h3>
		     	<p> Fotehpur, Koroi-Tola, Senbag, Noakhali </p>
		     	<br>
		     	<p>Phone: +880 1856035477</p>
		     	<p> Email: MdJakerHossainFoysal@gmail.com </p>
					
				</div>

				<div class="contact-right">
					<form>

						<div class="input-box">
							<input type="text" placeholder="Full Name">
							<input type="email" placeholder="Email Address">
						</div>
						<div class="input-box">
							<input type="number" placeholder="Number">
							<input type="text" placeholder="Email Subject">
						</div>

						<textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>

						<button type="submit">Send Message</button>

					</form>
					
				</div>
			</div>
		</div>
	</section> 



	<footer class="footer">
		<div class="container">
			<div class="footer-wrapper">
				<div class="footer-info">
					<p>Copyright &copy; 2024 by <a target="_blank" style="text-decoration: none; color: blueviolet; font-size: 20px; font-weight: bold;" href="https://www.facebook.com/profile.php?id=61557724919744"> Foysal Ahmed</a> | All Rights Reserved</p>
				</div>
				<div class="iconTop">
					<a href="#home">
						<i class="fa-solid fa-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>


	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
	
	

<?php wp_footer(); ?>
</body>
</html>