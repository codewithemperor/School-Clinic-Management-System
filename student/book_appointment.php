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
                    <p class="card-title h4 m-0 p-3">Book Appointment with Doctor</p>
                </div>

                <div class="card-body mt-3">
                    <?php  StudentAppointment(); updateAppointment();?>
                    <form action="" method="post" class="row m-0 g-2 needs-validation" novalidate>
                
                        <div class="row p-0 m-0 mb-3">
                            <div class="col-md-6">
                                <label class="form-label mb-2" for="v1">Full Name</label>
                                <input type="text" class="form-control" id="v1" value="<?php echo $_SESSION['fullname'] ?>" disabled required>
                                <div class="invalid-feedback">
                                    Please check your input and input correct details.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <label class="form-label mb-2" for="v2">Matric Number</label>
                                <input type="number" class="form-control" id="v2" value="<?php echo $_SESSION['MatricNo'] ?>" disabled required>
                                <div class="invalid-feedback">
                                    Please check your input and input correct details.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
    
                        <div class="row p-0 m-0 mb-3">
                            <div class="col-md-4">
                                <label class="form-label mb-2" for="v3">Select Doctor</label>
                                <select class="form-select" id="v3" name="doctor" required>
                                <option value="" disabled selected>Please Select</option>
                                <option value="Doctor1">Doctor 1</option>
                                <option value="Doctor2">Doctor 2</option>
                                </select>
                                
                                <div class="invalid-feedback">
                                    Please check your input and input correct details.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label mb-2" for="v4">Appointment Date</label>
                                <input type="date" class="form-control" id="v4" name="appointmentDate" required>
                                <div class="invalid-feedback">
                                    Please check your input and input correct details.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label mb-2" for="v5">Appointment Time</label>
                                <input type="time" class="form-control" id="v5" name="appointmentTime" required>
                                <div class="invalid-feedback">
                                    Please check your input and input correct details.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            
                        
                        </div>

                        <div class="row p-0 m-0 mb-3">
                        <div class="col">
                            <label class="form-label mb-2" for="v6">Appointment Note</label>
                            <textarea class="form-control" id="v6" rows="4" placeholder="Please write some note" name="appointmentNote" required></textarea>
                            <div class="invalid-feedback">
                                Please check your input and input correct details.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        </div>
                            
                        <div class="row p-0 m-0 mb-3">
                            <div class="col-md-3 col-sm-6 mb-2">
                            <button type="submit" name="bookappointment" class="btn btn-success w-100">Book Appointment</button>
                            </div>
                            <div class="col-md-2 col-sm-6 mb-2">
                            <input type="reset" value="Reset" name="reset" class="btn btn-danger w-100">
                            </div>
                        </div>
                    </form>

                    <?php showStudentAppointment(); ?>
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">

                            

                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Appointment</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>


                            <div class="modal-body">
                            
                                <form action="" method="post" class="row m-0 g-2 needs-validation" novalidate>

                                    <div class="row p-0 m-0 mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label mb-2" for="validationCustom01">Full Name</label>
                                            <input type="text" class="form-control" id="validationCustom01" value="<?php echo $_SESSION['fullname'] ?>" disabled required>
                                            <div class="invalid-feedback">
                                                Please check your input and input correct details.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-6 ">
                                            <label class="form-label mb-2" for="validationCustom02">Matric Number</label>
                                            <input type="number" class="form-control" id="validationCustom02" value="<?php echo $_SESSION['MatricNo'] ?>" disabled required>
                                            <div class="invalid-feedback">
                                                Please check your input and input correct details.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="row p-0 m-0 mb-3">
                                        <div class="col-md-4">
                                            <label class="form-label mb-2" for="validationCustom03">Select Doctor</label>
                                            <select class="form-select" id="validationCustom03" name="doctor" required>
                                            <option value="" disabled selected>Please Select</option>
                                            <option value="Doctor1">Doctor 1</option>
                                            <option value="Doctor2">Doctor 2</option>
                                            </select>
                                            
                                            <div class="invalid-feedback">
                                                Please check your input and input correct details.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label mb-2" for="validationCustom04">Appointment Date</label>
                                            <input type="date" class="form-control" id="validationCustom04" name="appointmentDate" required>
                                            <div class="invalid-feedback">
                                                Please check your input and input correct details.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label mb-2" for="validationCustom05">Appointment Time</label>
                                            <input type="time" class="form-control" id="validationCustom05" name="appointmentTime" required>
                                            <div class="invalid-feedback">
                                                Please check your input and input correct details.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        
                                    
                                    </div>

                                    <div class="row p-0 m-0 mb-3">
                                    <div class="col">
                                        <label class="form-label mb-2" for="validationCustom06">Appointment Note</label>
                                        <textarea class="form-control" id="validationCustom06" rows="4" placeholder="Please write some note" name="appointmentNote" required><?php 
                                                global $conn;
                                                $query =  mysqli_query($conn, "SELECT * FROM studentappointment WHERE MatricNo = '$_SESSION[MatricNo]'"); 
                                            
                                                if ($query === false){exit();}

                                                else{
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                        echo $AppointmentNote = $row['appointmentNote'];
                                                        }}
                                            ?></textarea>
                                        <div class="invalid-feedback">
                                            Please check your input and input correct details.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row p-0 m-0 mb-3">
                                        <div class="col-md-3 col-sm-6 mb-2">
                                            <button type="submit" name="updateAppointment" class="btn btn-primary w-100">Update Appointment</button>
                                        </div>

                                        <div class="col-md-2 col-sm-6 mb-2">
                                            <input type="reset" value="Reset" name="reset" class="btn btn-danger w-100">
                                        </div>
                                        
                                    </div>
                                
                                </form>
                        
                    
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
    <script src="../resources/js/datatables.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.needs-validation');
        const submitButton = form.querySelector('button[type="submit"]');
        const warningButton = document.getElementById('warning-button');

        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });

        form.addEventListener('input', function() {
            if (form.checkValidity()) {
                submitButton.disabled = false;
                warningButton.disabled = true;
            } else {
                submitButton.disabled = true;
                warningButton.disabled = false;
            }
        });
    });

        

        
        $('.delete-record').on('click', function(e){
    e.preventDefault();
    var href = $(this).attr('href'); // Capture the href attribute
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#157347",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.value){
            document.location.href = href; // Redirect to the captured href
        }
    });
});


    </script>
</body>
</html>