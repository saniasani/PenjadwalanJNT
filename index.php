<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="index.css">
    <!--===============================================================================================-->

<body>
    <!-- Title -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="display-4">SISTEM INFORMASI PENJADWALAN KURIR JNT</p>
        </div>
    </div>
    <!-- End Title -->

    <!-- Content -->
   
    
    <div class="row">
        <div class="col-sm-8">
            <img src="image/motor.jpg" alt="">
        </div>
        <?php require_once('login_method.php'); ?>
        <div class="col-sm-4">
            <div class="login">
                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title">
                        Member Login
                    </span>
                    <?php if($msg != null) {?>
                        <p class="alert alert-warning"><?=($msg)?></p>
                    <?php }?>
                    <div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="submit">
                            Login
                        </button>
                    </div>

                    <!-- <div class="text-center p-t-12">
                    <span class="txt1">
                      Forgot
                    </span>
                    <a class="txt2" href="#">
                      Username / Password?
                    </a>
                  </div>
        
                  <div class="text-center p-t-80">
                    <a class="txt2" href="#">
                      Create your Account
                      <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                  </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <div class="footer">
        <p>Copyright © Group 2</p>
    </div>
    <!-- End Footer -->

    <!-- js boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!-- End js boostrap -->

    <!--===============================================================================================-->
    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="login/js/main.js"></script>

</body>

</html>