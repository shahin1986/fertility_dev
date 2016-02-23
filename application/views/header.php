<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>Onboard Network - Advertise with Music Influencers</title>
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/bootstrap.css" />
<link href="<?php echo asset_url();?>css/bootstrap-slider.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/style.css" type="text/css" rel="stylesheet" />
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.8.3.js'></script>
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/jquery.bxslider.css" />
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script>
        $(document).ready(function (){
            $("#frm_login").submit(function (e){
                e.preventDefault();
                var url = $(this).attr('action');
                var method = $(this).attr('method');
                var data = $(this).serialize();
                console.log(data);
                console.log(method);
                console.log(url);
                $.ajax({
                   url:url,
                   type:method,
                   data:data
                }).done(function(data){
                	console.log(data);
                   if(data == false){
                	   $("#error_section").html("Incorrect username/password");
                       } else {
                    	   window.location.href='<?php echo base_url() ?>Main/members';
                           }
                });
            });

            $("#testt").on("click",function(){
				var url = "http://maps.googleapis.com/maps/api/geocode/json?address=95123&sensor=true";
				$.ajax({
					url: url,
					method: 'GET',
					dataType: 'json',
					success: function(result){
						console.log(result);
						}		
					})

                });
            $("#find_doctor").on("click",function(){
				$("#modal_title").html("Please enter zipcode");
				$("#modal_body").html('<div class="form-group"><div class="col-xs-3"></br><input type="zipCode" class="form-control" name="zipCode" id="zipCode" placeholder="Enter your zip code"></div></div><a href="<?php echo base_url() ?>Doctors"><button type="button" name="submit" class="btn btn-default">Submit</button></a>');
            });

            $("#find_clinic").on("click",function(){
				$("#modal_title").html("Please enter zipcode");
				$("#modal_body").html('<div class="form-group"><div class="col-xs-3"></br><input type="zipCode" class="form-control" name="zipCode" id="zipCode" placeholder="Enter your zip code"></div></div><a href="<?php echo base_url() ?>Clinics"><button type="button" name="submit" class="btn btn-default">Submit</button></a>');
            });

//             $("#sign_in").on("click", function(){
// 				$(".modal-title").html("Please sign in to your account.");
//				$(".modal-body").html(' <div class="container"> <form method="post" id="frm_login" class="form-inline" role="form" accept-charset="utf-8" action="<?php echo base_url()?>Main/login_validation"> <div class="form-group"> <label for="email">Email:</label> <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php $this->input->post('email')?>"> </div> <div class="form-group"> <label for="pwd">Password:</label> <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"> </div> <button type="submit" name="login_submit" class="btn btn-default">Submit</button> <a href="<?php echo base_url()?>main/signup"> Sign up!</a> <div class="form_validation_error" id="error_section"><?php echo validation_errors();?></div> </form> </div>');
//             });
           
        });
</script>
</head>
<body ng-app="fertility">
<section id="header" class="inner">
	<div class="container">
		<nav class="navbar navbar-default navbar-static-top responsive col-lg-12" role="navigation">
			<div class="navbar-header responsive">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <div id="logo" class="navbar-brand">
				<a href="<?php echo base_url() ?>">FERTILITY COUNSELORS</a>
			  </div>
			</div>
			<div id="navbar" class="navbar-collapse text-right collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url() ?>">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a id="testt">CONTACT</a></li>
					<li><a data-toggle="modal" data-target="#myModal2" id="find_clinic">CLINICS</a></li>
					<li><a data-toggle="modal" data-target="#myModal2" id="find_doctor">DOCTORS</a></li>
					<li><a data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
				 </ul>
			</div><!--/.nav-collapse -->
		</nav> 
	</div>       
</section>
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
		<div class="modal-content">
		      <div class="modal-header" style="background-color: #335764;color: white;">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Please sign in to your account.</h4>
		      </div>
		      <div class="modal-body">
		        
		      <div class="container">
				  <form method="post" id="frm_login" class="form-inline" role="form" accept-charset="utf-8" action="<?php echo base_url()?>Main/login_validation">
				    <div class="form-group">
				      <label for="email">Email:</label>
				      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php $this->input->post('email')?>">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
				    </div>
				    <button type="submit" name="login_submit" class="btn btn-default">Submit</button>
				    <a href="<?php echo base_url()?>main/signup"> Sign up!</a>
				    <div class="form_validation_error" id="error_section"><?php echo validation_errors();?></div>
				  </form>
			  </div>	
        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
   	 </div>

  </div>
</div>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
		<div class="modal-content">
		      <div class="modal-header" style="background-color: #335764;color: white;">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title" id="modal_title"></h4>
		      </div>
		      <div class="modal-body" id="modal_body">
		        	      
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
   	 </div>

  </div>
</div>