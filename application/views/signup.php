<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>

	<h2>Sign up</h2>

<div class="container">
  <form method="post" role="form" accept-charset="utf-8" action="<?php echo base_url()?>Main/signup_validation">
    <div class="form-group"  class="form-inline">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php $this->input->post('email')?>">
    </div>
    <div class="form-group"  class="form-inline">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
    </div>
    <div class="form-group"  class="form-inline">
      <label for="cpassword">Password:</label>
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