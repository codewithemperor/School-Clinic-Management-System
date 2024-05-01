<?php require_once 'db.php'; 

// ****************************************************************************************
// ************************************* Student  Code ************************************
// ****************************************************************************************

// ******************
// Student Login
// ******************
function studentlogin () {
    global $conn;

    if (isset($_POST['stulogin'])) {

        $loginmatric = $_POST['loginmatric'];
        $loginpass = $_POST['loginpass'];

        $query = mysqli_query($conn, "SELECT * FROM studentdata WHERE MatricNo = '$loginmatric'");

        // $num_rows = mysql_num_rows($query);

        if ($query !== false) {
            // Check if the query returned any rows
            if (mysqli_num_rows($query) > 0) {
                // Fetch an associative array
                
                $row = mysqli_fetch_assoc($query);

                // Use the data in $row
                // ...

                // Free the result set
                mysqli_free_result($query);

                $db_fullName = $row['FullName'];
                $db_matric = $row['MatricNo'];
                $db_password = $row['StuPassword'];
                $db_phone = $row['PhoneNumber'];
                $db_email = $row['Email'];
                $db_registrationValue = $row['RegistrationValue'];
                $db_image = $row['Image'];

                $_SESSION['fullname'] = $db_fullName;
                $_SESSION['MatricNo'] = $db_matric;
                $_SESSION['PhoneNumber'] = $db_phone;
                $_SESSION['Email'] = $db_email;
                $_SESSION['Image'] = $db_image;
                $_SESSION['RegistrationValue'] = $db_registrationValue;

                if (($loginmatric == $db_matric && $loginpass == $db_password) && $db_registrationValue == 0) {
                    header("Location: student/student_registration.php");
                    exit(); // Ensure no further code execution after redirection
                } elseif (($loginmatric == $db_matric && $loginpass == $db_password) && $db_registrationValue == 1) {
                    header("Location: student/");
                    exit(); // Ensure no further code execution after redirection
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Wrong Matric No or Password</div>";
                }
            } else {
                echo "<div class='alert alert-danger' role='alert'>
                <span>No such user found. Create a new Account</span>
                <a href='student/create_account.php'>here</a> </div>";
            }
        } else {
            // Log the error instead of showing it directly to the user
            error_log("MySQL Error: " . mysqli_error($conn));
            echo "<div class='alert alert-danger' role='alert'>An unexpected error occurred. Please try again later.</div>";
        }
        
    }

}



// ******************
// Add student_registration.php to database
// ******************

function addStudent() {
    global $conn;
    
    if (isset($_POST['studentRegister'])) {
        $stufullname = $_POST['studentFullName'];
        $stuMatricNo = $_POST['studentMatricNo'];
        $stuPhoneno = $_POST['studentPhoneNo'];
        $stuEmail = filter_var($_POST['studentEmail'], FILTER_VALIDATE_EMAIL) ;
        $stuPass = $_POST['studentPassword'];
        $stuconPass = $_POST['studentConfPassword'];
      

        $query = "INSERT INTO studentdata (MatricNo, FullName, PhoneNumber, Email, StuPassword, RegistrationValue) VALUES('$stuMatricNo', '$stufullname', '$stuPhoneno', '$stuEmail', '$stuPass', 0)";
        
        $userQuery = mysqli_query($conn, "SELECT * FROM studentdata WHERE MatricNo = '$stuMatricNo'");
        $num_rows = mysqli_num_rows($userQuery);

        if ($num_rows == 1) {
            
            while( $row = mysqli_fetch_assoc($userQuery)) {
                echo "<div class= 'alert alert-danger' role='alert'>Matric Number Already in use</div>";
            }
        }

        
        if (strlen($stuPass) <= 5)  {
            echo '<div class="alert text-light bg-danger " role="alert">';
             echo '<span class="m-0 ">Password must be more than 5 </span>';
            echo '<button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }

        if ($stuPass !== $stuconPass) {
            echo '<div class="alert text-light bg-danger " role="alert">';
            echo '<span class="m-0 ">Confirm Password is not equal to Password</span>';
            echo '<button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        
        if (strlen($stuMatricNo) != 10)  {
            echo '<div class="alert text-light bg-danger " role="alert">';
             echo '<span class="m-0 ">Matric Number must be 10 </span>';
            echo '<button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }

        

        else {
            $run = mysqli_query($conn, $query);
            if ($run) {
                echo "<div class= 'alert alert-success' role='alert'>Regisration Complete</div>";
                header("Refresh: 2; ../../index.php");
            }

            else {
                echo "<div class= 'alert alert-danger' role='alert'>Regisration not Complete</div>";
            }
        }
    
    }

}


// ******************
// Add the remaining data from student_registration.php to database
// ******************

function addOtherStudentRecord (){

    global $conn;

    if (isset($_POST['addOtherRecord'])) {
        
        // $stuMatricNo = $_POST['studentMatricNo'];
        $stuMatricNo = $_SESSION['MatricNo'];
        $healthCareNo = 1;
        $faculty = $_POST['regfaculty'];
        $department = $_POST['regDepartment'];
        $programme = $_POST['regProgramme'];
        $address = $_POST['redAddress'];
        $stateOfOrigin = $_POST['regState'];
        $nationality = $_POST['regNationality'];
        $DOB = $_POST['regDOB'];
        $gender = $_POST['regGender'];
        $marital = $_POST['regMarital'];


        $healthQuestion1 = $_POST['healthQuestion1'];
        $healthQuestion2 = $_POST['healthQuestion2'];

        // checkbox code
        $healthQuestion3 = "";
        if (isset($_POST['checkboxes'])) {
            foreach ($_POST['checkboxes'] as $selectedCheckbox) {
                $healthQuestion3 .= $selectedCheckbox . ",";
            }
        }

        for ($i = 1; $i <= 14; $i++) {
            
            $healthAdmissionQuestion = array();
            $hospitalAdmission = isset($_POST['hospitalAdmission_' . $i]) ? $_POST['hospitalAdmission_' . $i] : '';
            $admissionReason = isset($_POST['admissionReason_' . $i]) ? $_POST['admissionReason_' . $i] : '';
        
        
            
            if ( $admissionReason == "" ) {
                
                $healthAdmissionQuestion = $hospitalAdmission . $admissionReason;
            } else {
                $healthAdmissionQuestion = $hospitalAdmission . " (" . $admissionReason . ")";
            }

            $healthAdmissionQuestions[] = $healthAdmissionQuestion;
            
        }

        list($value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9, $value10, $value11, $value12, $value13, $value14) = $healthAdmissionQuestions;
        
        
        if (isset($_FILES["formFile"]) && $_FILES["formFile"]["error"] == UPLOAD_ERR_OK) {
            $targetDir = "upload/"; // Change this to the directory where you want to save the uploaded files
        
            // Get the file name
            $originalFileName = basename($_FILES["formFile"]["name"]);
            $fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
            $fileNameWithoutExtension = pathinfo($originalFileName, PATHINFO_FILENAME);
        
            // Check if the file already exists
            $i = 1;
            $fileName = $originalFileName;
            while (file_exists($targetDir . $fileName)) {
                // If the file exists, append a number to the filename
                $fileName = $fileNameWithoutExtension . "_" . $i . "." . $fileExtension;
                $i++;
            }
        
            // Check if the uploaded file is an image
            $allowedExtensions = array("jpg", "jpeg", "png", "gif");
            if (in_array($fileExtension, $allowedExtensions)) {
                // Move the uploaded file to the target directory
                $targetFilePath = $targetDir . $fileName;
                move_uploaded_file($_FILES["formFile"]["tmp_name"], $targetFilePath);
        
                // Your database query
                $query = "INSERT INTO studenthealth(MatricNo, HealthCareNo, Faculty, Department, Programme, Address, State, Nationality, DOB, Gender, MaritalStatus, healthQuestion1, healthQuestion2, healthQuestion3, healthQuestion4, healthQuestion5, healthQuestion6, healthQuestion7, healthQuestion8, healthQuestion9, healthQuestion10, healthQuestion11, healthQuestion12, healthQuestion13, healthQuestion14, healthQuestion15, healthQuestion16, healthQuestion17, Image, Uploaded) VALUES ('$stuMatricNo', '$healthCareNo', '$faculty', '$department', '$programme', '$address', '$stateOfOrigin', '$nationality', '$DOB', '$gender', '$marital', '$healthQuestion1', '$healthQuestion2', '$healthQuestion3', '$value1', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8', '$value9', '$value10', '$value11', '$value12', '$value13', '$value14', '$fileName', NOW())";
        
                // Execute the database query
                $run = mysqli_query($conn, $query);

                if ($run) {
                    // Update Registration value to 1 for the MatricNo in studentdata table
                    
                    $updateQuery = "UPDATE studentdata SET RegistrationValue = 1 WHERE MatricNo = '$stuMatricNo'";
                    $updateResult = mysqli_query($conn, $updateQuery);

                    if ($updateResult) {
                        echo "<div class='alert alert-success' role='alert'>Registration Successful</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Error updating Registration value: " . mysqli_error($conn) . "</div>";
                    }
                }
    
        
                // Display success message
                echo "<div class= 'alert alert-success' role='alert'>Registration Successful</div>";
                $_SESSION['RegistrationValue'] = 1;
                header("Refresh: 2; index.php");
            } else {
                // Display error message if the file is not an image
                echo "<div class='alert alert-danger' role='alert'>Invalid file format. Please upload an image.</div>";
            }
        } else {
            // Display error message for file upload error
            echo "<div class='alert alert-danger' role='alert'>Registration not Complete</div>";
        }      

    }
}



// ******************
// Show Student Personal Records + Medical Records
// ******************
function showRecord() {

    global $conn;

    $session_matric = $_SESSION['MatricNo'];

        $query = mysqli_query($conn, "SELECT * FROM studenthealth WHERE MatricNo = '$session_matric'");

        // $num_rows = mysql_num_rows($query);

        if ($query !== false) {
        // Check if the query returned any rows
            if (mysqli_num_rows($query) > 0) {
                // Fetch an associative array
                $row = mysqli_fetch_assoc($query);

                // Use the data in $row
                foreach ($row as $columnName => $columnValue) {
                    //Store each column value in a session variable
                    $_SESSION[$columnName] = $columnValue;
                }

                // Free the result set
                mysqli_free_result($query);
            }
    }
}

// ******************
// Add Student Appointment booked to database
// ******************
function StudentAppointment() {
    global $conn;

    if (isset($_POST["bookappointment"])) {
        $studentFullName = $_SESSION['fullname'];
        $studentMatricNo = $_SESSION['MatricNo'];
        $doctorName = $_POST["doctor"];
        $appointmentDate = $_POST["appointmentDate"];
        $appointmentTime = $_POST["appointmentTime"];
        $appointmentNote = $_POST["appointmentNote"];

        $query = "INSERT INTO studentappointment (FullName, MatricNo, DoctorName, Date, Time, appointmentNote) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssss", $studentFullName, $studentMatricNo, $doctorName, $appointmentDate, $appointmentTime, $appointmentNote);

        $userQuery = mysqli_query($conn, "SELECT * FROM studentappointment WHERE MatricNo = '$studentMatricNo'");
        $num_rows = mysqli_num_rows($userQuery);

        if ($num_rows == 1) {
            echo "<div class='alert alert-danger' role='alert'>You can't book more than one Appointment at a time. You can simply edit your appointment</div>";
        } else {
            $stmt->execute(); // Execute the prepared statement
            if ($stmt->affected_rows > 0) {
                echo "<div class='alert alert-success' role='alert'>Appointment Booked</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error booking appointment</div>";
            }
        }
        // Close the prepared statement
        $stmt->close();
    }
}



// ******************
// Show Appointment booked by Student
// ******************
function showStudentAppointment() {
    global $conn;

    $query =  mysqli_query($conn, "SELECT * FROM studentappointment WHERE MatricNo = '$_SESSION[MatricNo]'"); 

    if ($query === false){
        echo "";
        exit();
    }
    else{
        // Iterate through all rows in the result set
        while ($row = mysqli_fetch_assoc($query)) {
            $fullName= $row['FullName'];
            $MatricNo = $row['MatricNo'];
            $DoctorName = $row['DoctorName'];
            $Date = $row['Date'];
            $Time = $row['Time'];
            $AppointmentNote = $row['appointmentNote'];
            
            echo '<div class="mt-4 px-2">';
            echo '<table class="table table-hover" id="example">';
            echo '<thead class="table-dark">';
            echo '<tr class="align-middle">';                    
            echo '<th class="py-3">FullName</th>';
            echo '<th class="py-3">Matric No</th>';
            echo '<th class="py-3">Doctor Name</th>';
            echo '<th class="py-3">Date</th>';
            echo '<th class="py-3">Time</th>';
            echo '<th class="py-3">Note</th>';
            echo '<th class="py-3 text-center ">ACTION</th>';
            echo '</tr>';
            echo '</thead>';                        
            echo "<tr class='align-middle'>";
            echo "<td>{$fullName}</td>";
            echo "<td>{$MatricNo}</td>";
            echo "<td>{$DoctorName}</td>";
            echo "<td>{$Date}</td>";
            echo "<td>{$Time}</td>";
            echo "<td>{$AppointmentNote}</td>";
            echo "<td class='d-flex  '>";
            echo "<a href='' class='col p-1 btn bg-primary me-1'><i class='ri-edit-2-fill'></i></a>";
            echo "<a href='../include/delete.php?id={$row['MatricNo']}' class='col p-1 btn bg-danger text-white me-1 delete-record'><i class='ri-delete-bin-5-fill'></i></a>";
            echo "</td>";
            echo "</tr>";

            echo "</table>";
            echo "</div>";
        }
    
}
}



// ****************************************************************************************
// *********************************** Admin  Code ****************************************
// ****************************************************************************************
function showRecordTable() {
    global $conn;

    $query = mysqli_query($conn, 'SELECT studenthealth.*, studentdata.* FROM studenthealth JOIN studentdata ON studenthealth.MatricNo = studentdata.MatricNo');


    // Check if the query was successful
    if ($query !== false) {
        // Iterate through all rows in the result set
        $counter = 1;
        while ($row = mysqli_fetch_assoc($query)) {
            $fullName= $row['FullName'];
            $HealthCareNo = $row['HealthCareNo'];
            
            $MatricNo = $row['MatricNo'];
            $department = $row['Department'];
            $programme = $row['Programme'];
            $PhoneNo = $row['PhoneNumber'];
            
            echo "<tr class='align-middle'>";
            echo "<td>{$counter}</td>";
            echo "<td>{$fullName}</td>";
            echo "<td>{$HealthCareNo}</td>";
            echo "<td>{$MatricNo}</td>";
            echo "<td>{$PhoneNo}</td>";
            echo "<td>{$programme}</td>";
            echo "<td>{$department}</td>";
            echo "<td class='d-flex  '>";
            echo "<a href='' class='col p-1 btn bg-secondary me-1'><i class='ri-eye-fill'></i></a>";
            echo "<a href='' class='col p-1 btn bg-primary me-1'><i class='ri-edit-2-fill'></i></a>";
            echo "<a href='?delete' class='col p-1 btn bg-danger text-white me-1'><i class='ri-delete-bin-5-fill'></i></a>";
            echo "</td>";
            echo "</tr>";
        }

        // Free the result set
        mysqli_free_result($query);
    } else {
        // Handle the case where the query fails
        echo "Error executing query: " . mysqli_error($conn);
    }
}



// Logout function
function logout() {
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location: ../index.php");
    }
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
}

?>