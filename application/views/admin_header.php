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
                    <a href="#" class="brand">FERTILITY COUNSELORS ADMIN DASHBOARD</a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        <ul class="nav pull-right">
                            <li>
                                <a href='<?php echo base_url()?>Admin/admin_logout'>Logout</a>
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
                                    <a href='<?php echo base_url()?>Admin/dashboard'>
                                        <i class="icon-home icon-large"></i>Home
                                    </a>
                                </li>
                                <li>
                                    <a href='<?php echo base_url()?>Admin/doctors'>
                                        <i class="icon-user icon-large"></i> Doctors
                                    </a>
                                </li>
                                <li>
                                    <a href='<?php echo base_url()?>Admin/review_doctor'>
                                        <i class="icon-star icon-large"></i> Doctors reviews
                                    </a>
                                </li>
                                <li>
                                    <a href='<?php echo base_url()?>Admin/clinics'>
                                        <i class="icon-file icon-large"></i> Clinics
                                    </a>
                                </li>
                                <li>
                                    <a href='<?php echo base_url()?>Admin/registered_patients'>
                                        <i class="icon-user icon-large"></i> Registered Patients
                                    </a>
                                </li>
                                <li>
                                    <a href='<?php echo base_url()?>Admin/temp_patients'>
                                        <i class="icon-user icon-large"></i> Temporary Patients
                                    </a>
                                </li>
<!--                                 <li> -->
<!--                                     <a href="#"> -->
<!--                                         <i class="icon-tasks icon-large"></i> Widgets -->
<!--                                     </a> -->
<!--                                 </li> -->
<!--                                 <li> -->
<!--                                     <a href="#"> -->
<!--                                         <i class="icon-cogs icon-large"></i> Settings -->
<!--                                     </a> -->
<!--                                 </li> -->
<!--                                 <li> -->
<!--                                     <a href="#"> -->
<!--                                         <i class="icon-calendar icon-large"></i> Schedule -->
<!--                                     </a> -->
<!--                                 </li> -->
<!--                                 <li> -->
<!--                                     <a href="#"> -->
<!--                                         <i class="icon-list-alt icon-large"></i> Forms -->
<!--                                     </a> -->
<!--                                 </li> -->
                                <li>
                                    <a data-toggle="modal" data-target="#myModal">
                                        <i class="icon-bar-chart icon-large"></i>Data visualization
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
		<div class="modal-content">
		      <div class="modal-header" style="background-color: #335764;color: white;">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Data visualization coming soon!</h4>
		      </div>
		      <div class="modal-body">
		        
		        <div>
				<p>Data visualization refers to the techniques used to communicate data 
				or information by encoding it as visual objects (e.g., points, lines or bars) contained in graphics.
				The goal is to communicate information clearly and efficiently to users. 
				It is one of the steps in data analysis or data science.</p>
				</div>	
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>