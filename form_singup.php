<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Form Singup</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" name="form_singup" method="post" action="singup.php" onSubmit="return check();" enctype="multipart/form-data">
                    <span class="login100-form-title p-b-49">
                        Singup
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" id="Username" name="Username" placeholder="Username" required>
                        <span class="focus-input100" data-symbol="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email is reauired">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" id="Email" name="Email" placeholder="Email" required>
                        <span class="focus-input100" data-symbol="&#xf200;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email is reauired">
                        <span class="label-input100">First name</span>
                        <input class="input100" type="text" id="Firstname" name="Firstname" placeholder="Firstname" required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email is reauired">
                        <span class="label-input100">Last name</span>
                        <input class="input100" type="text" id="Lastname" name="Lastname" placeholder="Lastname" required>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="Password" name="Password" placeholder="Password" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Confirm Password is required">
                        <span class="label-input100">Confirm Password</span>
                        <input class="input100" type="password" id="cPassword" name="cPassword" placeholder="Confirm Password" required>
                        <span class="focus-input100" data-symbol="&#xf191;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50">
                        <input type="hidden" name="size" value="1000000">
                        <input type="file" name="file">
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="Singup">Singup</button>
                        </div>
                    </div>

                    <div class="flex-col-c p-t-30">
                        <a href="form_login.php" class="txt2">
                            Login
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>

<script language="javascript">
    function check() {

        if (document.form_singup.Username.value == "") {
            alert("Plese Enter Username");
            document.form_singup.Username.focus();
            return false;
        }

        if (document.form_singup.Firstname.value == "") {
            alert("Plese Enter Firstname");
            document.form_singup.Firstname.focus();
            return false;
        }

        if (document.form_singup.Lastname.value == "") {
            alert("Plese Enter Lastname");
            document.form_singup.Lastname.focus();
            return false;
        }

        if (document.form_singup.Password.value == "") {
            alert("Plese Enter Password");
            document.form_singup.Password.focus();
            return false;
        }

        if (document.form_singup.cPassword.value == "") {
            alert("Plese Enter Confirm Password");
            document.form_singup.cPassword.focus();
            return false;
        }

        if (document.form_singup.Password.value != document.form_singup.cPassword.value) {
            alert("Confirm Password does not matched");
            document.form_singup.cPassword.focus();
            return false;
        }

        if (document.form_singup.image.value == "") {
            alert("Plese Enter image");
            document.form_singup.image.focus();
            return false;
        }

        if (document.form_singup.Email.value == "") {
            alert("Plese Enter your Email Address");
            document.form_singup.Email.focus();
            return false;
        }
        e = document.form_singup.Email.value;
        f1 = e.indexOf('@');
        f2 = e.indexOf('@', f1 + 1);
        e1 = e.indexOf('.');
        e2 = e.indexOf('.', e1 + 1);
        n = e.length;

        if (!(f1 > 0 && f2 == -1 && e1 > 0 && e2 == -1 && f1 != e1 + 1 && e1 != f1 + 1 && f1 != n - 1 && e1 != n - 1)) {
            alert("Please Enter valid Email");
            document.form_singup.Email.focus();
            return false;
        }
        return true;
    }
</script>