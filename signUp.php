<!DOCTYPE html>
<html lang="en" class="h-100">

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
    <!-- <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png"> -->
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>
    <!-- Font awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="../ceo_dashboard/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <!--font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTBZkWWuUHNahSjQZtmeoQYjMvmHe1WYuCT9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Parsley css for form validation -->
    <link href="/ceo_dashboard/parsley.css" rel="stylesheet" />

</head>
<style>
    .pass-icon1 {
        position: absolute;
        top: 12cm;
        right: 17cm;
        width: 24px;
        cursor: pointer;
    }

    .pass-icon2 {
        position: absolute;
        top: 5.8in;
        right: 17cm;
        width: 24px;
        cursor: pointer;
    }

    .password-checklist {
        position: absolute;
        top: calc(100% + 10px);
        width: 100%;
        padding: 20px 30px;
        background: #b09fd2;
        border-radius: 5px;
    }

    .checklist-title {
        font-size: 15px;
        color: #886cc0;
        margin-bottom: 10px;
    }

    .list-item {
        padding-left: 30px;
        color: white;
        font-size: 14px;
    }

    .list-item::before {
        content: '\f00d';
        font-family: FontAwesome;
        display: inline-block;
        margin: 8px 0;

    }
</style>

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
                                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form id="signUpForm">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="name" id="userName" class="form-control" placeholder="username" required data-parsley-trigger="change">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" id="email" class="form-control" placeholder="hello@example.com" required data-parsley-trigger="change">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" id="password" class="form-control" required data-parsley-trigger="change" data-parsley-minlength="8" data-parsley-pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$" data-parsley-pattern-message="The password must include at least 1 upper case letter, 8 characters and a symbol"  data-parsley-required>
                                            <!-- <img src="images/pass-hide.jpg" onclick="pass1()" class="pass-icon1" id="pass-icon1"> -->
                                        </div>
                                        <!-- <div class="password-checklist">
                                                <h3 clsaa="chelist-title">Password should be</h3>
                                                <ul class="checklist">
                                                    <li class="list-item">Atleast 8 characters long</li>
                                                    <li class="list-item">Atleast 1 number</li>
                                                    <li class="list-item">Atleast 1 lowercase letter</li>
                                                    <li class="list-item">Atleast 1 uppercase letter</li>
                                                    <li class="list-item">Atleast 1 special character </li>
                                                </ul>
                                            </div> -->

                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" id="confirmpassword" class="form-control" data-parsley-trigger="change" required data-parsley-equalto="#password">
                                            <!-- <img src="images/pass-hide.jpg" onclick="pass2()" class="pass-icon2" id="pass-icon2"> -->
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" id="signUpBtn" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="signIn.php">Sign in</a></p>
                                    </div> -->
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
    <!--hide show password icon-->
    <!-- <script>
        var a;

        function pass1() {
            if (a == 1) {
                document.getElementById('password').type = 'password';
                document.getElementById('pass-icon1').src = 'images/pass-hide.jpg';
                a = 0;
            } else {
                document.getElementById('password').type = 'text';
                document.getElementById('pass-icon1').src = 'images/pass-show.jpg';
                a = 1;
            }
        }
    </script>
    <script>
        var a;

        function pass2() {
            if (a == 1) {
                document.getElementById('confirmpassword').type = 'password';
                document.getElementById('pass-icon2').src = 'images/pass-hide.jpg';
                a = 0;
            } else {
                document.getElementById('confirmpassword').type = 'text';
                document.getElementById('pass-icon2').src = 'images/pass-show.jpg';
                a = 1;
            }
        }
    </script> -->
    <!--hide show password icon-->
    <script>
        $(document).ready(function(e) {
            $(function() {
                $('#signUpForm').parsley().on('field:validated', function() {
                        var ok = $('.parsley-error').length === 0;
                        $('.bs-callout-info').toggleClass('hidden', !ok);
                        $('.bs-callout-warning').toggleClass('hidden', ok);
                    })
                    .on('form:submit', function() {
                        return false; // Don't submit form for this demo
                    });
            });
            $('#signUpBtn').click(function(ee) {
                if ($('#signUpForm').parsley().isValid()) {
                    ee.preventDefault();
                    var userName = $('#userName').val();
                    var password = $('#password').val();
                    var email = $('#email').val();
                    // console.log(`${userName} ${password} ${email}`);
                    $.ajax({
                        url: 'functions.php',
                        type: 'POST',
                        data: {
                            userName: userName,
                            password: password,
                            email: email,
                            Function: 'signUp',
                        },
                        success: function(response) {
                            console.log(response);
                            if (response == "OK") {
                                $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Successfully Signed Up! </div>`);
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