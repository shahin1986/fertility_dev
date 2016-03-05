<section id="footer">
	<div class="container">
		<div class="col-lg-2 col-sm-3 col-xs-6">
			<h3>what we do</h3>
			<ul>
				<li><a href="#">Find a Clinic</a></li>
				<li><a href="#">Find a Doctor</a></li>
				<li><a href="#">Ask a Doctor</a></li>
			</ul>	
		</div>
		<div class="col-lg-2 col-sm-3 col-xs-6">
			<h3>Company</h3>
			<ul>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Work with Us</a></li>
				<li><a href="#">Advertise with Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>	
		</div>
		<div class="col-lg-3 none col-sm-3 col-xs-6">
			<h3>Ways to pay for treatment</h3>
			<ul>
				<li><a href="#">IVF Loan</a></li>
			</ul>	
		</div>
		<div class="col-lg-2 col-sm-3 col-xs-6">
			<h3>resources</h3>
			<ul>
				<li><a href="#">Articles</a></li>
				<li><a href="#">Blogs</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-sm-3 col-xs-6">
			<h3>need help?</h3>
			<ul>
				<li><a href="#">Phone Support: 1-555-555-5555</a></li>
				<li><a href="#">International Toll-Free: 00 800-555-5555</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">FAQ</a></li>
			</ul>
			<ul class="social">
				<li><a href="#"><img src="<?php echo asset_url();?>/images/icon_facebook.png" alt="" /></a></li>
				<li><a href="#"><img src="<?php echo asset_url();?>/images/icon_twitter.png" alt="" /></a></li>
				<li><a href="#"><img src="<?php echo asset_url();?>/images/icon_linkedin.png" alt="" /></a></li>
			</ul>
		</div>
	</div>
</section>
<script src="<?php echo asset_url();?>js/jquery.bxslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('.bxslider-two').bxSlider({
		slideWidth: 400,
		minSlides: 3,
		maxSlides: 3,
		moveSlides: 1,
		slideMargin: 5,
		pager:false
    });
});
</script>
<script type='text/javascript' src="<?php echo asset_url();?>js/bootstrap-slider.js"></script>
<script>
// With JQuery
$('#ex1').slider({
	formatter: function(value) {
		return value + ' Months';
	}
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type='text/javascript' src="<?php echo asset_url();?>js/app.js"></script>
<script type='text/javascript' src="<?php echo asset_url();?>js/mainController.js"></script>
</body>
</html>