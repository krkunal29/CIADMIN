<!DOCTYPE html>
<html>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
        <title>Employees - HRMS admin template</title>
		    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/select2.min.css">
		    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <script type="text/javascript">
            var baseURL = "<?php echo base_url(); ?>";
        </script>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="<?php echo base_url(); ?>assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>Focus Technologies</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<!-- <ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="m-0"><span class="notification-time">4 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">G</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="m-0"><span class="notification-time">12 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="m-0"><span class="notification-time">2 days ago</span></p>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="dropdown hidden-xs">
						<a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">8</span></a>
					</li>
					<li class="dropdown">
						<a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>Admin</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.html">My Profile</a></li>
							<li><a href="edit-profile.html">Edit Profile</a></li>
							<li><a href="settings.html">Settings</a></li>
							<li><a href="login.html">Logout</a></li>
						</ul>
					</li>
				</ul> -->
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="<?php echo base_url(); ?>profile">My Profile</a></li>
						<li><a href="<?php echo base_url(); ?>edit-profile">Edit Profile</a></li>
						<li><a href="<?php echo base_url(); ?>settings">Settings</a></li>
						<li><a href="<?php echo base_url(); ?>login">Logout</a></li>
					</ul>
				</div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>index">Dashboard</a>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><span> Employees</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a class="active" href="<?php echo base_url(); ?>employees">All Employees</a></li>
									<li><a href="<?php echo base_url(); ?>holidays">Holidays</a></li>
									<li><a href="<?php echo base_url(); ?>leaves"><span>Leave Requests</span> <span class="badge bg-primary pull-right">1</span></a></li>
									<li><a href="<?php echo base_url(); ?>attendance">Attendance</a></li>
									<li><a href="<?php echo base_url(); ?>departments">Departments</a></li>
									<li><a href="<?php echo base_url(); ?>designations">Designations</a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>clients">Clients</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>projects">Projects</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>tasks">Tasks</a>
							</li>
							<!-- <li class="submenu">
								<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="voice-call.html">Voice Call</a></li>
									<li><a href="video-call.html">Video Call</a></li>
									<li><a href="incoming-call.html">Incoming Call</a></li>
								</ul>
							</li> -->
							<li>
								<a href="<?php echo base_url(); ?>contacts">Contacts</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>leads">Leads</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="<?php echo base_url(); ?>estimates">Estimates</a></li>
									<li><a href="<?php echo base_url(); ?>invoices">Invoices</a></li>
									<li><a href="<?php echo base_url(); ?>payments">Payments</a></li>
									<li><a href="<?php echo base_url(); ?>expenses">Expenses</a></li>
									<li><a href="<?php echo base_url(); ?>provident-fund">Provident Fund</a></li>
									<li><a href="<?php echo base_url(); ?>taxes">Taxes</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="<?php echo base_url(); ?>salary"> Employee Salary </a></li>
									<li><a href="<?php echo base_url(); ?>salary-view"> Payslip </a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>worksheet">Timing Sheet</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>tickets">Tickets</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>events">Events</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>inbox">Email</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>chat">Chat <span class="badge bg-primary pull-right">5</span></a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>assets">Assets</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>activities">Activities</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>users">Users</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Reports </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="<?php echo base_url(); ?>expense-reports"> Expense Report </a></li>
									<li><a href="<?php echo base_url(); ?>invoice-reports"> Invoice Report </a></li>
								</ul>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>settings">Settings</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Pages </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="<?php echo base_url(); ?>login"> Login </a></li>
									<li><a href="<?php echo base_url(); ?>register"> Register </a></li>
									<li><a href="<?php echo base_url(); ?>forgot-password"> Forgot Password </a></li>
									<li><a href="<?php echo base_url(); ?>profile"> Profile </a></li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
