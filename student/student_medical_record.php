<?php require_once '../include/functions.php';

if (!isset($_SESSION['fullname'])) {
    header("Location: ../index.php");
    exit();
}

elseif (!isset($_SESSION['RegistrationValue']) || $_SESSION['RegistrationValue'] == 0) {
    header("Location: student_registration.php");
    exit();
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/aope.ico" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/datatables.min.css">
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <title>AOPE CLINIC MANAGEMENT SYSTEM - DASHBOARD</title>
</head>
<body>
    <div class="main">
    <?php require_once '../include/sidebar.php' ?>

        <div class="main-body">

        <?php require_once '../include/header.php' ?>
            

            <div class="px-4 pt-5">
                <div class="alert text-light bg-dark  " role="alert">
                    <p class="m-0 ">Your Health Care Number is <strong>2021/382/2919</strong></p>
                    <!-- <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>        
            </div>

            <div class="container-fluid px-4">
            <div class="card mb-3">
                <div class="card-header">
                    <p class="card-title h4 m-0 p-3">Medical Records</p>
                </div>

                <div class="card-body mt-3 ">
                    <h4 class="px-3">You have no medical records</h4>

                </div>
                
            </div>
            
            </div>

        </div>
    </div>
    


    <script src="../resources/js/jquery.js"></script>
    <script src="../resources/js/popper.js"></script>
    <script src="../resources/js/sweetalert.min.js"></script>
    <script src="../resources/js/datatables.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>