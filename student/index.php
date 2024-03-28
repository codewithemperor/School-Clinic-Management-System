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
            

            <div class="p-4">
                <div class="alert text-light bg-dark  " role="alert">
                    <p class="m-0 ">Your Health Care Number is <strong>2021/382/2919</strong></p>
                    <!-- <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                
                <div class="card">
                    <div class="card-boy">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Personal Data
                                </button>
                              </h3>
                              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <table class="table table-sm table-hover p-4">
                                    <tbody class="m-2 ">
                                        <?php showRecord() ?>
                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Name:</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['fullname'] ?></td>
                                        </tr>

                                        <tr class="mx-2 ">
                                            <td class="tiny col-md-2  "><strong>Matric Number</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['MatricNo'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Faculty</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['Faculty'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Department</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['Department'] ?></td>
                                        </tr>


                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Gender</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['Gender'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Date of Birth:</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['DOB'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Phone:</strong></td>
                                            <td class="tiny col-md-9  ">0<?php echo $_SESSION['PhoneNumber'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Email:</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['Email'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Address:</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['Address'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>State of Origin:</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['State'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Nationality:</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['Nationality'] ?></td>
                                        </tr>

                                        <tr>
                                            <td class="tiny col-md-2  "><strong>Marital Status:</strong></td>
                                            <td class="tiny col-md-9  "><?php echo $_SESSION['MaritalStatus'] ?></td>
                                        </tr>

                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Health Records
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" >
                                  <div class="accordion-body">

                                    <table class="table table-sm table-hover p-4">
                                        <tbody class="m-2">
                                            
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Height &#40;In Meters&#41;:</strong></td>
                                                <td class="tiny col-md-9  ">1.7m</td>
                                            </tr>
    
                                            <tr class="mx-2 ">
                                                <td class="tiny col-md-2  "><strong>Weight &#40;In Kilos&#41;:</strong></td>
                                                <td class="tiny col-md-9  ">60kilo</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Blood Group</strong></td>
                                                <td class="tiny col-md-9  ">AA</td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>HB Genotype:</strong></td>
                                                <td class="tiny col-md-9  ">O+</td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Visual Activity &#40;With Glass&#41;:</strong></td>
                                                <td class="tiny col-md-9  ">R.6/ - 4   L.6/ - 5 </td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Visual Activity &#40;Without Glass&#41;:</strong></td>
                                                <td class="tiny col-md-9  ">R.6/ - 4   L.6/ - 5 </td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Eyes:</strong></td>
                                                <td class="tiny col-md-9  ">Left - 4   Right - 5</td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Ears:</strong></td>
                                                <td class="tiny col-md-9  ">Left - 4   Right - 5</td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Pharynx:</strong></td>
                                                <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Teeth:</strong></td>
                                                <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Lymphatic Gland:</strong></td>
                                                <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                            </tr>
    
                                            <tr>
                                                <td class="tiny col-md-2  "><strong>C.N.S:</strong></td>
                                                <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Papillary Reflexes:</strong></td>
                                                <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Spinal Reflexes:</strong></td>
                                                <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Any other Observation:</strong></td>
                                                <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2 "><h6 class="mt-2"><strong>Circulatory System:</strong></h6></td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Heart:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Blood Pressure:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Respiratory System:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Lungs:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Abdomen:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Liver:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Spleen:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Hemia:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Urine &#40;Alb&#41;:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>

                                            <tr>
                                                <td class="tiny col-md-2  "><strong>Urine &#40;Sugar&#41;:</strong></td>
                                                <td class="tiny col-md-9  ">Normal</td>
                                            </tr>
    
                                        </tbody>

                                      </table>

                                  </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Medical Records
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <table class="table table-sm table-hover p-4">
                                          <tbody class="m-2 ">
                                              
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>How would you say your health was:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion1'] ?></td>
                                              </tr>
      
                                              <tr class="mx-2 ">
                                                  <td class="tiny col-md-2  "><strong>Is your family a health one?*</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion2'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Has any member of your family suffered from tuberculosis, insanity or mental disease?</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion3'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Have you ever been admitted as an in-patient into a hospital?</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion4'] ?></td>
                                              </tr>
      
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Have you ever visited any hospital for treatment?</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion5'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Tuberculosis:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion6'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Schistosomiosis:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion7'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Any Respiratory Disease:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion8'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Any Disease of the Digestive System:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion9'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Nervous Disease:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion10'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Any Disease of the Heart:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion11'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Any Disease of Genitourinary:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion12'] ?></td>
                                              </tr>
  
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Allergies:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion13'] ?></td>
                                              </tr>
                                                  
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Smallpox:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion14'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Tetanus:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion15'] ?></td>
                                              </tr>
      
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Yellow Fever:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion16'] ?></td>
                                              </tr>
  
                                              <tr>
                                                  <td class="tiny col-md-2  "><strong>Others:</strong></td>
                                                  <td class="tiny col-md-9  "><?php echo $_SESSION['healthQuestion17'] ?></td>
                                              </tr>
                                          </tbody>
                                        </table>
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
    <script src="../resources/js/datatables.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>