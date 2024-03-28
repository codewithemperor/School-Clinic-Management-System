<?php require_once '../include/functions.php'; 

if (!isset($_SESSION['fullname'])) {
  header("Location: ../index.php");
  exit();
}

elseif (!isset($_SESSION['RegistrationValue']) || $_SESSION['RegistrationValue'] == 1) {
  header("Location: index.php");
  exit();
}
else {
  echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/aope.ico" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/remixicon/remixicon.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>AOPE CLINIC MANAGEMENT SYSTEM - HOME</title>
</head>
<body>
    <div class="container-fluid background ">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="my-4 container bg-light-subtle bg-opacity-50 glassporphism px-0 ">
                
                <div class=" bg-success p-3 d-md-flex justify-content-between d-sm-block ">
                <span class="head-text text-light" style="font-size: 1.2rem;"> Welcome, Register to Proceed</span>
                <form action="" method="post"> 
                  <?php logout(); ?> 
                  <input class="btn btn-danger px-4" type="submit" value="Logout" name="logout">
                </form>
              </div>

              <?php addOtherStudentRecord (); ?>
                <form action="" method="post" class="stuReg" enctype="multipart/form-data">
                  <div id="carouselExample" class="carousel slide wrap">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="bg-body d-flex p-3" id="firstForm">
                          <div class="col-md-8  col-sm-12  p-3">
                            <div class="row mb-2">

                            <div class="col-md-6 mb-2">
                                <label class="form-label mb-1" for="studentMatricNo">Matric Number*</label>
                                <input type="number" class="form-control" name="studentMatricNo" value="<?php echo $_SESSION['MatricNo']; ?>" disabled  required>
                              </div>

                              <div class="col-md-6 mb-2">
                                <label class="form-label mb-1" for="regFullName">Full Name*</label>
                                <input type="text" class="form-control" id="regFullName" value="<?php echo $_SESSION['fullname']; ?>" disabled  required>
                              </div>
    
                            </div>
    
                            <div class="row mb-2">
                              <div class="col-md-4 mb-2">
                                <label class="form-label mb-1" for="faculty">Faculty*</label>
                                <select name="regfaculty" class="form-select" required onchange="updateDepartments(this.value)">
                                    <option value="" disabled selected>Select an option...</option>
                                    <option value="Faculty of Communication and Management Studies">FACMAS</option>
                                    <option value="Faculty of Engineering">Engineering</option>
                                    <option value="Faculty of Environmental Studies">Environmental Studies</option>
                                    <option value="Faculty of Science">Science</option>
                                </select>
                            </div>
                              
                            <div class="col-md-4 mb-2">
                              <label class="form-label mb-1" for="department">Department*</label>
                              <select class="form-control" name="regDepartment" required id="departmentSelect">
                              </select>
                            </div>
    
                              <div class="col-md-4 mb-2">
                                <label class="form-label mb-1" for="programme">Programme*</label>
                                <select  name="regProgramme" class="form-select" required>
                                  <option value="" disabled selected>Select an option...</option>
                                  <option value="ND" class="">ND</option>
                                  <option value="NDDPT" class="">NDDPT</option>
                                  <option value="NDPT" class="">ND - Part Time</option>
                                  <option value="HND" class="">HND</option>
                                  <option value="HNDPT" class="">HND - Part Time</option>
                                </select>
                              </div>
    
                            </div>
    
                            <div class="row mb-2">
                              <div class="col-md-4 mb-2">
                                <label class="form-label mb-1" for="validationCustom01">Home Address*</label>
                                <input type="text" class="form-control" name="redAddress" required>
                              </div>

                              <div class="col-md-4 mb-2">
                                <label class="form-label mb-1" for="validationCustom01">State of Origin*</label>
                                <input type="text" class="form-control" name="regState" required>
                              </div>
    
                              <div class="col-md-4 mb-2">
                                <label class="form-label mb-1" for="validationCustom01">Nationality*</label>
                                <input type="text" class="form-control" name="regNationality" required>
                              </div>
    
                            </div>
    
                            <div class="row mb-2">
                              <div class="col-md-4 mb-2">
                                  <label class="form-label mb-1" for="validationCustom01">Date of Birth*</label>
                                  <input type="date" class="form-control" name="regDOB" required>
                                </div>
    
                                <div class="col-md-4 col-6 mb-2">
                                  <label class="form-label mb-1" for="validationCustom01">Gender*</label>
                                  <select name="regGender" class="form-select" required>
                                  <option value="" disabled selected>Select an option...</option>
                                    <option value="Male" class="">Male</option>
                                    <option value="Female" class="">Female</option>
                                  </select>
                                </div>
      
                                <div class="col-md-4 col-6 mb-2">
                                  <label class="form-label mb-1" name="regMarital">Marital Status*</label>
                                  <select name="regMarital" id="" class="form-select" required>
                                  <option value="" disabled selected>Select an option...</option>
                                    <option value="Single" class="">Single</option>
                                    <option value="Married" class="">Married</option>
                                    <option value="Divorced" class="">Divorced</option>
                                  </select>
                              </div>
                            </div>
    
                            <div class="row mb-2">
                              <div class="col-4 mb-3">
                                <button class="btn btn-success px-4" type="button" data-bs-target="#carouselExample" data-bs-slide="next">Next</button>
                              </div>
                            </div>
    
                          </div>
    
                          <div class="col-4 p-1 d-md-flex align-items-center d-none ">
                              <img src="../assets/img/7768657_3763026.svg" alt="" class="">
                          </div>
                        </div>
                      </div>
  
  
                      <div class="carousel-item">
                        <div class="bg-body d-flex p-3 " id="secondForm">
      
                          <div class="col-4 p-1 d-md-flex align-items-center d-none ">
                            <img src="../assets/img/create_account.jpg" alt="" class="img-fluid">
                          </div>
      
                          <div class="col-md-8  col-sm-12  p-3">
                            <div class="row mb-2">
                              <div class="col-md-6 mb-2">
                                <label class="form-label mb-1" for="=">How would you say your health was*</label>
                                <select name="healthQuestion1" id="" class="form-select" required>
                                <option value="" disabled selected>Select an option...</option>
                                  <option value="Good" class="">Good</option>
                                  <option value="Fair" class="">Fair</option>
                                  <option value="Poor" class="">Poor</option>
                                </select>
                              </div>
      
                              <div class="col-md-6 mb-2">
                                <label class="form-label mb-1" for="validationCustom01">Is your family a health one?*</label>
                                <select name="healthQuestion2" id="" class="form-select" required>
                                <option value="" disabled selected>Select an option...</option>
                                  <option value="Yes" class="">Yes</option>
                                  <option value="No" class="">No</option>
                                </select>
                              </div>
      
                            </div>
      
                            <div class="row mb-3">
                              <div class="col-12 mb-2">
                                <label class="form-label mb-1" for="validationCustom01">Has any member of your family suffered from tuberculosis, insanity or mental disease? *</label>
                                  <div class="d-flex row ps-2">
                                    <div class="form-check col-6 col-md  mx-md-">
                                      <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Tuberculosis" id="Tuberculosis">
                                      <label for="form-check" for="Tuberculosis">Tuberculosis</label>
                                    </div>
                                    <div class="form-check col-6 col-md  mx-md-">
                                      <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Insanity" id="Insanity">
                                      <label for="form-check" for="Insanity">Insanity</label>
                                    </div> 
                                    <div class="form-check col-6 col-md  mx-md-">
                                      <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Mental Disease" id="MentalDIsease">
                                      <label for="form-check" for="MentalDisease">Mental DIsease</label>
                                    </div>
                                    <div class="form-check col-6 col-md  mx-md-">
                                      <input type="checkbox" class="form-check-input" name="checkboxes[]" value="None" id="None">
                                      <label for="form-check" for="None">None</label>
                                    </div>
                                  </div>
                              </div>
                            </div>
      
                            <div class="row mb-3">
                              <div class="col-12 mb-2 d-flex">
                                <label class="form-label mb-1 col-8 align-self-center" for="hospitalAdmission_1">Have you ever been admitted as an in-patient into a hospital?*</label>
                                <select name="hospitalAdmission_1" class="form-select col" onchange="toggleInput(this)" required>
                                  <option value="" disabled selected>Select an option...</option>
                                  <option value="Yes" class="">Yes</option>
                                  <option value="No" class="">No</option>
                                </select>
                              </div>
                          
                              <div class="col">
                                <input type="text" class="form-control toggle-input" name="admissionReason_1" placeholder="State the reason" required>
                              </div>
      
                            </div>
      
                            <div class="row mb-3">
                              <div class="col-12 mb-2 d-flex">
                                <label class="form-label mb-1 col-8 align-self-center" for="hospitalAdmission_2">Have you ever visited any hospital for treatment?*</label>
                                <select name="hospitalAdmission_2" class="form-select col"  onchange="toggleInput(this)" required>
                                  <option value="" disabled selected>Select an option...</option>
                                  <option value="Yes" class="">Yes</option>
                                  <option value="No" class="">No</option>
                                </select>
                              </div>
      
                              <div class="col">
                              <input type="text" class="form-control toggle-input" name="admissionReason_2" placeholder="State the purpose of visit" required>
                              </div>
                            </div>
  
                            <div class="row mb-2 d-flex justify-content-between"  >
                              <div class="col-4 mb-3">
                                <button class="btn btn-secondary px-4" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">Previous</button>
                              </div>
                              <div class="col-4 mb-3 d-flex justify-content-end ">
                                <button class="btn btn-success px-4" type="button" data-bs-target="#carouselExample" data-bs-slide="next">Next</button>
                              </div>
                            </div>
      
                          </div>
      
                          </div>
                      </div>
  

                      <!-- New Carousel Here -->
  
                      <div class="carousel-item">
                        <div class="bg-body d-flex p-3" id="thirdForm">
                          <div class="col-md-8 col-sm-12  p-3">
                            <h5 class="mb-4">Do you suffer from or have you suffered from any of the followings</h5>
                            
                            <div class="row">
  
                              <div class="col-sm-12 col-md-6">
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_3">Tuberculosis*</label>
                                    <select name="hospitalAdmission_3" class="form-select col" onchange="toggleInput(this)"  required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_3" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_4">Schistosomiosis*</label>
                                    <select name="hospitalAdmission_4" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_4" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_5">Any Respiratory Disease*</label>
                                    <select name="hospitalAdmission_5" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_5" placeholder=" please give details with date" required>
                                  </div>
                                  
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 col-9 align-self-center" for="hospitalAdmission_6">Any Disease of the Digestive System*</label>
                                    <select name="hospitalAdmission_6" class="form-select  col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_6" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
                              </div>
  
                              <div class="col-sm-12 col-md-6">
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_7">Nervous Disease*</label>
                                    <select name="hospitalAdmission_7" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="" >No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_7" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_8">Any Disease of the Heart*</label>
                                    <select name="hospitalAdmission_8" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_8" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_9">Any Disease of Genitourinary*</label>
                                    <select name="hospitalAdmission_9" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_9" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-12 mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_10">Allergies*</label>
                                    <select name="hospitalAdmission_10" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="text" class="form-control toggle-input" name="admissionReason_10" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
                              </div>
  
                            </div>
    
                            <div class="row mb-2 d-flex justify-content-between"  >
                              <div class="col-4 mb-3">
                                <button class="btn btn-secondary px-4" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">Previous</button>
                              </div>
                              <div class="col-4 mb-3 d-flex justify-content-end">
                                <button class="btn btn-success px-4 " type="button" data-bs-target="#carouselExample" data-bs-slide="next">Next</button>
                              </div>
                            </div>
    
                          </div>
    
                          <div class="col-4 p-1 d-md-flex align-items-center d-none">
                            <img src="../assets/img/7118240_3343992.svg" alt="" class="object-fit-fill">
                          </div>
  
                        </div>
                      </div>

                      <!-- New Carousel Here -->
  
                      <div class="carousel-item">
                        <div class="bg-body d-flex p-3 flex-row-reverse" id="forthForm">
                          <div class="col-md-8 col-sm-12  p-3">
                            <h5 class="mb-4">Have you been immunized against any of the followings</h5>
                            
                            <div class="">
  
                              <!-- <div class="col"> -->
                                <div class="row mb-3">
                                  <div class="col-sm-12  col-md mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_11">Smallpox*</label>
                                    <select name="hospitalAdmission_11" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="date" class="form-control toggle-input" name="admissionReason_11" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-sm-12  col-md mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_12">Tetanus*</label>
                                    <select name="hospitalAdmission_12" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="date" class="form-control toggle-input" name="admissionReason_12" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                              <!-- </div> -->
  
                              <!-- <div class="col"> -->
                                <div class="row mb-3">
                                  <div class="col-sm-12  col-md mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_13">Yellow Fever*</label>
                                    <select name="hospitalAdmission_13" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="" >No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="date" class="form-control toggle-input" name="admissionReason_13" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-3">
                                  <div class="col-sm-12  col-md mb-2 d-flex">
                                    <label class="form-label mb-1 me-2 align-self-center" for="hospitalAdmission_14">Other*</label>
                                    <select name="hospitalAdmission_14" class="form-select col" onchange="toggleInput(this)" required>
                                      <option value="" disabled selected>Select an option...</option>
                                      <option value="Yes" class="">Yes</option>
                                      <option value="No" class="">No</option>
                                    </select>
                                  </div>
                              
                                  <div class="col">
                                    <input type="date" class="form-control toggle-input" name="admissionReason_14" placeholder=" please give details with date" required>
                                  </div>
          
                                </div>
  
                                <div class="row mb-4">
                                  <label for="formFile" class="form-label">Upload your passport</label>
                                  <input class="form-control" type="file" name="formFile"  required>
                                </div>
  
                               
                              <!-- </div> -->
  
                            </div>
    
                            <div class="row mb-2 d-flex justify-content-between"  >
                              <div class="col-4 mb-3">
                                <button class="btn btn-danger px-4" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">Previous</button>
                              </div>
                              <div class="col-4 mb-3 d-flex justify-content-end">
                                <input class="btn btn-success px-4" type="submit" value="Submit" name="addOtherRecord">
                              </div>
                            </div>
    
                          </div>
    
                          <div class="col-4 p-1 d-md-flex align-items-center d-none">
                            <img src="../assets/img/7118240_3343992.svg" alt="" class="object-fit-fill">
                          </div>
  
                        </div>
                      </div>
  
                    </div>
  
                   
                  </div>
                </form>

                
              </div>
                
            </div>
        </div>
        
    </div>
  
    <script>
      function updateDepartments(selectedFaculty) {
          var departmentSelect = document.getElementById('departmentSelect');
          departmentSelect.innerHTML = ' <option value="" disabled selected>Select an option...</option>'; // Clear existing options

          var departments = [];

          switch (selectedFaculty) {
              case 'Faculty of Communication and Management Studies':
                  departments = ['Mass Communication', 'Bussiness Administration', 'Public Administration', 'Accountancy', 'Marketing', 'OTM', 'Purchasing & Supply'];
                  break;
              case 'Faculty of Engineering':
                  departments = ['Computer Eng', 'Elect & Electronic Engineerng', 'Mechanical Engineering', 'Civil Engineering'];
                  break;
              case 'Faculty of Environmental Studies':
                  departments = ['Fashion', 'Estate Management', 'Art & Design', 'Architectural Design'];
                  break;
              case 'Faculty of Science':
                  departments = ['Computer Science', 'Mathematics & Statistics', 'LIS', 'SLT', 'Microbiology', 'Biochemistry'];
                  break;
              default:
                  break;
          }

          // Add new options to the department dropdown
          for (var i = 0; i < departments.length; i++) {
              var option = document.createElement('option');
              option.value = departments[i];
              option.text = departments[i];
              departmentSelect.add(option);
          }
      }
  </script>
    <script src="../resources/js/jquery.js"></script>
    <script src="../resources/js/popper.js"></script>
    <script src="../resources/js/sweetalert.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>