<style type="text/css">
	#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: auto;
  border-radius: 4px;
  margin:auto;
}

#myBtn:hover {
  background-color: #555;
}
</style>

<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>NEWSLETTER</h3>
					<p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn">SUBSCRIBE</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/logo3.png" width="100px" alt="">
						<p>Data Council since 6 years very efficiently providing a fully integrated Training & Placement service on Software Technologies to thousands fresh technical graduates from various technical colleges of India.</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> Data Council,SN Tower, Above Jijamata Mahila Sahakari Bank Limited, Karve Nagar, Pune, Maharashtra 411052</p></li>
						<li><p><i class="fa fa-phone"></i>  +91 80876 01850</p></li>
						<li><p><i class="fa fa-envelope"></i> nfo@datacouncil.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-6 footer-widget" >
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15135.44393481443!2d73.81149522054879!3d18.489955098953452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfe79bf771d7%3A0xac81e25be4cc4bf!2sKarve%20Nagar%2C%20Pune%2C%20Maharashtra%20411052!5e0!3m2!1sen!2sin!4v1574428292244!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by <a href="datacouncil.in" target="_blank">DataCouncil</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>