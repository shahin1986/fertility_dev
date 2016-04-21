<?php
$this->load->view('header');
?>

<section id="about" class="clinic" ng-controller="displayDoctors">
	<div class="container">
		
		<div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 30px;"  ng-repeat="doctor in data">
			<div class="col-lg-3 padding-left">
				<img ng-src="{{doctor.photo_url.length >65 ? doctor.photo_url :'http://fertilitycounselors.org/dev/assets/uploads/files/doctors/doc.png'}}" alt="" />
			</div>
			<div class="col-lg-9 padding-left">
				<h3 class="skyblue">{{doctor.full_name}}</h3></br>
				<h4>PHYSICIAN AT {{doctor.clinic}}</h4><P>{{doctor.address}}<br/>{{doctor.city}}, {{doctor.state}} {{doctor.zipcode}}<br/>{{doctor.phone}}</P></br>
				<p>{{doctor.bio | limitTo: 550}} ...<strong><a ng-href="<?php echo base_url()?>Doctors/id/{{doctor.id}}">Read More</a></strong></p>
			</div>
		</div>
	

		

	</div>

</section>



<?php

$this->load->view('footer');
?>	
	
