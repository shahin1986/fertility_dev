<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="<?php echo asset_url();?>/dashboard/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="<?php echo asset_url();?>/dashboard/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
	

</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="brand">FERTILITY COUNSELORS</a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav pull-right">
                            <li>
                               
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="body-container">
            <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icon-dashboard icon-large"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-calendar icon-large"></i> Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-map-marker icon-large"></i> Map It
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-tasks icon-large"></i> Widgets
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-cogs icon-large"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-list-alt icon-large"></i> Forms
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bar-chart icon-large"></i> Charts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                

    <section class="page container">
        <div class="row">
            <div class="span16">
                <div class="box">
						<?php 
						echo form_open('Admin/admin_login_validation');
						
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
