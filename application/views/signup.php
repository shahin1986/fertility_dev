<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>

<div class="container">
<h3>Sign up</h3><p></br></p>
  <form method="post" role="form" accept-charset="utf-8" action="<?php echo base_url()?>Main/signup_validation">
    <div class="form-group"  class="form-inline">
      <label for="name">Full Name:</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" value="<?php $this->input->post('name')?>">
    </div>
    <div class="form-group"  class="form-inline">
      <label for="name">Birth year:</label>
      <input type="number" class="form-control" name="birthYear" id="birthYear" placeholder="Enter your birth year" value="<?php $this->input->post('birthYear')?>">
    </div>
    <div class="form-group"  class="form-inline">
      <label for="attempt">How many months have you been trying to get pregnant?</label>
      <input type="number" class="form-control" name="monthAttempt" id="monthAttempt" placeholder="Enter number only" value="<?php $this->input->post('monthAttempt')?>">
    </div>
    <div class="form-group"  class="form-inline">
      <label for="condition">Are you worried about any health condition that could make conceiving difficult?</label>
      <select name="healthCondition" id="healthCondition" >
		<option value="yes">Yes</option>
		<option value="no">No</option>
		<option value="notSure">Not sure</option>
	  </select>
    </div>
    <div class="form-group"  class="form-inline">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php $this->input->post('email')?>">
    </div>
    <div class="form-group"  class="form-inline">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
    <div class="form-group"  class="form-inline">
      <label for="cpassword"> Confirm password:</label>
      <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm password">
    </div>
    <button type="submit" name="signup_submit" class="btn btn-default">Sign up</button>
    <a href="<?php echo base_url()?>main/signup">Sign up!</a>
    <div class="form_validation_error"><?php echo validation_errors();?></div>
  </form>
</div>

<?php

$this->load->view('footer');
?>	