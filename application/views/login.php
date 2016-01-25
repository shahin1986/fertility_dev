<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>



<section id="banner" class="inner">
	<div class="container">
		<div class="large-12 text-center columns" ng-controller="searchBasedZipCode">
			<ul >
				<li>
					<div class="col-lg-10 col-lg-offset-1">
						<h3>OVER 10,000 FERTILITY DOCTORS & CLINICS</h3>
						<p>find the top 10 fertility clinics in your area</p>
						<h5>(based on successful pregnancy and birth rates)</h5>
					</div>
					<div class="container">
						<div class="col-lg-6 top col-sm-10 col-xs-12 col-lg-offset-3 col-sm-offset-1">
							<form>
								<div class="col-lg-8 responsive col-sm-8">
									<input type="text" placeholder="Enter Zip Code"/>
								</div>
								<div class="col-lg-3 responsive col-sm-3 none text-left columns">
									<input type="submit" value="search"/ ng-click="search()">
								</div>
							</form>						
						</div>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
	<div class="down left">
		<div class="container">
			<div class="large-12 text-center columns">
				<ul class="bxslider-two">
					<li>Stanford Fertility & Reproductive Center</li>
					<li class="second">John Hopkins Fertility Center</li>
					<li class="last">Reproductive Science Center</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="about" class="inner">
	<div class="container">
		<div class="col-lg-10 col-xs-12 col-lg-offset-1 text-center">
			<p>We are a networks of the highest rated fertility doctors and clinics across the U.S. Our members are fertility specialists with years of success helping woman get pregnant.</p>
			<h3>How many months have you been trying to get pregnant?</h3>
		</div>
	</div>
</section>
<section id="form">
	<div class="container">
		<div class="col-lg-12 range">
			<input id="ex1" data-slider-id='ex1Slider' type="text" placeholder="1 Months" data-slider-min="0" data-slider-max="36" data-slider-step="1" data-slider-value="18"/>
			<div class="col-lg-3 pull-left none col-xs-6">
				<h4>1 month</h4>
			</div>
			<div class="col-lg-3 col-xs-6 pull-right text-right none">
				<h4>36 month</h4>
			</div>
		</div>
		<form>
			<div class="col-lg-4 col-xs-12 col-sm-5">
				<label>What is your age?</label>
				<select>
					<option>Select</option>
					<option>Select</option>
					<option>Select</option>
				</select>
				<label>Are you worried about any health condition that could make conceiving difficult?</label>
				<select>
					<option>Select</option>
					<option>Select</option>
					<option>Select</option>
				</select>
			</div>
			<div class="col-lg-5 col-xs-12 col-sm-4">
				<label>Type your question for a fertility doctor here</label>
				<textarea></textarea>
			</div>
			<div class="col-lg-3 col-xs-12 col-sm-3">
				<input type="submit" value="Submit" />
			</div>
		</form>
	</div>
</section>
<section id="testimonials">
	<div class="container">
		<div class="col-lg-9 nopadding">
			<div class="col-lg-6 col-sm-6">
				<a href="#">egg (oocyte) freezing <img src="<?php echo asset_url();?>/images/blue_arrow.png" alt="" /></a>
				<img src="<?php echo asset_url();?>/images/testi_first.png" alt=""/>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="position">
					<a href="#">in vitro fertilization (IVF) <img src="<?php echo asset_url();?>/images/blue_arrow.png" alt="" /></a>
					<img src="<?php echo asset_url();?>/images/testi_second.png" alt=""/>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="position">
					<a href="#">oocyte (egg) Donation <img src="<?php echo asset_url();?>/images/blue_arrow.png" alt="" /></a>
					<img src="<?php echo asset_url();?>/images/testi_third.png" alt=""/>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="position">
					<a href="#">intrauterine insemination (iui) <img src="<?php echo asset_url();?>/images/blue_arrow.png" alt="" /></a>
					<img src="<?php echo asset_url();?>/images/testi_fourth.png" alt=""/>
				</div>
			</div>
		</div>
		<div class="col-lg-3 text-center col-sm-12 nopadding">
			<div class="col-lg-12 col-sm-6 nopadding">
			<h3>find the top 10 fertility
clinics in your area</h3>
			<p>(Based on successful pregnancy<br />and birth rates)</p>
			<form>
				<input type="text" placeholder="Enter Zip Code" />
				<input type="submit" value="search" />
			</form>
			</div>
			<div class="col-lg-12 col-sm-6 nopadding">
				<div class="panel">
					<img class="first" src="<?php echo asset_url();?>/images/img_caller.png" alt="" />
					<h4>Speak to a fertility<br/>counselor </h5>
					<h5><img src="<?php echo asset_url();?>/images/icon_call.png" alt="" /> 1-800-555-5555</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="condition">
	<div class="container">
		<div class="col-lg-4 col-sm-4 col-md-4">
			<h3>conditions</h3>
			<a href="#">Unexplained Infertility</a>
			<a href="#">Diminished Ovarian Reserve</a>
			<a href="#">Tubal Disease</a>
			<a href="#">Endometriosis</a>
			<a href="#">Implantation Problems</a>
			<a href="#">Male Infertility</a>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4">
			<h3>treatments</h3>
			<a href="#">In Vitro Fertilization (VIF)</a>
			<a href="#">IVF/Egg Sharing Treatment</a>
			<a href="#">Natural Cycle IVF</a>
			<a href="#">Egg (Oocyte) Freezing</a>
			<a href="#">Oocyte (Egg) Donation (Fresh Cycle)</a>
			<a href="#">Surrogacy & Oocyte Donation</a>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4">
			<h3>&nbsp;</h3>
			<a href="#">Ovulation Induction</a>
			<a href="#">Genetic Diagnosis (PGD or PGS)</a>
			<a href="#">Gestational Surrogacy</a>
			<a href="#">Sperm Aspiration</a>
			<a href="#">Single and LGBT Treatments</a>
		</div>
	</div>
</section>



<?php
$this->load->view('footer');
?>