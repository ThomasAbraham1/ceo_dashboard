<?php
include '../config.php';

// Fetch the average of efficiency
$sql_efficiency_avg = "SELECT AVG(efficiency) AS efficiency_avg FROM operating_data";
$result_efficiency_avg = $conn->query($sql_efficiency_avg);

// Fetch the average of downtime
$sql_downtime_avg = "SELECT MAX(downtime) AS downtime_avg FROM operating_data";
$result_downtime_avg = $conn->query($sql_downtime_avg);

// Initialize variables to store the averages
$efficiency_avg = 0;
$downtime_avg = 0;

// Fetch the results and store the averages
if ($result_efficiency_avg && $result_downtime_avg) {
	if ($result_efficiency_avg->num_rows > 0 && $result_downtime_avg->num_rows > 0) {
		$row_efficiency_avg = $result_efficiency_avg->fetch_assoc();
		$row_downtime_avg = $result_downtime_avg->fetch_assoc();
		$efficiency_avg = $row_efficiency_avg['efficiency_avg'];
		$downtime_avg = $row_downtime_avg['downtime_avg'];
	} else {
		echo "-";
	}
}
?>

<?php
$sql1 = "SELECT Responses FROM operating_data"; // Replace your_table_name with the actual table name
$result1 = $conn->query($sql1);

// Initialize an array to store the count of each response
$response_counts = array(
	'good' => 0,
	'average' => 0,
	'bad' => 0,
	'satisfy' => 0,
);

// Loop through the results and count the occurrences of each response
if ($result1->num_rows > 0) {
	while ($row = $result1->fetch_assoc()) {
		$response = strtolower($row['Responses']); // Convert the response to lowercase for case-insensitive comparison
		if (array_key_exists($response, $response_counts)) {
			$response_counts[$response]++;
		}
	}
}
$avg = ($response_counts['good'] + $response_counts['satisfy'] + $response_counts['bad']  + $response_counts['average']) / 4;




?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<link href="../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="../vendor/dropzone/dist/dropzone.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->


	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="javascript:void(0)" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">FELIX</h2>
					<span class="brand-sub-title">Company Dashboard</span>
				</div>
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>

						</div>
						<ul class="navbar-nav header-right">

							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="../images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">

									<a href="../signIn.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li><a href="../Operationmodule/ceo_dashboard.php" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>

					<li><a href="../Operationmodule/operational.php" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Operational</span>
						</a>

					</li>
					<li><a href="../Operationmodule/fileUpload.php" aria-expanded="false">
							<i class="fas fa-heart"></i>
							<span class="nav-text">Files Upload</span>
						</a>

					</li>

					<li><a href="../Operationmodule/emailCompose.php" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Send Email</span>
						</a>

					</li>

				</ul>


			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-warning text-warning">
										<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
											<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
											<polyline points="14 2 14 8 20 8"></polyline>
											<line x1="16" y1="13" x2="8" y2="13"></line>
											<line x1="16" y1="17" x2="8" y2="17"></line>
											<polyline points="10 9 9 9 8 9"></polyline>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Efficiency</p>
										<h4 class="mb-0"><?php echo $efficiency_avg; ?></h4>
										<span class="text">%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 ">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-success text-success">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Down Time</p>
										<h4 class="mb-0"><?php echo $downtime_avg; ?></h4>
										<span class="badge badge-success">Max Hours</span>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-xxl-4 col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Project feedback</h4>
								<div class="col-12">
									<div class="d-flex justify-content-between">
										<h6><?php

											if ($response_counts['good'] > $avg) {
												$widthPercentage = '80%';
											} else {
												$widthPercentage = '40%';
											}
											echo $response_counts['good'] . "%";
											?></h6>
										<span>GOOD</span>
									</div>
									<div class="progress">
										<div class="progress-bar bg-primary" style="width: <?php echo $widthPercentage; ?>;"></div>
									</div>
								</div>
								<div class="col-12 mt-4">
									<div class="d-flex justify-content-between">
										<h6><?php
											echo $response_counts['average'] . "%";
											?></h6>
										<span>AVERAGE</span>
									</div>
									<div class="progress"><?php
															if ($response_counts['average'] > $avg) {
																$widthPercentage = '80%';
															} else {
																$widthPercentage = '40%';
															} ?>
										<div class="progress-bar bg-primary" style="width: <?php echo $widthPercentage; ?>;"></div>
									</div>
								</div>
								<div class="col-12 mt-4">
									<div class="d-flex justify-content-between">
										<h6><?php
											echo $response_counts['satisfy'] . "%";
											?></h6>
										<span>SATSIFY</span>
									</div>
									<div class="progress"><?php
															if ($response_counts['satisfy'] > $avg) {
																$widthPercentage = '80%';
															} else {
																$widthPercentage = '40%';
															} ?>
										<div class="progress-bar bg-primary" style="width: <?php echo $widthPercentage; ?>;"></div>
									</div>
								</div>
								<div class="col-12 mt-4">
									<div class="d-flex justify-content-between">
										<h6><?php
											echo $response_counts['bad'] . "%";
											?></h6>
										<span>BAD</span>
									</div>
									<div class="progress"><?php
															if ($response_counts['bad'] > $avg) {
																$widthPercentage = '80%';
															} else {
																$widthPercentage = '40%';
															} ?>
										<div class="progress-bar bg-primary" style="width: <?php echo $widthPercentage; ?>;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-xxl-8 col-lg-12 col-sm-12">
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<h4 class="card-title">Visitor Activity</h4>
								<div class="card-action mb-sm-0 my-2">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#user" role="tab">
												Day
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#bounce" role="tab">
												Month
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#session-duration" role="tab">
												Year
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="user" role="tabpanel">
										<canvas id="activity" class="chartjs"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- </div> -->

		<!--**********************************
            Content body end
        ***********************************-->


		<!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by aron2k23</p>
			</div>
		</div>
		<!--**********************************
            Footer end
        ***********************************-->



	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="../vendor/global/global.min.js"></script>
	<script src="../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../vendor/dropzone/dist/dropzone.js"></script>
	<script src="../js/custom.min.js"></script>
	<script src="../js/dlabnav-init.js"></script>
	<script src="../js/demo.js"></script>
	<script src="../js/styleSwitcher.js"></script>


	<script src="../vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="../vendor/apexchart/apexchart.js"></script>

	<!-- Chartist -->
	<script src="../vendor/chartist/js/chartist.min.js"></script>
	<script src="../vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

	<!-- Flot -->
	<script src="../vendor/flot/jquery.flot.js"></script>
	<script src="../vendor/flot/jquery.flot.pie.js"></script>
	<script src="../vendor/flot/jquery.flot.resize.js"></script>
	<script src="../vendor/flot-spline/jquery.flot.spline.min.js"></script>

	<!-- Chart sparkline plugin files -->
	<script src="../vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="../js/plugins-init/sparkline-init.js"></script>

	<!-- Chart piety plugin files -->
	<script src="../vendor/peity/jquery.peity.min.js"></script>
	<script src="../js/plugins-init/piety-init.js"></script>

	<!-- Init file -->
	<script src="../js/plugins-init/widgets-script-init.js"></script>

	<script src="../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>



</body>

</html>