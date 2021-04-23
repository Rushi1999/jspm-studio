<footer class="footer wow " data-wow-duration="2s">
	<div class="container">
		<div>
			<div class="row">
				<div class="col-lg-4 col-sm-4">
					<section class="footer-section">
						<h3 class="footer-title">ABOUT US</h3>
						<a href="javascript:void(0);"><img class="footer-logo img-responsive" src="assets/img/logo.png" height="50" width="195" alt="Logo"></a>
						<div class="footer-info">
Jspmstudio, the Socio-Academic Portal of JSPM, is the most frequently visited website of JSPM. 

It was started out by a team of three enthusiastic students with an aim to provide a holistic solution to all student needs; those that are encountered during these four crucial years of college. 

Now, after five successful years, we have a small team of hardworking & committed students working in various departments such as web development, Technical,content writing & content collection.

In short - We aim to make the life of every JSPMian simpler & turn these four years into a smoother ride!</div>
						<div class="footer-contacts footer-contacts_mod-a"> <i class="icon stroke icon-Pointer"></i><address class="footer-contacts__inner">JSPM, Wagholi, Pune</address></div>
						<div class="footer-contacts"> <i class="icon stroke icon-Phone2"></i> <span class="footer-contacts__inner">Call us 020 - 67335100</span> </div>
						<div class="footer-contacts"> <i class="icon stroke icon-Mail"></i> <a class="footer-contacts__inner" href="mailto:jspmstudio@gmail.com">jspmstudio@gmail.com</a> </div>
					</section>
			  <!-- end footer-section -->
				</div>
			<!-- end col -->
				<div class="col-lg-3 col-sm-3 col-sm-offset-1">
				  <section class="footer-section">
					<h3 class="footer-title">QUICK LINKS</h3>
					<ul class="footer-list list-unstyled">
					  <li class="footer-list__item"><a class="footer-list__link" href="update/category/notices/">Notices</a></li>
					  <li class="footer-list__item"><a class="footer-list__link" href="update/category/datesheets/">Datesheets</a></li>
					  <li class="footer-list__item"><a class="footer-list__link" href="update/category/results/">Results</a></li>
					  <li class="footer-list__item"><a class="footer-list__link" href="update/Notes.php">Notes</a></li>
					  <li class="footer-list__item"><a class="footer-list__link" href="update/category/exampapers/">Exam Papers</a></li>
					  <li class="footer-list__item"><a class="footer-list__link" href="update/category/syllabus/">Syllabus</a></li>
					  <li class="footer-list__item"><a class="footer-list__link" href="update/category/disclaimer/">Disclaimer</a></li>
					  <li class="footer-list__item"><a class="footer-list__link" href="update/category/copyright/">Copyright</a></li>
					</ul>
				  </section><!-- end footer-section -->
				</div>
				<div class="col-lg-4 col-sm-4">
					<section class="footer-section" style="padding-top: 18px;">
						<a class="twitter-timeline" data-tweet-limit="3" data-theme="dark" data-link-color="#00BED3" data-chrome="transparent"   href="https://twitter.com/jspmstudio">Tweets by jspmstudio_space</a>
					</section>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="copyright">Copyright © 2020 <a href="http://jspmstudio.in/">Jspmstudio</a>
				<ul class="social-links list-unstyled">
					<li><a class="icon fa fa-facebook" href="https://www.facebook.com/jspmstudio/"></a></li>
					<li><a class="icon fa fa-instagram" href="https://instagram.com/jspmstudio"></a></li>
					<li><a class="icon fa fa-linkedin" href="https://www.linkedin.com/jspmstudio"></a></li>
				</ul>
			</div>
		  </div>
		</div>
	  </div>
	</footer>
  </div>
</div>

<!-- SCRIPTS -->
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script type="text/javascript">
  $("#search").keypress(function(event) {
	if (event.which == 13) {
		event.preventDefault();
		$("#search-global-form").submit();
	}
  });
</script>

<!--THEME-->
<script  src="assets/plugins/sliderpro/js/jquery.sliderPro.min.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
<script src="assets/plugins/jelect/jquery.jelect.js"></script>
<script src="assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="assets/js/cssua.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/custom.js"></script>

<!--Twitter Script-->
<script>
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
	t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  t._e = [];
  t.ready = function(f) {
	t._e.push(f);
  };
  return t;
}(document, "script", "twitter-wjs"));
</script>

<!-- Async Updates Script -->
<script>
	  $.get("assets/updates.php").done(function(data){
		var obj = JSON.parse(data);
		var html="";
		for(var i in obj)
		{
		  html+=obj[i].content;
		}
		document.getElementById("updates").innerHTML = html;
	  });
</script>

<!-- Async JspmPedia Script -->
<script>
	  $.get("assets/posts.php").done(function(data){
		var obj = JSON.parse(data);
		var html="";
		for(var i in obj)
		{
		  html+=obj[i].content;
		}
		document.getElementById("jspmpedia").innerHTML = html;
	  });
</script>
