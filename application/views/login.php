<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>

<div class="container">
  <form method="post" class="form-inline" role="form" accept-charset="utf-8" action="<?php echo base_url()?>Main/login_validation">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php $this->input->post('email')?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
    <button type="submit" name="login_submit" class="btn btn-default">Submit</button>
    <a href="<?php echo base_url()?>main/signup">Sign up!</a>
    <div class="form_validation_error"><?php echo validation_errors();?></div>
  </form>
</div>	

<section id="banner">
	<div class="container">
		<div class="large-12 text-center columns">
			<ul class="bxslider">
				<li>
					<div class="col-lg-10 col-lg-offset-1">
						<h3>OVER 10,00 FERTILITY DOCTORS <br/>& CLINICS</h3>
						<p>Are you having problems getting pregnant?</p>
						<h4>Ask a Fertility Doctor</h4>
					</div>
					<div class="container">
						<div class="col-lg-6 col-sm-10 col-xs-12 col-lg-offset-3 col-sm-offset-1">
							<form>
								<div class="col-lg-9 responsive col-xs-9 none">
									<input type="text" placeholder="Type your question for a fertility doctor here"/>
								</div>
								<div class="col-lg-3 responsive col-xs-3 none text-left columns">
									<input type="submit" value="Submit" id="question_submit"/>
								</div>
							</form>						
						</div>
					</div>
				</li>
				<li>
					<div class="col-lg-10 col-lg-offset-1">
						<h3>OVER 10,00 FERTILITY DOCTORS <br/>& CLINICS</h3>
						<p>Are you having problems getting pregnant?</p>
						<h4>Ask a Fertility Doctor</h4>
					</div>
					<div class="container">
						<div class="col-lg-6 col-sm-10 col-xs-10 col-lg-offset-3 col-sm-offset-1 col-xs-offset-1">
							<form>
								<div class="col-lg-9 col-xs-9 none">
									<input type="text" placeholder="Type your question for a fertility doctor here"/>
								</div>
								<div class="col-lg-3 col-xs-3 none text-left columns">
									<input type="submit" value="Submit"/>
								</div>
							</form>						
						</div>
					</div>
				</li>
				<li>
					<div class="col-lg-10 col-lg-offset-1">
						<h3>OVER 10,00 FERTILITY DOCTORS <br/>& CLINICS</h3>
						<p>Are you having problems getting pregnant?</p>
						<h4>Ask a Fertility Doctor</h4>
					</div>
					<div class="container">
						<div class="col-lg-6 col-sm-10 col-xs-10 col-lg-offset-3 col-sm-offset-1 col-xs-offset-1">
							<form>
								<div class="col-lg-9 col-xs-9 none">
									<input type="text" placeholder="Type your question for a fertility doctor here"/>
								</div>
								<div class="col-lg-3 col-xs-3 none text-left columns">
									<input type="submit" value="Submit"/>
								</div>
							</form>						
						</div>
					</div>
				</li>
				<li>
					<div class="col-lg-10 col-lg-offset-1">
						<h3>OVER 10,00 FERTILITY DOCTORS <br/>& CLINICS</h3>
						<p>Are you having problems getting pregnant?</p>
						<h4>Ask a Fertility Doctor</h4>
					</div>
					<div class="container">
						<div class="col-lg-6 col-sm-10 col-xs-10 col-lg-offset-3 col-sm-offset-1 col-xs-offset-1">
							<form>
								<div class="col-lg-9 col-xs-9 none">
									<input type="text" placeholder="Type your question for a fertility doctor here"/>
								</div>
								<div class="col-lg-3 col-xs-3 none text-left columns">
									<input type="submit" value="Submit"/>
								</div>
							</form>						
						</div>
					</div>
				</li>
				<li>
					<div class="col-lg-10 col-lg-offset-1">
						<h3>OVER 10,00 FERTILITY DOCTORS <br/>& CLINICS</h3>
						<p>Are you having problems getting pregnant?</p>
						<h4>Ask a Fertility Doctor</h4>
					</div>
					<div class="container">
						<div class="col-lg-6 col-sm-10 col-xs-10 col-lg-offset-3 col-sm-offset-1 col-xs-offset-1">
							<form>
								<div class="col-lg-9 col-xs-9 none">
									<input type="text" placeholder="Type your question for a fertility doctor here"/>
								</div>
								<div class="col-lg-3 col-xs-3 none text-left columns">
									<input type="submit" value="Submit"/>
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
					<li class="first">Stanford Fertility & Reproductive Center</li>
					<li>John Hopkins Fertility Center</li>
					<li class="third">Mayo Clinic</li>
					<li>Reproductive Science Center</li>
					<li>Dartmouth Medical Center</li>
					<li>Pacific Fertility Center</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="about">
	<div class="container">
		<div class="col-lg-10 col-xs-12 col-lg-offset-1 text-center">
			<h3>ABOUT US</h3>
			<h4>We are dedicated to help you find the right answers.</h4>
			<p class="text-left">1 out of 8 women in the United States (7.0 million) have difficult getting pregnant or staying pregnant. Fertility Counselors is dedicated to helping women who are having trouble conceiving, find the right treatment, the right doctor and the right answers. We are networks of the highest rated fertility doctors and clinics across the U.S. Our members are fertility specialists with years of success helping women achieve pregnancy.</p>
			<p class="text-left">Choosing the right fertility treatment and doctor can be a difficult decision - We are here to help you find the right answers.</p>
		</div>
	</div>
</section>
<section id="info">
	<div class="container">
		<div class="col-lg-10 col-lg-offset-1 col-xs-12 responsive text-center">
			<div class="panel responsive">
				<h3>Are you having difficulty getting pregnant?</h3>
				<div class="col-lg-6 col-sm-6 responsive">
					<div class="col-lg-8 col-xs-8 responsive text-right">
						<h4>What is your age?</h4>
					</div>
					<div class="col-lg-4 responsive none-for-small col-xs-4">
						<input type="text" placeholder="....."/>
					</div>
					<div class="col-lg-8 col-xs-8 responsive text-right">
						<h4>How many months have you been trying to get pregnant?</h4>
					</div>
					<div class="col-lg-4 none-for-small responsive col-xs-4">
						<input type="text" placeholder="....."/>
					</div>
					<div class="col-lg-8 col-xs-8 responsive text-right">
						<h4>Are you worried about a health condition that could make conceiving dif ficult?</h4>
					</div>
					<div class="col-lg-4 none-for-small col-xs-4 responsive top">
						<input type="text" placeholder="....."/>
					</div>
				</div>
				<div class="col-lg-5 col-sm-6 responsive end">
					<div class="col-lg-8 col-xs-8 text-right">
						<h4>Where do you live?</h4>
					</div>
					<div class="col-lg-4 none-for-small responsive col-xs-4">
						<input type="text" placeholder="....."/>
					</div>
					<div class="col-lg-8 col-xs-8 responsive text-right">
						<h4>I’m interested in <Br/>learning about...</h4>
					</div>
					<div class="col-lg-4 none-for-small responsive col-xs-4">
						<select>Treatment
							<option>Treatment</option>
							<option>Treatment</option>
							<option>Treatment</option>
						</select>
					</div>
					<div class="col-lg-12 col-xs-12">
						<div class="col-lg-8 col-xs-8 text-right"></div>
						<div class="col-lg-4 col-xs-4 responsive-large right text-right">
							<input type="submit" value="Find Out"/>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<div class="container">
		<div class="col-lg-8">
			<div class="col-lg-6 col-sm-6">
				<div class="position">
					<img src="<?php echo asset_url();?>images/img_first.png" alt=""/>
					<a href="#">Egg (Oocyte) Freezing</a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="position">
					<img src="<?php echo asset_url();?>images/img_first.png" alt=""/>
					<a href="#">In Vitro Fertilization (IVF)</a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="position">
					<img src="<?php echo asset_url();?>images/img_first.png" alt=""/>
					<a href="#">Egg (Oocyte) Freezing</a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="position">
					<img src="<?php echo asset_url();?>images/img_first.png" alt=""/>
					<a href="#">In Vitro Fertilization (IVF)</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-sm-6">
			<div class="panel">
				<h3>Do you need help<br/> paying for treatment?</h3>
				<h4>Save <span>30-40% </span><br/>on IVF Treatment</h4>
				<p>Don’t let the cost of  fertility treatment stop you from achieving your dream of having a baby.</p>
				<h5>We can help <a class="right" href="#">Find out how</a></h5>
				<a class="arrow right" href="#"><img src="<?php echo asset_url();?>images/arrow_right_black.png" alt=""/></a>
			</div>
		</div>
	</div>	
</section>
<section id="newsletter">
	<div class="container">
		<div class="col-lg-12 text-center">
			<h3>Let’s Find the Right Feritlity Doctor for You</h3>
		</div>
		<div class="col-lg-6  col-lg-offset-3 col-xs-10 col-sm-6 small-centered gridlist text-center columns">
			<div class="col-lg-9 col-xs-9 none">
				<input type="text" placeholder="Find a specialist near you. Enter ZIP or City"/>
			</div>
			<div class="col-lg-3 col-xs-3  text-left">
				<input type="submit" value="Search"/>
			</div>
		</div>
	</div>
</section>
<section id="links">
	<div class="container">
		<div class="col-lg--12 text-center">
			<h3>Browse by Condition</h3>
		</div>
		<div class="col-lg-3 col-sm-3 col-xs-6">
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
		</div>
		<div class="col-lg-3 col-sm-3 col-xs-6">
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
		</div>
		<div class="col-lg-3 col-sm-3 col-xs-6">
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
		</div>
		<div class="col-lg-3 col-sm-3 col-xs-6">
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
			<a href="#">Conditions</a>
		</div>
	</div>
</section>
<section id="sample-ad">
	<div class="container">
		<div class="col-lg-6 col-sm-6">
			<img src="<?php echo asset_url();?>images/img_blank.png" alt=""/>
		</div>
		<div class="col-lg-6 col-sm-6">
			<h3>Sample Ad Copy</h3>
			<p class="text-left small-only-text-center">This is the begining of just some body text. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce dapibus, risus. Lorem ipsum dolor sit amet, consectetur</p>
		</div>
	</div>
</section>
<?php
$this->load->view('footer');
?>