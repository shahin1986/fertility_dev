<?php
$this->load->view('admin_header');
?>
    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-book"></i>
                        <h5>Login</h5>
                    </div>
                    <div class="box-content">
                        <form class="form-inline">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-envelope"></i></span>
                                <input class="span4" type="text" placeholder="Email address">
                            </div>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-key"></i></span>
                                <input class="span4" type="password" placeholder="Password">
                            </div>
                        </form>
                        
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon-ok"></i>
                            Submit
                        </button>
                    </div>
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
