
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/img/aope.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../resources/css/datatables.min.css">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <title>AOPE CLINIC MANAGEMENT SYSTEM - ADMIN DASHBOARD</title>
</head>
<body>
    <div class="main">
        <div class="sidebar background ">
            <div class="glassporphism ">
            <ul>
                        <li class="d-flex justify-content-center mt-5 mb-3">
                            <div class="w-50">
                                <div class="text-center w-100 ">
                                    <img src="../../assets/img/aopelogo.jpeg" alt="login" class="img-fluid center me-3" >
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
                            <a href="manageAppointment.php">
                                <span class="icon">
                                    <i class="ri-calendar-todo-fill"></i>
                                </span>
                                <span>Manage Appointment</span>
                            </a>
                        </li>
                        <li>
                            <a href="patient.php">
                                <span class="icon">
                                    <i class="ri-nurse-line"></i>
                                </span>
                                <span>Patient</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="index.php?logout">
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
                            <img src="../../assets/img/02.jpg" alt="Admin Picture" height="40px" style="border-radius: 50% 40%  10% 40%;">
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

            <div class="p-3 mt-3">
                <div class="p-3">

                    <div class="row d-flex">
                        <div class="alert text-light bg-dark col me-3" role="alert">
                            <p class="m-0 ">No of Appointment</p>
                            <p class="h4">62</p>
                        </div>

                        <div class="alert text-light bg-success me-3 col" role="alert">
                            <p class="m-0 ">No of Appointment Completed</p>
                            <p class="h4">32</p>
                        </div>

                        <div class="alert text-light bg-danger col" role="alert">
                            <p class="m-0 ">No of Appointment yet to attend</p>
                            <p class="h4">32</p>
                        </div>

                    </div>
                </div>

            </div>

            </div>
        </div>
    </div>
    


    <script src="../../resources/js/jquery.js"></script>
    <script src="../../resources/js/popper.js"></script>
    <script src="../../resources/js/sweetalert.min.js"></script>
    <script src="../../resources/js/datatables.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>
</html>