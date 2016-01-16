<?php
$this->load->view('admin_header');
?>
    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
						<?php 
						echo form_open('main/admin_login_validation');
						
						echo "<p> Email: ";
						// The second argument- So user don't have to type the email again
						echo form_input('email', $this->input->post('email'));
						echo "</p>";
						echo "<p>Password: ";
						echo form_password('password');
						echo "</p>";
						echo "<p>";
						echo form_submit('login_submit', 'Login');
						echo "</p>";
						echo form_close();
						
						?>
	                <div class="form_validation_error" id="error_section"><?php echo validation_errors();?></div>

                </div>
            </div>
        </div>
    </section>

    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>
	<?php
	$this->load->view('admin_footer');
	?>
