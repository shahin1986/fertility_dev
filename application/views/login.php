<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>


				
<section id="banner">
	<div class="container">
		<div class="col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0 text-center columns" ng-controller="homeSearchBasedZipCode">
			<div class="find-top">
				<h2>Find</h2>
				<h1>top 10</h1>
				<h2>fertility clinics in your area</h2>
				<p>(Based on successful pregnancy and birth rates)</p>
				<div class="col-lg-10"><input type="search" id="zipCodeSearch" placeholder="Enter Zip Code"></div>
				<div class="col-lg-2 text-left none"><input type="submit" value="search" ng-click="search()"></div>
			</div>
		</div>
	</div>
</section>
<section id="about">
	<div class="container">
		<div class="col-lg-12 col-xs-12  text-center">
			<p>We are a networks of the highest rated fertility doctors and clinics across the U.S. Our members
			are fertility specialists with years of success helping woman (and men) with fertility problems. </p>
		</div>
	</div>
</section>
<section id="info">
	<div class="container">
		<div class="col-lg-12 col-xs-12 responsive text-center">
			<div class="panel responsive">
				<h3>ARE YOU HAVING PROBLEMS GETTING PREGNANT?</h3>
				<h5 class="top">Submit your questions to a fertility doctor. It’s easy, it’s confidential.</h5>
				<div class="col-lg-7 text-left col-sm-6 responsive">
					<p>How many months have you been trying to get pregnant?</p>
					<div class="col-lg-12 none range">
						<input id="ex1" data-slider-id='ex1Slider' type="text" placeholder="1 Months" data-slider-min="0" data-slider-max="36" data-slider-step="1" data-slider-value="18"/>
						<div class="col-lg-3 pull-left none col-xs-6">
							<h4>1 month</h4>
						</div>
						<div class="col-lg-3 col-xs-6 pull-right text-right none">
							<h4>36 month</h4>
						</div>
					</div>
					<div class="col-lg--12 select-box">
						<label>What is your age?</label>
						<select>
							<option>Select</option>
							<option></option>
							<option></option>
						</select>
					</div>
					<div class="col-lg--12 select-box">
						<label>Are you worried about any health condition
						that could make conceiving difficult?</label>
						<select>
							<option>Select</option>
							<option></option>
							<option></option>
						</select>
					</div>
				</div>
				<div class="col-lg-5 text-left col-sm-6">
					<label>Type your question for a fertility doctor here</label>
					<textarea></textarea>
					<input type="submit" value="FIND OUT">
				</div>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="col-lg-4 col-sm-4">
			<a href="#">egg (oocyte) freezing</a>
			<img class="margin-bottom" src="<?php echo asset_url();?>images/img-1.png" alt=""/>
		</div>
		<div class="col-lg-4 col-sm-4">
			<a href="#">in vitro fertilization (IVF)</a>
			<img class="margin-bottom" src="<?php echo asset_url();?>images/img-2.png" alt=""/>
		</div>
		<div class="col-lg-4 text-center col-sm-4">
			<h6>Find</h6>
			<h2>TOP 10</h2>
			<h6>fertility clinics in your area</h6>
			<input type="text" value="Enter Zip Code">
			<input type="submit" value="search">
		</div>
	</div>
	<div class="container">
		<div class="col-lg-4 col-sm-4">
			<a href="#">genetic diagnosis</a>
			<img src="<?php echo asset_url();?>images/img-3.png" alt=""/>
		</div>
		<div class="col-lg-4 col-sm-4">
			<a href="#">ovulation induction</a>
			<img src="<?php echo asset_url();?>images/img-4.png" alt=""/>
		</div>
		<div class="col-lg-4 text-center col-sm-4">
			<div class="counselor">
				<h5>Speak to a fertility counselor </h5>
				<div class="col-lg-12 text-center"><a class="phon">1-800-555-5555</a></div>
				<div class="images">
					<img src="<?php echo asset_url();?>images/girl.png" alt=""/>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="condition">
			<div class="col-lg-4">
				<h4>conditions</h4>
				<ul>
					<li><a href="#">Unexplained Infertility</a></li>
					<li><a href="#">Diminished Ovarian Reserve</a></li>
					<li><a href="#">Tubal Disease</a></li>
					<li><a href="#">Endometriosis</a></li>
					<li><a href="#">Implantation Problems</a></li>
					<li><a href="#">Male Infertility</a></li>
				</ul>
			</div>
			<div class="col-lg-4 none">
				<h4>treatments</h4>
				<ul>
					<li><a href="#">In Vitro Fertilization (VIF)</a></li>
					<li><a href="#">IVF/Egg Sharing Treatment</a></li>
					<li><a href="#">Natural Cycle IVF</a></li>
					<li><a href="#">Egg (Oocyte) Freezing</a></li>
					<li><a href="#">Oocyte (Egg) Donation (Fresh Cycle)</a></li>
					<li><a href="#">Surrogacy & Oocyte Donation</a></li>
				</ul>
			</div>
			<div class="col-lg-4 last">
				<ul>
					<li><a href="#">Ovulation Induction</a></li>
					<li><a href="#">Genetic Diagnosis (PGD or PGS)</a></li>
					<li><a href="#">Gestational Surrogacy</a></li>
					<li><a href="#">Sperm Aspiration</a></li>
					<li><a href="#">Single and LGBT Treatments</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<?php
$this->load->view('footer');
?>