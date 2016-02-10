<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

$this->load->view ( 'admin_header' );
?>
<section class="page container">
        <div class="row">
            <div class="span8">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-bookmark"></i>
                        <h5>Dashboard Home Page</h5>
                    </div>
                    <div class="box-content">
                        <div class="btn-group-box">                          
                            <button class="btn"><i class="icon-user icon-large"></i><br/>Account</button>
                            <button class="btn"><i class="icon-search icon-large"></i><br/>Search</button>
                            <button class="btn"><i class="icon-plus icon-large"></i><br/>Add</button>
                            <button class="btn"><i class="icon-minus icon-large"></i><br/>Delete</button>
                            <button class="btn"><i class="icon-print icon-large"></i><br/>Print</button>
                            <button class="btn"><i class="icon-list-alt icon-large"></i><br/>Reports</button>
                            <button class="btn"><i class="icon-bar-chart icon-large"></i><br/>Charts</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span8">
                <div class="blockoff-left">
                    <legend class="lead">
                        Welcome
                    </legend>
                    <p>
                        Welcome to fertility counselors admin dashboard. By selecting the top menu, you are able to
                        search,view, add, update, delete, print, export, etc from the database.
                    </p>
                </div>
            </div>
        </div>
</section>

<?php
$this->load->view ( 'admin_footer' );
?>
