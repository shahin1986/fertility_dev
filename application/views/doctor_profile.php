<?php
$this->load->view('header2');
?>

<section id="about" class="clinic">
	<div class="container">
		
		<div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 30px;">
			<div class="col-lg-3 padding-left">
				<img src="<?php if(strlen($photo_url) > 0){echo $photo_url;} else {echo 'http://fertilitycounselors.org/dev/assets/uploads/files/doctors/doc.png';}?>" alt="" />
			</div>
			<div class="col-lg-9 padding-left">
				<h3 class="skyblue"><?php echo $full_name; ?></h3></br>
				<h4>PHYSICIAN AT <?php echo $clinic;?></h4><P><?php echo $address;?><br/><?php echo $city;?>, <?php echo $state;?> <?php echo $zipcode;?><br/><?php echo $phone;?></P></br>
				<p><?php echo $bio?></p>
			</div>
		</div>
	

		

	</div>

</section>



<?php

$this->load->view('footer');
?>	
	