<?php
$this->load->view('header');
?>

<section id="about" class="clinic" ng-controller="displayClinics">
	<div class="container">
		<div ng-repeat="clinic in data">		
			<div class="col-lg-9 col-md-9 col-sm-9" >
				<div class="col-lg-7 padding-left">
					<h3>{{clinic.name}} clinic<img src="<?php echo asset_url();?>images/star_fill.png" alt="" /><img src="<?php echo asset_url();?>images/star_fill.png" alt="" /><img src="<?php echo asset_url();?>images/star_fill.png" alt="" /><img src="<?php echo asset_url();?>images/star_fill.png" alt="" /><img src="<?php echo asset_url();?>images/star_blank.png" alt="" /></h3>
					<h4>{{clinic.doctor_name}}</br>{{clinic.doctor_address}}<br/>{{clinic.doctor_city}}, {{clinic.doctor_state}} {{clinic.doctor_zipcode}}<br/>{{clinic.doctor_phone}}</h4>
					<a class="btn" href="#">Free consultation</a>
				</div>
				<div class="col-lg-5">
					<p class="birth">BIRTH SUCCESS RATE (BY AGE GROUP)</p>
					<div class="table-responsive text-center">
						<table class="table">
							<tr>
								<td>Less than 35</td>
								<td>35-37</td>
								<td>38-40</td>
								<td>21-42</td>
							</tr>
							<tr>
								<td>{{clinic.non_donor_fresh_less35}}%</td>
								<td>{{clinic.non_donor_fresh_35to37}}%</td>
								<td>{{clinic.non_donor_fresh_38to40}}%</td>
								<td>{{clinic.non_donor_fresh_41to42}}%</td>
							</tr>
						</table>
					</div>
				</div>
				<p>{{clinic.description | limitTo: 300}} ...<strong>Read More</strong></p>
				<h3 class="title">Services offered:</h3>
				<div class="col-sm-4 links padding-left">
					<a href="#">Lorem Ipsum</a>
					<a href="#">Sed ut perspiciatis</a>
				</div>
				<div class="col-sm-4 links padding-left">
					<a href="#">Lorem Ipsum</a>
					<a href="#">Sed ut perspiciatis</a>
				</div>
				<div class="col-sm-4 links padding-left">
					<a href="#">Lorem Ipsum</a>
					<a href="#">Sed ut perspiciatis</a>
				</div>
				<hr/>
			</div>
			<div class="col-lg-3 col-md-3 text-center col-sm-3">
				<div class="graphic large">
					<p>ad graphic<br/>here</p>
				</div>
				<div class="graphic small bottom">
					<p>ad graphic<br/>here</p>
				</div>
			</div>
		</div>
		
		<div class="col-lg-9 col-md-9 col-sm-9">
			<div class="col-lg-7 padding-left">
				
			</div>
			<div class="col-lg-5">
			</div>
		</div>
		<div class="col-lg-3 col-md-3 text-center col-sm-3">
			<div class="panel">
				<img class="first" src="<?php echo asset_url();?>images/img_caller_large.png" alt="">
				<h4>Speak to a fertility<br>counselor </h4>
				<h5><img src="<?php echo asset_url();?>images/icon_call.png" alt=""> 1-800-555-5555</h5>
			</div>
		</div>
		
		
		
	</div>
</section>



<?php

$this->load->view('footer');
?>	
	