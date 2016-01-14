<section id="footer" class="bg">
	<div class="container">
		<div class="col-lg-2 col-sm-2">
			<h3>what we do</h3>
			<a href="#">Find a Clinic</a>
			<a href="#">Find a Doctor</a>
			<a href="#">Ask a Doctor</a>
		</div>
		<div class="col-lg-2 col-sm-2">
			<h3>Company</h3>
			<a href="#">About Us</a>
			<a href="#">Work with Us</a>
			<a href="#">Advertise with Us</a>
			<a href="#">Contact Us</a>
		</div>
		<div class="col-lg-3 col-sm-3">
			<h3>Ways to pay for treatment</h3>
			<a href="#">IVF Loan</a>
		</div>
		<div class="col-lg-2 col-sm-2">
			<h3>resources</h3>
			<a href="#">Articles</a>
			<a href="#">Blogs</a>
		</div>
		<div class="col-lg-2 col-sm-2">
			<h3>need help?</h3>
			<p>Phone Support: 1-555-555-5555</p>
			<p>International Toll-Free: 00 800-555-5555</p>
			<p>Contact Us</p>
			<p>FAQ</p>
			<ul>
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
</body>
</html>