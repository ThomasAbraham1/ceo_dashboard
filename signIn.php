<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- <meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content=""> -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no"> -->

  <!-- PAGE TITLE HERE -->
  <title>Admin Dashboard</title>

  <!-- FAVICONS ICON -->
  <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Parsley css for form validation -->
  <link href="/ceo_dashboard/parsley.css" rel="stylesheet" />
  <script type="text/javascript" src="jquery-3.3.1.js"></script>
  <!-- Parsley css for form validation -->
  <link href="/ceo_dashboard/parsley.css" rel="stylesheet" />
</head>
<?php

session_start();
include 'config.php';

// if(isset($_POST['email']) && isset($_POST['password'])){

//   //mysqli real escape prevent from sql injection which filter the user input
//   $email=mysqli_real_escape_string($conn,$_POST['email']);
//   $password=mysqli_real_escape_string($conn,$_POST['password']);
//   $qr=mysqli_query($conn," SELECT * from login where username='".$username."' and password='".($password)."'");
//   if(mysqli_num_rows($qr)>0){
//     $data=mysqli_fetch_assoc($qr);
//     $_SESSION['user_data']=$data;
//     if($data['roleId']==1){
//       header("Location:ceo_dashboard.php");	
//     }
//     else{
//       header("Location:staff_dashboard.php");
//     }

//   }
//   else{
//     header("Location:signIn.php?error=Invalid Login Details");		
//   }
// }
// else{
//   header("Location:signIn.php?error=Please Enter Email and Password");
// }
// 

//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     // Query to fetch user details
//     $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
//     $result = $conn->query($query);

//     if ($result->num_rows == 1) {
//         $user = $result->fetch_assoc();
//         $roleId = $user["roleId"];

//         // Redirect based on user role
//         if ($roleId == 1) {
//             header("Location: ceo_dashboard.php");
//         } else if ($roleId == 2) {
//             header("Location: staff_dashboard.php");
//         }
//         exit();
//     } else {
//         echo "Invalid username or password";
//     }
// }
//   
?>

<body class="vh-100">
  <div class="authincation h-100">
    <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <div class="text-center mb-3">
                    <a href="index.html"><img src="images/logo.png" alt="" /></a>
                  </div>
                  <h4 class="text-center mb-4">Sign in your account</h4>
                  <form id="signInForm">
                    <div class="mb-3">
                      <label class="mb-1"><strong>Username</strong></label>
                      <input type="text" id="userName" name="username" class="form-control" required data-parsley-trigger="change" />
                    </div>
                    <div class="mb-3">
                      <label class="mb-1"><strong>Password</strong></label>
                      <input type="password" id="password" name="password" class="form-control" required data-parsley-trigger="change" data-parsley-minlength="8" data-parsley-pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$" data-parsley-pattern-message="The password must include at least 1 upper case letter, 8 characters and a symbol"  data-parsley-required />
                    </div>
                    <div class="row d-flex justify-content-between mt-4 mb-2">
                      <!-- <div class="mb-3">
                        <div class="form-check custom-checkbox ms-1">
                          <input type="checkbox" class="form-check-input" id="basic_checkbox_1" />
                          <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                        </div>
                      </div> -->
                      <div class="text-center">
                        <button type="submit" id="signInBtn" class="btn btn-primary btn-block">Sign Me In</button>
                      </div>
                  </form>
                  <div class="new-account mt-3">
                    <p> Don't have an account?
                      <a class="text-primary" href="signUp.php">Sign up</a>
                    </p>
                  </div>
                  <div id="Result"> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="vendor/global/global.min.js"></script>
  <script src="js/custom.min.js"></script>
  <script src="js/dlabnav-init.js"></script>
  <script src="js/styleSwitcher.js"></script>
  <!-- Parsley.js for form validation -->
  <script src="/ceo_dashboard/parsley.js"></script>
  <script>
    $(document).ready(function(e) {

      $(function() {
        $('#signInForm').parsley().on('field:validated', function() {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
          })
          .on('form:submit', function() {
            return false; // Don't submit form for this demo
          });
      });


      $('#signInBtn').click(function(ee) {
        if ($('#signInForm').parsley().isValid()) {
          ee.preventDefault();
          var userName = $('#userName').val();
          var password = $('#password').val();
          $.ajax({
            url: 'functions.php',
            type: 'POST',
            data: {
              userName: userName,
              password: password,
              Function: 'signIn',
            },
            success: function(response) {
              console.log(response);
              if (response == "OK") {
                $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Successfully Signed In! </div>`);
                window.location.href = "./Ceomodule/ceo_dashboard.php";
              } else {
                $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${response}</div>`);
              }
            }
          })
        }
      })
    })
  </script>

</body>

</html>