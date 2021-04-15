<?php include( "assets/functions.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php PrintHeadMetadata( "Jspmstudio | Contact Us"); ?> </head>

<body>
	<div id="page-preloader"><span class="spinner"></span> </div>
	<div class="layout-theme animated-css" data-header="sticky" data-header-top="200">
		<div id="wrapper">
			<?php include ( "assets/header.php"); ?>
			<div id="spacing"> </div>
			<div class="wrap-title-page">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="ui-title-page">contact us</h1> </div>
					</div>
				</div>
			</div>
			<main class="main-content">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<section class="section_contacts">
								<h2 class="ui-title-inner decor decor_mod-a">Get in Touch with us</h2>
								<p>We are here to help you</p>
								<ul class="list-social list-inline">
									<li> <a href="https://www.facebook.com/jspmstudio"><i class="icon fa fa-facebook"></i></a> </li>
									<li> <a href="https://instagram.com/jspmstudio"><i class="icon fa fa-instagram"></i></a> </li>
										<li> <a href="https://www.linkedin.com/jspmstudio"><i class="icon fa fa-linkedin"></i></a> </li>
								</ul>
								<ul class="list-contacts list-unstyled">
									<li class="list-contacts__item"> <i class="icon stroke icon-Phone2"></i>
										<div class="list-contacts__inner">
											<div class="list-contacts__title">PHONE</div>
											<div class="list-contacts__info">020 - 67335100</div>
										</div>
									</li>
									<li class="list-contacts__item"> <i class="icon stroke icon-Mail"></i>
										<div class="list-contacts__inner">
											<div class="list-contacts__title">EMAIL</div>
											<div class="list-contacts__info">jspmstudio@gmail.com</div>
										</div>
									</li>
									<li class="list-contacts__item"> <i class="icon stroke icon-WorldWide"></i>
										<div class="list-contacts__inner">
											<div class="list-contacts__title">WEB</div>
											<div class="list-contacts__info"><a href="http://www.jspmstudio.in">Jspmstudio</a> </div>
											<div class="list-contacts__info"><a href="http://www.jspm.edu.in/">JSPMPedia</a> </div>
											<div class="list-contacts__info"><a href="#">Web Land</a> </div>
										</div>
									</li>
									<li class="list-contacts__item"> <i class="icon stroke icon-House"></i>
										<div class="list-contacts__inner">
											<div class="list-contacts__title">location</div>
											<div class="list-contacts__info">Gat No. 720/2, Nagar Road, Wagholi, Pune, Maharashtra 412207</div>
										</div>
									</li>
								</ul>
							</section>
						</div>
						<div class="col-md-7">
							<div class="section_map">
								<h2 class="ui-title-inner decor decor_mod-a">OUR LOCATION</h2>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.7311806104185!2d74.00240467346808!3d18.586154293654467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c36056a6b79f%3A0xce759188b8c9e236!2sBhivrabai+Sawant+Institute+of+Technology+%26+Research!5e0!3m2!1sen!2sin!4v1524029200928" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>
							</div>
						</div>
					</div>
				</div>
				<section class="section_contacts-form">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="ui-title-block">Send <strong>Us Message</strong></h2>
								<div class="wrap-subtitle">
									<div class="ui-subtitle-block ui-subtitle-block_w-line">If you have some feedback or want to ask any questions</div>
								</div>
								<div id="success" class="alert alert-success"> <strong>Success!</strong> Your message was sent successfully! </div>
								<div id="error" class="alert alert-danger"> <strong>Failed!</strong> Something went wrong, try refreshing and submitting the form again. </div>
								<form id="contactForm" class="form-contact ui-form" action="#" method="post">
									<div class="row">
										<div class="col-md-6">
											<input name="name" class="form-control" type="text" placeholder="Full Name" required> </div>
										<div class="col-md-6">
											<input name="subject" class="form-control" type="text" placeholder="Subject"> </div>
										<div class="col-xs-12">
											<textarea name="message" class="form-control" required rows="11"></textarea>
											<button class="btn btn-primary btn-effect">SEND NOW</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
			</main>
			<?php include "assets/footer.php"; ?> </body>

</html>