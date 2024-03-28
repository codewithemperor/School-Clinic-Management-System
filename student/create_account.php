<?php require_once '../include/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/aope.ico" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>AOPE CLINIC MANAGEMENT SYSTEM - CREATE ACCOUNT</title>
</head>
<body>
    <div class="container-fluid background ">
        <div class="wrapper d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 ">
                        <div class="card pt-md-4 pt-sm-2">
                            
                            <div class="card-body d-flex ">
                                <div class="col-12 ">
                                    <div class="p-3 p-sm-1">
                                        <div class="d-md-flex justify-content-center mb-3 d-sm-block">
                                            <div class="text-center">
                                                <img src="../assets/img/aopelogo.png" alt="login" class="img center me-3" height="80">
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <p class="head-text m-0 pb-md-1">Adeseun Ogundoyin Polytechnic, Eruwa Clinic</p>
                                                    <h6 class="m-0 text-center">Create Account -  Student </h6>
                                                </div>
                                            </div>
                                            
                                        </div> 
                                        
                                        <?php addStudent(); ?>
                                        
                                        <form action="create_account.php" method="post" class="">
                                            <div class="row">

                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="text" class="form-control" name="studentFullName"  placeholder="Full Name" autocomplete="off" required>
                                                        <label for="floatingInput">Full Name</label>
                                                    </div>        
                                                </div>

                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="number" class="form-control" name="studentMatricNo"  placeholder="Matric Number"  maxlength="10" minlength="10"autocomplete="off" required>
                                                        <label for="floatingInput">Matric Number</label>
                                                        
                                                    </div>        
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="number" class="form-control" name="studentPhoneNo"  placeholder="Phone Number"autocomplete="off" required>
                                                        <label for="floatingInput">Phone Number</label>
                                                    </div>        
                                                </div>

                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="email" class="form-control" name="studentEmail"  placeholder="Email"autocomplete="off" required>
                                                        <label for="floatingInput">Email Address</label>
                                                    </div>        
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="password" class="form-control studentPassword" name="studentPassword"  placeholder="Password"autocomplete="off" required>
                                                        <label for="floatingInput">Password</label>
                                                    </div>        
                                                </div>

                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-floating form-group mb-3">
                                                        <input type="password" class="form-control studentConfPassword" name="studentConfPassword"  placeholder="Password" >
                                                        <label for="floatingInput">Comfirm Password</label>
                                                    </div>        
                                                </div>

                                            </div>
                                           
                                            <input type="submit" value="Register" name="studentRegister" class="btn btn-primary px-4 studentRegister" />
                                            <label for=""
                                            >Already have an account? <a href="../index.php">Log In</a></label> 
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../resources/js/jquery.js"></script>
    <script src="../resources/js/popper.js"></script>
    <script src="../resources/js/sweetalert.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>