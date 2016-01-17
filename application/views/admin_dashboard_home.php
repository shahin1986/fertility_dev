<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<?php

$this->load->view ( 'admin_header' );
?>
<?php

foreach ( $css_files as $file ) :
	?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body {
	font-family: Arial;
	font-size: 14px;
}

a {
	color: blue;
	text-decoration: none;
	font-size: 14px;
}

a:hover {
	text-decoration: underline;
}
</style>
<section class="page container">
	<div class="row">
		<div class="span16">
			<div class="box">
						<?php
						
						echo $output;
						
						?>
                </div>
		</div>
	</div>
</section>


</div>
</div>

<div id="spinner" class="spinner" style="display: none;">
	Loading&hellip;</div>
<?php
$this->load->view ( 'admin_footer' );
?>
