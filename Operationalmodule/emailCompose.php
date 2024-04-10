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
			<a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">Felix</h2>
					<span class="brand-sub-title">CEO Dashboard</span>
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
            Chat box start
        ***********************************-->

		<!--**********************************
            Chat box End
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
								Compose
							</div>

						</div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="../images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<!-- <a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path
												d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
											</path>
											<polyline points="22,6 12,13 2,6"></polyline>
										</svg>
										<span class="ms-2">Inbox </span>
									</a> -->
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
					<li><a href="../Operationalmodule/ceo_dashboard.php" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>


					<li><a href="../Operationalmodule/operational.php" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Operational</span>
						</a>

					</li>
					<li><a href="../Operationalmodule/fileUpload.php" aria-expanded="false">
							<i class="fas fa-heart"></i>
							<span class="nav-text">Files Upload</span>
						</a>

					</li>

					<li><a href="../Operationalmodule/emailCompose.php" aria-expanded="false">
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

				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="../Operationmodule/ceo_dashboard.php">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="../Operationmodule/emailcompose.php">Email</a></li>
					</ol>
				</div>

				<!--email compose part row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">


								<div class="compose-content">
									<form action="sendEmail.php" method="post" enctype="multipart/form-data">
										<div class="mb-3">
											<input type="text" name="From" id="toField" class="form-control bg-transparent" placeholder=" From:"><!--extra added to fill the from address-->
										</div>
										<div class="mb-3">
											<input type="text" name="to" id="toField" class="form-control bg-transparent" placeholder=" To:">
										</div>
										<div class="mb-3">
											<input type="text" name="subject" id="subject" class="form-control bg-transparent" placeholder=" Subject:">
										</div>
										<div class="mb-3">
											<textarea id="email-compose-editor" name="body" class="textarea_editor form-control bg-transparent emailBody" rows="15" placeholder="Enter text ..."></textarea>
										</div>

										<h5 class="mb-4"><i class="fa fa-paperclip"></i> Attachment</h5>
										<div class="input-group mb-3">
											<!-- <button class="btn btn-primary btn-sm" type="button">Button</button> -->
											<div class="form-file">
												<input type="file" class="form-file-input form-control">
											</div>
										</div>

								</div>
								<div class="text-start mt-4 mb-3">
									<button class="btn btn-primary btn-sl-sm me-2" type="submit" id="sendEmailBtn"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--email compose part row -->

		</div>
	</div>
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
	<script>
		$(document).ready(function() {
			$('#sendEmailBtn').click(function(e) {
				e.preventDefault();
				var emailBody = $('.emailBody').val();
				var subject = $('#subject').val();
				var toField = $('#toField').val();
				console.log(`${emailBody} ${subject} ${toField}`);
				$.ajax({
					url: 'functions.php',
					type: 'POST',
					data: {
						emailBody: emailBody,
						subject: subject,
						toField: toField,
						Function: 'sendEmail',
					},
					success: function(response) {
						console.log(response);
						if (response == 'OK') {

						}
					}
				})
			})
			$('#createStudentForm').submit(function(e) {
				e.preventDefault();

				//  Acquiring values from the input fields from create faculty form




				// Student details
				var fileSize = 0;
				var studentProfilePic = $("#studentProfilePic").val(); // Note: File input values are not directly accessible due to security reasons

				last_name = last_name + " " + Initials;


				// Logic for checking the size of the image file being uploaded
				if ($("#studentProfilePic").val() !== '') {
					// Logic for checking the size of the image file being uploaded
					var fileSize = ($("#studentProfilePic")[0].files[0].size / 1024);
					fileSize = (Math.round(fileSize * 100) / 100);
				}
				setTimeout(function() {
					if (fileSize <= 800) {
						$.ajax({
							url: 'ajax/upload.php',
							type: 'POST',
							data: formData,
							success: function(response) {
								console.log(response);
								if (response == "OK") {

								} else {
									$("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${response}</div>`);
								}
								setTimeout(function() {
									$("#Result").html('');
								}, 1000);

							}
						});
						console.log('Good to upload~!');
					} else {
						$("#Result").html(`<div class="alert alert-danger fade show" role="alert"> File size has to be within 800kb</div>`);
					}
				}, 1000);
			});
		})
	</script>

</body>

</html>