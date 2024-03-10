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
    <link rel="stylesheet" href="parsley.css">
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="/ceo_dashboard/css/style.css" rel="stylesheet">
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
    <div class="authincation">
        <div class="container h-100 d-flex justify-content-center">
            <div class="row h-100 align-items-center">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Staffs</h4>
                    </div>
                    <form id="addUserForm" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="card-body h-100 d-flex justify-content-center">
                                    <div class="form-validation">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Username
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="userName" placeholder="Enter a username.." required="" data-parsley-trigger="change">
                                                <div class="invalid-feedback">
                                                    Please enter a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom02">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="email" placeholder="Your valid email.." required="" data-parsley-trigger="change">
                                                <div class="invalid-feedback">
                                                    Please enter a Email.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom02">First Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="firstName" placeholder="Your valid name.." required="" data-parsley-trigger="change">
                                                <div class="invalid-feedback">
                                                    Please enter first name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom02">Last Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="lastName" placeholder="Valid name.." required="" data-parsley-trigger="change">
                                                <div class="invalid-feedback">
                                                    Please enter last name.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Password
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" placeholder="Choose a safe one.." required="" data-parsley-trigger="change" data-parsley-minlength="8" data-parsley-uppercase="1" data-parsley-lowercase="1" data-parsley-number="1" data-parsley-special="1">
                                                <div class="invalid-feedback">
                                                    Please enter a password.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Designation
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select name="" id="designation" required data-parsley-trigger="change">
                                                    <option value="finance">Finance</option>
                                                    <option value="salesAndMarketing">Sales & Marketing</option>
                                                    <option value="operation">Operation</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Phone Number
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="phoneNo" placeholder="Enter a number" required="" data-parsley-trigger="change">
                                                <div class="invalid-feedback">
                                                    Enter phone number.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <input id="addUserBtn" class="btn btn-primary btn-block" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center col-1">
                                        Profile Pic:
                                        <img id="userProfilePic" style="width:15vh; height:15vh;" src="/ceo_dashboard/images/profile/small/pic1.jpg" class="rounded mb-2" alt="...">
                                        <input id="profileImage" name="profileImage[]" type="file" type="text" required="" data-parsley-trigger="change">
                                    </div>
                                </div>
                            </div>
                    </form>
                    <div id="Result"></div>
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
    <script src="/ceo_dashboard/vendor/global/global.min.js"></script>
    <script src="/ceo_dashboard/js/custom.min.js"></script>
    <script src="/ceo_dashboard/js/dlabnav-init.js"></script>
    <script src="/ceo_dashboard/js/styleSwitcher.js"></script>
    <script src="/ceo_dashboard/parsley.js"></script>
    <!-- Parsley.js for form validation -->
    <script src="/ceo_dashboard/parsley.js"></script>
    <!--hide show password icon-->
    <script>
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
    </script>
    <!--hide show password icon-->
    <script>
        // Image preview - User Profile Picture


        $(document).ready(function(e) {
            var profileImage = $("#profileImage");
            var userProfilePic = $("#userProfilePic");
            $("#profileImage").change(function(e) {
                file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        $("#userProfilePic").attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            })

            $(function() {
                $('#addUserForm').parsley().on('field:validated', function() {
                        var ok = $('.parsley-error').length === 0;
                        $('.bs-callout-info').toggleClass('hidden', !ok);
                        $('.bs-callout-warning').toggleClass('hidden', ok);
                    })
                    .on('form:submit', function() {
                        return false; // Don't submit form for this demo
                    });
            });
            $('#addUserForm').submit(function(ee) {
                if ($('#addUserForm').parsley().isValid()) {
                    ee.preventDefault();
                    var formData = new FormData(this);
                    var userName = $('#userName').val();
                    var password = $('#password').val();
                    var email = $('#email').val();
                    var phoneNo = $('#phoneNo').val();
                    var firstName = $('#firstName').val();
                    var lastName = $('#lastName').val();
                    var designation = $('#designation').val();
                    console.log(`${userName} ${password} ${email} ${phoneNo} ${firstName} ${lastName} ${designation}`);

                    // Form data values
                    formData.append('userName', userName);
                    formData.append('password', password);
                    formData.append('email', email);
                    formData.append('phoneNo', phoneNo);
                    formData.append('firstName', firstName);
                    formData.append('lastName', lastName);
                    formData.append('designation', designation);
                    formData.append('Function', 'addUser');

                    // Logic for checking the size of the image file being uploaded
                    if ($("#profileImage").val() !== '') {
                        // Logic for checking the size of the image file being uploaded
                        var fileSize = ($("#profileImage")[0].files[0].size / 1024);
                        fileSize = (Math.round(fileSize * 100) / 100);
                    }

                    setTimeout(function() {
                        if (fileSize <= 800) {
                            $.ajax({
                                url: '../functions.php',
                                type: 'POST',
                                processData: false,
                                contentType: false,
                                data: formData,
                                success: function(response) {
                                    if (response == "OK") {
                                        $("#Result").html(`<div class="alert alert-success fade show" role="alert"> Staff Created Successfully! </div>`);
                                        window.location.href = "/ceo_dashboard/Ceomodule/ceo_dashboard.php";

                                    } else {
                                        $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> ${response}</div>`);
                                    }
                                }
                            })
                        } else {
                            $("#Result").html(`<div class="alert alert-danger fade show" role="alert"> File size has to be within 800kb</div>`);
                            console.log('File size has to be within 800kb')
                        }
                    }, 1000);
                }
            })
        })
    </script>
</body>

</html>