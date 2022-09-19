<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>DP Singh-Admin Login Page</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="<?= base_url('assets/dist/css/style.css');?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body class="bg-light">
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	<!-- HK Wrapper -->
	<div class="hk-wrapper">
        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-sm-50 w-100 py-3">
                                <a class="auth-brand text-center d-block mb-20" href="#">
                                    <img style="max-width: 200px;" class="brand-img" src="<?= base_url('assets/images/custom/logo.png');?>" alt="brand" />
                                </a>
                                <form class="w-xl-80 needs-validation" novalidate style="margin: 0 auto" id="login-frm">
                                    <h1 class="display-5 mb-30 text-center">Login to go Dashboard</h1>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" id="username">
                                        <small class="text-danger" id="userError"></small>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="password" type="password" name="password" id="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa-solid fa-eye"></i></span>
                                            </div>
                                        </div>
                                        <small class="text-danger" id="userPass"></small>
                                        <br>
                                        
                                    </div>
                                    
                                    <button class="btn btn-primary btn-block mb-20" type="submit">Login</button>
                                    <div class="text-center"><small class="text-danger" id="error"></small></div>
                                    <!-- <p class="text-right"><a href="#">login</a></p> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->
    </div>
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/jquery-toggles/toggles.min.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/toggle-data.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/init.js'); ?>"></script>
    <script src="<?= base_url('assets/dist/js/validation-data.js'); ?>"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $("#login-frm").on('submit', function(e) {
            e.preventDefault();

            let status = true;

            if($("#username").val() == "" || $("#password").val() == "") {
                $("#userError").text("Please enter your username");
                $("#userPass").text("Please enter Password and it must be 5 chars.");
                status = false;
                exit();
            }
            if($("#username").val() == "") {
                $("#userError").text("Please enter your username");
                $("#userPass").text("");
                status = false;
                exit();
            }

            if($("#password").val() == "" || $("#password").val().length < 6) {
                $("#userError").text("");
                $("#userPass").text("Please enter Password and it must be 5 chars.");
                status = false;
                exit();
            }

            if(status === true) {
                $.ajax({
                    url: "<?= base_url('admin/login');?>",
                    method: "POST",
                    data: $("#login-frm").serialize(),
                    success: function(data) {
                        if(data == 'success') {
                            window.location = "<?= base_url('admin/dashboard');?>";
                        }
                        if(data == 'error1') {
                            $("#error").text("Invalid Password or Email Address");
                        }

                        if(data == 'error2') {
                            $("#error").text("Invalid Email or Password");
                        }
                    }, 
                    error: function() {
                        alert("Something went wrong please try again...");
                    }
                });
            }

            
        });
        // $("#login-frm").submit(function(event) {
        //     $.ajax({
        //         url: 'ajax-data/login_check.php',
        //         type: 'POST',
        //         dataType: 'json',
        //         data: $("#login-frm").serialize(),
        //         success:function(data){
        //             if (data.success=='ok') {
        //                 window.location.href = "dashboard.php";
        //             }
        //             else if(data.success=='invalid_captcha'){
        //                 alert('Invalid Captcha');
        //             }
        //             else{
        //                 alert('Invalid Username Or password');
        //             }
        //         },
        //         error:function(){
        //             alert('fail');
        //         }
        //     })  
        //     return false;
        // });
    });
</script>