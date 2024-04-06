<?php
include '../config.php';
$sql1 = "SELECT AVG(revenue) AS average_revenue FROM financial_data";
$sql2 = "SELECT AVG(expenses) AS expenses FROM financial_data";
$sql3 = "SELECT AVG(taxes) AS taxes FROM financial_data";
$sql4 = "SELECT AVG(cogs) AS cogs FROM financial_data";

global $average_revenue, $expenses, $taxes, $cogs;
$result1 = $conn->query($sql1);
if ($result1) {
	$row = $result1->fetch_assoc();
	$average_revenue = $row['average_revenue'];
}
$result2 = $conn->query($sql2);

if ($result2) {
	$row = $result2->fetch_assoc();
	$expenses = $row['expenses'];
}
$result3 = $conn->query($sql3);

if ($result3) {
	$row = $result3->fetch_assoc();
	$taxes = $row['taxes'];
}
$result4 = $conn->query($sql4);

if ($result4) {
	$row = $result4->fetch_assoc();
	$cogs = $row['cogs'];
}

// Fetch data for chart 1 (net income)
$sql_chart1 = "SELECT date, net_income FROM financial_data";
$result_chart1 = $conn->query($sql_chart1);

// Initialize arrays to store data
$dates = [];
$net_incomes = [];

// Fetch data and store it in arrays
if ($result_chart1) {
	if ($result_chart1->num_rows > 0) {
		while ($row = $result_chart1->fetch_assoc()) {
			$dates[] = $row['date'];
			$net_incomes[] = $row['net_income'];
		}
	} else {
		echo "No data available for chart 1.";
	}
} else {
	echo "Error executing query for chart 1: " . $conn->error;
}


// Fetch data for chart 2 (payable and receivable)
$sql_chart2 = "SELECT accounts_payable, accounts_receiveble FROM financial_data";
$result_chart2 = $conn->query($sql_chart2);

// Initialize variables for total amounts
$total_payable = 0;
$total_receivable = 0;

// Fetch data and calculate totals
if ($result_chart2) {
	if ($result_chart2->num_rows > 0) {
		while ($row = $result_chart2->fetch_assoc()) {
			$total_payable += $row['accounts_payable'];
			$total_receivable += $row['accounts_receiveble'];
		}
	} else {
		echo "No data available for chart 2.";
	}
} else {
	echo "Error executing query for chart 2: " . $conn->error;
}


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
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="../vendor/dropzone/dist/dropzone.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/fileUploadstyle.css">


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
			<a href="javascript:void(0);" class="brand-logo">
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
					<li><a href="../Ceomodule/ceo_dashboard.php" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>

					<li><a href="../Ceomodule/finance.php" aria-expanded="false">
							<i class="fas fa-info-circle"></i>
							<span class="nav-text">Finance</span>
						</a>

					</li>
					<li><a href="../Ceomodule/sales.php" aria-expanded="false">
							<i class="fas fa-chart-line"></i>
							<span class="nav-text">Sales</span>
						</a>

					</li>
					<li><a href="../Ceomodule/marketing.php" aria-expanded="false">
							<i class="fab fa-bootstrap"></i>
							<span class="nav-text">Marketing</span>
						</a>

					</li>
					<li><a href="../Ceomodule/operational.php" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Operational</span>
						</a>

					</li>
					<li><a href="../Ceomodule/fileUpload.php" aria-expanded="false">
							<i class="fas fa-heart"></i>
							<span class="nav-text">Files Upload</span>
						</a>

					</li>
					<li><a href="../Ceomodule/addUser.php" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Add User</span>
						</a>
					</li>
					<li><a href="../Ceomodule/email-compose.php" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Send Email</span>
						</a>

					</li>

					<li><a href="javascript:void()" aria-expanded="false">
							<i class="fas fa-clone"></i>
							<span class="nav-text">Pages</span>
						</a>

						<!-- <div class="copyright">
							<p><strong>Felix CEO dashboard</strong> © 2023 All Rights Reserved</p>
							<p class="fs-12">Made with aron2k02</p>
						</div> -->

			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid" style="display: flex; justify-content: space-evenly;">

				<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 ">
					<div class="widget-stat card">
						<div class="card-body p-4">
							<div class="media ai-icon">
								<span class="me-3 bgl-primary text-primary">
									<!--	<i class="ti-user"></i> -->
									<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
										<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
										<circle cx="12" cy="7" r="4"></circle>
									</svg>
								</span>
								<div class="media-body">
									<p class="mb-1">Revenue</p>
									<h4 class="mb-0"><?php echo "$" . number_format($average_revenue, 2); ?></h4>
									<!-- <span class="badge badge-primary">+3.5%</span> -->
								</div>
							</div>
						</div>
					</div>
				</div>
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
									<p class="mb-1">Expenses</p>
									<h4 class="mb-0"><?php echo "$" . number_format($expenses, 2)  ?></h4>
									<!-- <span class="badge badge-warning">+3.5%</span> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-12 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body  p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-danger text-danger">
										<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
											<line x1="12" y1="1" x2="12" y2="23"></line>
											<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Tax</p>
										<h4 class="mb-0"><?php echo "$" . number_format($taxes, 2) ?></h4>
										<!-- <span class="badge badge-danger">-3.5%</span> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body  p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-danger text-danger">
										<svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">COGS</p>
										<h4 class="mb-0"><?php echo number_format($cogs, 2) . "%" ?></h4>
										<!-- <span class="badge badge-danger">-3.5%</span> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Net Income</h4>
								</div>
								<div class="card-body">
									<canvas id="chart1"></canvas>

								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Amount Receivable VS Amount Payable</h4>
								</div>
								<div class="card-body">
									<canvas id="chart2"></canvas>
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
				<p>Copyright © Designed &amp; Developed by aron2k02</p>
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
	<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->


	<!-- Required vendors -->

	<script src="../vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="../vendor/apexchart/apexchart.js"></script>

	<script src="../vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Chart ChartJS plugin files -->
	<script src="../vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="../js/plugins-init/chartjs-init.js"></script>
	<script>
		// JavaScript code to create the line graph using Chart.js
		var ctx = document.getElementById('chart1').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($dates); ?>, // Dates as y-axis
				datasets: [{
					label: 'Net Income', // Legend label
					data: <?php echo json_encode($net_incomes); ?>, // Net Income as x-axis
					backgroundColor: 'rgba(54, 162, 235, 0.2)', // Background color of the line
					borderColor: 'rgba(54, 162, 235, 1)', // Border color of the line
					borderWidth: 1 // Border width
				}]
			},
			options: {
				scales: {
					yAxes: [{
						scaleLabel: {
							display: true,
							labelString: 'Date' // Label for y-axis
						}
					}],
					xAxes: [{
						scaleLabel: {
							display: true,
							labelString: 'Net Income' // Label for x-axis
						}
					}]
				}
			}
		});
	</script>
	<script>
		// JavaScript code to create the line chart using Chart.js
		var ctx = document.getElementById('chart2').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie', // Change the type to 'line' for line chart
			data: {
				labels: ['Amount Payable', 'Amount Receivable'], // Labels for the sections of the line chart
				datasets: [{
					data: [<?php echo  $total_payable; ?>, <?php echo $total_receivable; ?>], // Data values for the sections
					backgroundColor: [
						'rgba(255, 99, 132, 0.5)', // Red color for Amount Payable
						'rgba(54, 162, 235, 0.5)' // Blue color for Amount Receivable
					],
					borderColor: [
						'rgba(255, 99, 132, 1)', // Border color for Amount Payable
						'rgba(54, 162, 235, 1)' // Border color for Amount Receivable
					],
					borderWidth: 1, // Border width
					fill: false // Do not fill the area under the line
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Amount Payable vs. Amount Receivable' // Title for the line chart
				}
			}
		});
	</script>


</body>

</html>