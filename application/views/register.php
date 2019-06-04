<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
       <title>Register - HRMS admin template</title>
		    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    </head>
    <body>
        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title">Management Login</h3>
					<div class="account-box">
						<div class="account-wrapper">
							<div class="account-logo">
								<a href="index.html"><img src="<?php echo base_url()?>assets/img/logo2.png" alt="Focus Technologies"></a>
							</div>
							<form role="form" id="addUser" action="<?php echo base_url()."user/RegisterUser"?>" method="post" role="form">
              <div class="row">
                  <label class="control-label"><?php echo form_error('fname'); ?></label>
              </div>
              <div class="row">
								<div class="form-group form-focus">
									<label class="control-label">Name </label>
									<input class="form-control floating" type="text" name="fname" value="<?= set_value('fname') ?>" maxlength="128" />
								</div>
              </div>
                <div class="row">
                    <label class="control-label"><?php echo form_error('email'); ?></label>
                    <label class="control-label">
                      <?php
                        if(isset($errorMsg))
                        {
                          echo '';
                          echo $errorMsg;
                          echo '';
                          unset($errorMsg);
                        }
                      ?>
                    </label>
                </div>
                <div class="row">
								<div class="form-group form-focus">
									<label class="control-label">Email </label>
									<input class="form-control floating" type="email" name="email" value="<?= set_value('email') ?>" maxlength="128" />
								</div>
                  </div>
                <div class="row">
                    <label class="control-label"><?php echo form_error('password'); ?></label>
                  </div>
                <div class="row">
								<div class="form-group form-focus">
									<label class="control-label">Password </label>
									<input class="form-control floating" type="password" name="password"  value="<?= set_value('password') ?>" maxlength="20" />
								</div>
                  </div>
                <div class="row">
                    <label class="control-label"><?php echo form_error('cpassword'); ?></label>
                  </div>
                <div class="row">
								<div class="form-group form-focus">
									<label class="control-label">Repeat Password</label>
									<input class="form-control floating" type="password" name="cpassword" value="<?= set_value('cpassword') ?>" maxlength="20">
								</div>
                  </div>
                <div class="row">
                    <label class="control-label"><?php echo form_error('contactno'); ?></label>
                  </div>
                <div class="row">
                <div class="form-group form-focus">
                  <label class="control-label">Mobile Number</label>
                  <input class="form-control floating" type="text" name="contactno" id="contactno"  value="<?= set_value('contactno') ?>"/>
                </div>
                  </div>
                <div class="row">
								<div class="form-group text-center">
									  <button class="btn btn-primary btn-block btn-flat" type="submit"> Submit</button>
								</div>
                  </div>
								<div class="text-center">
									<a href="<?php echo base_url(); ?>">Already have an account?</a>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>

    </body>

</html>
