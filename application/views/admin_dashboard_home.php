<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$this->load->view('admin_header');
?>
    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
					<h3>Welcome to the admin page</h3>
                </div>
            </div>
        </div>
    </section>

    <div id="container">
	<h1>Members Page</h1>
	<?php
	
	echo "<pre>";
	print_r($this->session->all_userdata());
	echo"</pre>";
	
	?>
	
	<a href='<?php echo base_url()?>main/admin_logout'>Logout</a>
	
	</div>

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>
	<?php
	$this->load->view('admin_footer');
	?>
