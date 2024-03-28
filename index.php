<?php require_once 'include/functions.php';

if (isset($_SESSION['fullname'])) {
    header("Location: student/index.php");
    exit();
  }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/aope.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>AOPE CLINIC MANAGEMENT SYSTEM - HOME</title>
</head>
<body>
    <div class="container-fluid background ">
        <div class="wrapper d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 ">
                        <div class="card pt-4 ">
                            <div class="card-body d-flex ">
                                <div class="col-md-7 ">
                                    <div class="p-3">
                                        <img src="assets/img/aopelogo.png" alt="login" class=" d-md-none pb-3" height="100">
                                        <h2>Student Log In!</h1>
                                        <p>Login to stay connected</p>
                                        <form action="" method="post" class="login">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <?php studentlogin(); ?>
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="number" class="form-control" name="loginmatric" placeholder="21*******2">
                                                        <label for="floatingInput">Matric Number</label>
                                                      </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="password" class="form-control" name="loginpass" placeholder="name@example.com">
                                                        <label for="floatingInput">Password</label>
                                                      </div>
                                                </div>
                                            </div>
                                                <input type="submit" value="Log In" class="btn btn-primary submitb" name="stulogin"/>
                                                <label for="" class="pt-3 ps-md-3">Don't have an account? <a href="student/create_account.php" >Register</a></label> 
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5 d-none d-md-block p-4">
                                    <img src="assets/img/aopelogo.png" alt="login" class="img-fluid ">
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
       const form = document.querySelector('.login');
        const matric = form.loginmatric;
        // const password = form.loginpass;

        function matricCheck() {
            const matricValue = matric.value.trim();
            const submitb = document.querySelector('.submitb')

            if (matricValue.length !== 10) {
            matric.parentElement.classList.add('invalid');
            
            submitb.classList.add('disabled')
            console.log('a', matricValue.length);

            } else {
            matric.parentElement.classList.remove('invalid');
            submitb.classList.remove('disabled')

            console.log('b', matricValue.length);
            
            }

        }

        matric.addEventListener("input", matricCheck);
    </script>

    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/popper.js"></script>
    <!-- <script src="resources/js/sweetalert.min.js"></script> -->
    <script src="resources/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>