<?php include( "assets/functions.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php PrintHeadMetadata( "JspmStudio"); ?>
	<style type="text/css">
		.notesearch {
			height: 50px;
		}
	</style>
</head>

<body>
	<div id="page-preloader">
		<div id="loading-center">
			<h1 id="loading-center" class="preloader_heading animated bounceInDown">JspmStudio</h1>
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div>
	<div class="layout-theme animated-css" data-header="sticky" data-header-top="200">
		<div id="wrapper">
			<?php include ( "assets/header.php"); ?>
			<div id="spacing"> </div>
			<div class="main-content">
				<div id="sliderpro1" class="slider-pro main-slider">
					<div class="sp-slides">
						<div class="sp-slide"> <img class="sp-image" src="assets/img/1st.jpg" data-src="assets/img/1st.jpg" data-retina="assets/img/1st.jpg" alt="img" />
							<div class="item-wrap sp-layer  sp-padding" data-horizontal="700" data-vertical="1" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> </div>
						</div>
						<div class="sp-slide"> <img class="sp-image" src="assets/img/2nd.jpg" data-src="assets/img/2nd.jpg" data-retina="assets/img/2nd.jpg" alt="img" />
							<div class="item-wrap sp-layer  sp-padding" data-horizontal="200" data-vertical="30" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"></div>
						</div>
						<div class="sp-slide"> <img class="sp-image" src="assets/img/3rd.jpg" data-src="assets/img/3rd.jpg" data-retina="assets/img/3rd.jpg" alt="img" />
							<div class="item-wrap sp-layer  sp-padding" data-horizontal="700" data-vertical="1" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> </div>
						</div>
						<div class="sp-slide"> <img class="sp-image" src="assets/img/4th.jpg" data-src="assets/img/4th.jpg" data-retina="assets/img/4th.jpg" alt="img" />
							<div class="item-wrap sp-layer  sp-padding" data-horizontal="700" data-vertical="1" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200"> </div>
						</div>
					</div>
				</div>
				<div class="section_mod-a">
					<div class="container">
						<div class="section_mod-a__inner" id="note_sec">
							<div class="row">
								<div class="col-md-8">
									<section class="section-advantages wow">
										<h2 class="ui-title-block ui-title-block_mod-a">One way stop for notes and more</h2>
										<ul class="advantages advantages_mod-a list-unstyled">
											<li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-Cup"></i></span>
												<div class="advantages__inner">
													<h3 class="ui-title-inner decor decor_mod-a">Notices</h3>
													<div class="advantages__info">
														<p>Check out the latest updates from JSPM's admin without any hassle. Now no more running to the admin at the last minute.</p>
													</div>
												</div>
											</li>
											<li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-DesktopMonitor"></i></span>
												<div class="advantages__inner">
													<h3 class="ui-title-inner decor decor_mod-a">Mcq,Notes And Papers</h3>
													<div class="advantages__info">
														<p>Find the mcq,notes and previous year examination papers for all semesters. Additionally, class assignments and lab work to get you going for that perfect grade.</p>
													</div>
												</div>
											</li>
											<li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-WorldGlobe"></i></span>
												<div class="advantages__inner">
													<h3 class="ui-title-inner decor decor_mod-a">JSPMPEDIA</h3>
													<div class="advantages__info">
														<p>The ultimate destination to explore JSPM! A single platform that presents a humongous pack of movie and food reviews, latest technological releases, thought provoking poetries and the latest trends in the campus.</p>
													</div>
											</li>
											<li class="advantages__item"> <span class="advantages__icon"><i class="icon stroke icon-Users"></i></span>
												<div class="advantages__inner">
													<h3 class="ui-title-inner decor decor_mod-a">Societies And Faculty at JSPM</h3>
													<div class="advantages__info">
														<p>Myriad of societies and our experienced faculty make JSPM what it is. Read on to find out about your honorable professors, society events and much more!</p>
													</div>
												</div>
											</li>
										</ul>
									</section>
									</div>
									<div class="col-md-4">
										<section class="find-course find-course_mod-a wow " data-wow-duration="2s">
											<h2 class="find-course__title"><i class="icon stroke icon-Search"></i>SEARCH FOR MCQ & NOTES</h2>

											<form class="find-course__form" action="NotesSearch.php" method="GET" >
												<div class="form-group">

													<?php if(isset($_GET[ 'error'])) { ?>
													<div class="alert alert-danger"> <strong>No query!</strong> Please type in a query to search. </div>
													<?php } ?>

													<input class="form-control notesearch" type="text" name="query" placeholder="Search for..">
													
													<!-- <select id="NorQ" name="branch" class="form-control notesearch">
														<option value="coe">NOTES</option>
														<option value="it">MCQ</option>
													</select> -->

													<select name="branch" id="DEPT" class="form-control notesearch">
														<option value="coe">COMP</option>
														<option value="it">IT</option>
														<option value="ece">E&TC</option>
														<option value="ice">EEE</option>
														<option value="mpae">MECH</option>
														<option value="mpae">FE</option>
													</select>

													<select name="sem" id="SEM" class="form-control notesearch">
														<option value="1">1st Semester</option>
														<option value="2">2nd Semester</option>
														<option value="3">3rd Semester</option>
														<option value="4">4th Semester</option>
														<option value="5">5th Semester</option>
														<option value="6">6th Semester</option>
														<option value="7">7th Semester</option>
														<option value="8">8th Semester</option>
													</select>
												</div>
												<div class="find-course__wrap-btn">
													<button id="drive_button" class="btn btn-effect btn-info">SEARCH</button>
												</div>
											</form>
										</section>
									</div>

									
								</div>
							</div>
						</div>
					</div>
					<section class="section-default">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="wrap-title">
										<h2 class="ui-title-block">Latest on <strong>JSPMSTUDIO updates</strong></h2>
										<div class="ui-subtitle-block ui-subtitle-block_mod-b"></div>
									</div>
									<div id="updates" class="posts-wrap"> </div>
									<div style="text-align: center;">
										<!-- <button class="btn btn-effect btn-info" onclick="window.location='update/update.php';">View all updates</button> -->
									    <button class="btn btn-effect btn-info" onclick="window.location='jspm-studio/search-page.php?query=hum';">View all updates</button>
									
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section-default">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="wrap-title">
										<h2 class="ui-title-block" id="pedia">Read on <strong>JSPMPEDIA</strong></h2>
										<div class="ui-subtitle-block ui-subtitle-block_mod-b">JSPMSTUIO Blog</div>
									</div>
									<div id="nsitpedia" class="posts-wrap"> </div>
									<div style="text-align: center;">
										<button class="btn btn-effect btn-info" onclick="window.location='http://www.jspm.edu.in/';">Go to JSPMpedia</button>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
				<?php include ( "assets/footer.php");?> 
		</body>
</html>
<script type="text/javascript" src="team/js/jquery.js"></script>
<script type="text/javascript" src="team/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="team/js/lightbox.min.js"></script>
<script type="text/javascript" src="team/js/main.js"></script>
<script type="text/javascript" src="team/js/jquery.lazyload.js"></script>
<script>
$(document).ready(function() {
$("#drive_button").onclick(function(){
var Notes_MCQ = $("#NorQ").val();
var Dept = $("#DEPT").val();
var Sem = $("#SEM").val();
if(Notes_MCQ!=NULL && Dept!=NULL && Sem !=NULL){
if(Dept = "coe"){
if(Sem="1")
window.location='https://drive.google.com/drive/folders/1MwVCbvSxagmYYsyH-Lz_XQLvf4Di1fzp?usp=sharing';
else if(Sem="2")
window.location='https://drive.google.com/drive/folders/1fa-8WJ0TUqMtOuEuqOq7gJhLc68p8S86?usp=sharing';
else if(Sem="3")
window.location='https://drive.google.com/drive/folders/1pixhD5sRPCzEfSl2pt5l4VJzqDvy5_fD?usp=sharing';
else if(Sem="4")
window.location='https://drive.google.com/drive/folders/1loUTN9YhE30BLSMT4HzFUPm3IV27s2yN?usp=sharing';
else if(Sem="5")
window.location='https://drive.google.com/drive/folders/1FKu6bCVqDgH8NzgCJZpf2xGkzwLz8IbV?usp=sharing';
else if(Sem="6")
window.location='https://drive.google.com/drive/folders/1BzeAuaM3qud4bnB8WG82tN40Ga1L7Jzt?usp=sharing';
else if(Sem="7")
window.location='https://drive.google.com/drive/folders/1sylea_1jA6ufpPfTzh3SGpiYck93eCFH?usp=sharing';
else if(Sem="8")
window.location='https://drive.google.com/drive/folders/1eV5_kHLftilzPhbzFWavDN-4LOb0BSyg?usp=sharing';
}

if(Dept = "it"){
if(Sem="1")
window.location='https://drive.google.com/drive/folders/1zZb8btsjnoB36ql9Zucm791pbNyxIO8S?usp=sharing';
else if(Sem="2")
window.location='https://drive.google.com/drive/folders/1pnJdoTA3nvBV3PtwsD--c9J8oyBCYvsw?usp=sharing';
else if(Sem="3")
window.location='https://drive.google.com/drive/folders/1VO1EtNmpVUAjXxwJezTwoUf9sF5xZeTN?usp=sharing';
else if(Sem="4")
window.location='https://drive.google.com/drive/folders/1CrRFycIdlcRGQM-EGdfJ4j8U849zVwcT?usp=sharing';
else if(Sem="5")
window.location='https://drive.google.com/drive/folders/16V2bD5Ev1l7xSLYXhmnex-q1VzMPNS78?usp=sharing';
else if(Sem="6")
window.location='https://drive.google.com/drive/folders/1yZV81450R23AxUpL47u7TFIK_fFTrIHv?usp=sharing';
else if(Sem="7")
window.location='https://drive.google.com/drive/folders/1QKP-TVe5CTFOShD_re2fJIfzJNUv9vnN?usp=sharing';
else if(Sem="8")
window.location='https://drive.google.com/drive/folders/1R2UxG3GbioKS54Tww0AIBOV75y1Rkr7b?usp=sharing';
}

if(Dept = "ece"){
if(Sem="1")
window.location='https://drive.google.com/drive/folders/1kZVXbYXeDOVgASoQa_JzZPFveKjEPfaT?usp=sharing';
else if(Sem="2")
window.location='https://drive.google.com/drive/folders/1_ts9nuCkxngkdVqM3KPe3TnseVv7Vu9q?usp=sharing';
else if(Sem="3")
window.location='https://drive.google.com/drive/folders/1psoUGlQPzyB6xywnZlqrbRCN8IMBrZ7G?usp=sharing';
else if(Sem="4")
window.location='https://drive.google.com/drive/folders/1L1E8QUSOqUDnsLkbWuU8OapSDNtxsoxi?usp=sharing';
else if(Sem="5")
window.location='https://drive.google.com/drive/folders/1g2B2Oj0nAavy3dGfhhweXbxWF-NI1goP?usp=sharing';
else if(Sem="6")
window.location='https://drive.google.com/drive/folders/19iTx3yvMiHZL8qP-M9jIABFqdKgnK4eI?usp=sharing';
else if(Sem="7")
window.location='https://drive.google.com/drive/folders/1FQGj7NOXceMU7V0scLEhsaf-P_rJwLky?usp=sharing';
else if(Sem="8")
window.location='https://drive.google.com/drive/folders/1khuW4r2jaydsWj6XX8DqD0Jea4B-feg0?usp=sharing';
}

if(Dept = "ice"){
if(Sem="1")
window.location='https://drive.google.com/drive/folders/1kJdKPxa4QNe_0jSKg8JHrN2yp2VHPZAX?usp=sharing';
else if(Sem="2")
window.location='https://drive.google.com/drive/folders/1DKnoyu2fR8S0sQ-SbR_0fZJJZHdWHO7L?usp=sharing';
else if(Sem="3")
window.location='https://drive.google.com/drive/folders/1G2glp5nTJlLL1P-Zd6DBQcef-x0f3OPj?usp=sharing';
else if(Sem="4")
window.location='https://drive.google.com/drive/folders/1G2glp5nTJlLL1P-Zd6DBQcef-x0f3OPj?usp=sharing';
else if(Sem="5")
window.location='https://drive.google.com/drive/folders/121NRU84zvan6Rsl_ME-lUT0OIDf8liN2?usp=sharing';
else if(Sem="6")
window.location='https://drive.google.com/drive/folders/1IkR1laGtVjAf-9vbQLQi-5bPDJx2fjOC?usp=sharing';
else if(Sem="7")
window.location='https://drive.google.com/drive/folders/1WWjxEJ1M4gqljemlY8cU0JMh9_NvfeSF?usp=sharing';
else if(Sem="8")
window.location='https://drive.google.com/drive/folders/1klmIp4QOjw2siQDSuvhUiSWCHxm43jM0?usp=sharing';
}

if(Dept = "mpae"){
if(Sem="1")
window.location='https://drive.google.com/drive/folders/13lHNpE91CWJoBqjzASH6QYAMj0655Nhf?usp=sharing';
else if(Sem="2")
window.location='https://drive.google.com/drive/folders/1o42KvfhVIK82ZNKmPuJ073NXCC3RZ5NQ?usp=sharing';
else if(Sem="3")
window.location='https://drive.google.com/drive/folders/1pzo1l9I6i5hJFXwq8rIhYrLXa22hED1Z?usp=sharing';
else if(Sem="4")
window.location='https://drive.google.com/drive/folders/1vSfGQiVSAdgO6kq9BSMoT1kaFiG3nMUt?usp=sharing';
else if(Sem="5")
window.location='https://drive.google.com/drive/folders/1KjCvFp6dkC7rJrOOK6PM3ybzCvViCn6p?usp=sharing';
else if(Sem="6")
window.location='https://drive.google.com/drive/folders/1BkYxpEIlycutbDyQ4U_E6p6Z-M_7v7LO?usp=sharing';
else if(Sem="7")
window.location='https://drive.google.com/drive/folders/1EstLHhqxDdsCH7psuR5igbZJgDH0V1QR?usp=sharing';
else if(Sem="8")
window.location='https://drive.google.com/drive/folders/1nxGc4nisqMqmdZT1Ql0ueQkmMD5uxF3x?usp=sharing';
}
}
});
});
</script>