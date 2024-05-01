<?php require_once '../include/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" href="../assets/img/aope.ico" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <title>AOPE CLINIC MANAGEMENT SYSTEM - ADMIN DASHBOARD</title>

    <script src="../resources/js/jquery.js"></script>



</head>
<body>
    <div class="main">
        <div class="sidebar background ">
            <div class="glassporphism ">
                    <ul>
                        <li class="d-flex justify-content-center mt-5 mb-3">
                            <div class="w-50">
                                <div class="text-center w-100 ">
                                    <img src="../assets/img/aopelogo.jpeg" alt="login" class="img-fluid center me-3" >
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="index.php">
                                <span class="icon">
                                    <i class="ri-profile-line"></i>
                                </span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="manageStudent.php">
                                <span class="icon">
                                    <i class="ri-profile-line"></i>
                                </span>
                                <span>Manage Student</span>
                            </a>
                        </li>
                        <li>
                            <a href="manageStaff.php">
                                <span class="icon">
                                    <i class="ri-nurse-line"></i>
                                </span>
                                <span>Manage Staff</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="manageResources.php">
                                <span class="icon">
                                    <i class="ri-dossier-line"></i>
                                </span>
                                <span>Manage Resources</span>
                            </a>
                        </li>

                        <li>
                            <a href="addAppointment.php">
                                <span class="icon">
                                    <i class="ri-dossier-line"></i>
                                </span>
                                <span>Health Appointment</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="addAppointment.php?logout">
                                <span class="icon">
                                    <i class="ri-logout-circle-r-line"></i>
                                </span>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                
                </div>
        </div>

        <div class="main-body">
            <div class="d-flex justify-content-between shadow-lg py-4 px-3">
                <div class="col d-none d-lg-block s-3">
                    <span class="icon">
                      <i class="ri-menu-line toggle  "  style="font-size: 25px;"></i>
                    </span>
                </div>

                <div class="col d-flex justify-content-center  pe-3 d-none d-md-flex">
                    <form action="">
                        <div class="d-flex">
                            <input type="search" name="search" class="form-control placeholder-glow me-2" placeholder="Search"   id="" required>
                            <input type="submit" name="search" class="btn btn-dark btn-sm" value="Search">
                        </div>
                    </form>
                </div>

                <div class="col pe-3 d-flex justify-content-end">
                    
                    <div class="col-2 d-md-none d-sm-block ">
                        <img src="../assets/img/aopelogo.png" alt="" class="img-fluid ">
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="img img-fluid me-3">
                            <img src="../assets/img/02.jpg" alt="Admin Picture" height="40px" style="border-radius: 50% 40%  10% 40%;">
                        </div>
                        <p class="py-1 m-0">Sulaimon Yusuf Ayomide</p>
                        
                    </div>

                    <div class="col-1 d-md-none d-sm-block">
                        <span class="icon">
                            <i class="ri-menu-line toggler  "  style="font-size: 25px;"></i>
                        </span>
                    </div>
                </div>

                

            </div>

            <div class="container-fluid my-5 px-5">
                <div class="card mb-3 ">
                    <div class="card-header">
                        <p class="card-title h4 m-0 p-3">Add Appointment</p>
                    </div>

                    <div class="card-body mt-3">
                        <form action="" method="post" class="row m-0 g-2 needs-validation" novalidate>
                    
                            
                                <div class="row p-0 m-0 mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label mb-2" for="validationCustom04">Start Date</label>
                                    <input type="date" class="form-control" id="validationCustom04" name="startdate" required>
                                    <div class="invalid-feedback">
                                        Please check your input and input correct details.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
        
                                    <div class="col-md-6">
                                        <label class="form-label mb-2" for="validationCustom05">Start Time</label>
                                    <input type="date" class="form-control" id="validationCustom05" name="starttime" required>
                                    <div class="invalid-feedback">
                                        Please check your input and input correct details.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    
                                
                                </div>

                                <div class="row p-0 m-0 mb-3">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label mb-2" for="validationCustom04">End Date</label>
                                    <input type="date" class="form-control" id="validationCustom04" name="enddate" required>
                                    <div class="invalid-feedback">
                                        Please check your input and input correct details.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
        
                                    <div class="col-md-6">
                                        <label class="form-label mb-2" for="validationCustom05">End Time</label>
                                    <input type="date" class="form-control" id="validationCustom05" name="endtime" required>
                                    <div class="invalid-feedback">
                                        Please check your input and input correct details.
                                        </div>
                                        <div class="valid-feedback">
                                        Looks good!
                                        </div>
                                    </div>
                                    
                                
                                </div>

                                
                                <div class="row p-0 m-0 mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label mb-2" for="validationCustom06">No of Student</label>
                                        <input type="number" class="form-control" id="validationCustom06" name="numstu" required>
                                        <div class="invalid-feedback">Please check your input and input correct details.</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>   
                                     
                                    <div class="col-md-3 col-sm-6 mb-2 pt-4">
                                        <input type="submit" value="Add Appointment" name="addappointment" class="btn btn-success w-100">
                                    </div>
                                    <div class="col-md-2 col-sm-6 mb-2 pt-4">
                                        <input type="submit" value="Reset" name="addProduct" class="btn btn-danger w-100">
                                    </div>
                                </div>
                            
                            
                    </form>
                    </div>
                    
                </div>
            
                <div class="mt-5">
                    <table class="table table-hover" id="example">
                        <thead class="table-dark">
                            <tr class="align-middle">
                                <th class="py-3">Start Date</th>
                                <th class="py-3">Start Time</th>
                                <th class="py-3">End Date</th>
                                <th class="py-3">End Time</th>
                                <th class="py-3">No of Student</th>
                            </tr>
                        </thead>
                        <tbody class="">
                           

                        </tbody>
                    </table>
                       
                        
                    </div>
                </div> 
            </div>

            
         </div>
    </div>

    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
</script>
<script src="../resources/js/jquery.dataTables.min.js"></script>

    <script src="../resources/js/popper.js"></script>
    <script src="../resources/js/sweetalert.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>