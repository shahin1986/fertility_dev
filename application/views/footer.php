<section id="footer">
	<div class="container">
		<div class="col-lg-12">
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
		slideWidth: 250,
		minSlides: 6,
		maxSlides: 6,
		moveSlides: 1,
		slideMargin: 5,
		pager:false
    });
});
</script>
</body>
</html>