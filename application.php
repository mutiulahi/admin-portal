<?php
  include 'islogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Application form | AUAS
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="dashboard.php">
        Dashboard
      </a>
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" style="float: right;" href="include/logout.php">
        Logout
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
     
    </div>
  </nav>
  <!-- End Navbar -->
  <section class="min-vh-100 mb-8">
    
    <div class="page-header align-items-start min-vh-25 pt-2 pb-5 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h3 class="text-white mb-2 mt-5">Welcome to Application Form</h3>
            <p class="text-lead text-white"> <?php echo $name;?> <br> <?php echo $email;?> <br> <?php echo $app_id;?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mt-lg-n6 mt-md-n11 mt-n3">
        <div class="col-xl-12 col-lg-12 col-md-12 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Application Form</h5>
              <!-- <p>Your Email Details</p> -->
            </div>  
            <div class="card-body">
              <form role="form text-left" action="include/register_code.php" method="post" enctype="multipart/form-data">
                <div class="row">
                  <h5 for="">Application Info</h5><br><br>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <input required type="text" class="form-control" name="FirstChoiceCourse" placeholder="First course of chioce">
                    </div>
                    <div class="mb-3">
                      <input required type="text" class="form-control" name="jamb_reg_num" placeholder="Jamb registration number">
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                        <input required type="text" class="form-control" name="SecondChoiceCourse" placeholder="Second course of chioce">
                      </div>
                      <div class="mb-3">
                        <input required type="number" class="form-control" name="score" placeholder="Jamb Score / DE Score">
                      </div>
                      <div class="mb-3">
                       <label for=""> Jamb <input required type="radio" value="jamb" class="select-control" name="jamb_type" ></label>
                       <label for=""> DE <input required type="radio" value="DE" class="select-control" name="jamb_type" ></label>
                      </div> 
                  </div>
                </div>
                <div class="row mb-4">
                  <h5>Next of Kin Info</h5><br><br>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <input required type="text" class="form-control" name="next_kin_name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                      <input required type="email" class="form-control" name="next_kin_email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                        <input required type="text" class="form-control" name="next_kin_phone" placeholder="Phone">
                      </div>
                      <div class="mb-3">
                        <input required type="address" class="form-control" name="next_kin_address" placeholder="Address">
                      </div> 
                  </div>
                </div>

                <div class="row mb-4">
                  <h5>Parent / Guardaince Info</h5><br><br>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <input required type="text" class="form-control" name="parent_name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                      <input required type="email" class="form-control" name="parent_email" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                        <input required type="text" class="form-control" name="parent_phone" placeholder="Phone">
                      </div>
                      <div class="mb-3">
                        <input required type="address" class="form-control" name="parent_address" placeholder="Address">
                      </div> 
                  </div>
                </div>

                <div class="row mb-3">
                  <h5 style="text-align: center;" >O LEVEL</h5>
                  <p style="text-align: center;">If your number of sitting is <code> <b>2</b> </code>select the subject from to result </p><br><br>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <input required type="text" class="form-control" name="exam_type" placeholder="Examination type">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <input required type="number" class="form-control" min="1" max="2" name="sitting" placeholder="Number of sitting">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                        <div class="mb-3">        
                          <select class="form-control" name="firstSubject" id="">
                            <option value="English Language">English Language</option>
                          </select>
                        </div>  


                          <div class="mb-3">
                          <select class="form-control" name="secondSubject" id="">
                            <option value="Mathmatics">Mathmatics</option>
                          </select>
                        </div>  


                          <div class="mb-3">
                          <select class="form-control" name="thirdSubject" id="">
                            <option value="">Select Subject</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Agriculture Science">Agriculture Science</option>
                            <option value="Animal Husbandry">Animal Husbandry </option>
                            <option value="Arabic Language">Arabic Language</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Commerce">Civic Education</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Christian Religious Knowledge">Christian Religious Knowledge </option>
                            <option value="Data Processing">Data Processing </option>
                                            
                            <option value="Design and Technology">Design and Technology</option>
                            <option value="Economics">Economics</option>
                            <option value="Environment Management">Environment Management</option>
                            <option value="French">French</option>
                            <option value="Food and Nutrition">Food and Nutrition</option>
                            <option value="Fashion and Textiles">Fashion and Textiles</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Islamic Religious Studies">Islamic Religious Studies</option>
                            <option value="Litrature in English">Litrature in English</option>
                            <option value="Marketting">Marketting</option>
                            <option value="Physics">Physics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Yoruba">Yoruba</option>
                          </select>
                        </div>  



                          <div class="mb-3">
                          <select class="form-control" name="fourthSubject" id="">
                            <option value="">Select Subject</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Agriculture Science">Agriculture Science</option>
                            <option value="Animal Husbandry">Animal Husbandry </option>
                            <option value="Arabic Language">Arabic Language</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Commerce">Civic Education</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Christian Religious Knowledge">Christian Religious Knowledge </option>
                            <option value="Data Processing">Data Processing </option>
                                            
                            <option value="Design and Technology">Design and Technology</option>
                            <option value="Economics">Economics</option>
                            <option value="Environment Management">Environment Management</option>
                            <option value="French">French</option>
                            <option value="Food and Nutrition">Food and Nutrition</option>
                            <option value="Fashion and Textiles">Fashion and Textiles</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Islamic Religious Studies">Islamic Religious Studies</option>
                            <option value="Litrature in English">Litrature in English</option>
                            <option value="Marketting">Marketting</option>
                            <option value="Physics">Physics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Yoruba">Yoruba</option>
                          </select>
                        </div>  
                          <div class="mb-3">
                          <select class="form-control" name="fifthSubject" id="">
                            <option value="">Select Subject</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Agriculture Science">Agriculture Science</option>
                            <option value="Animal Husbandry">Animal Husbandry </option>
                            <option value="Arabic Language">Arabic Language</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Commerce">Civic Education</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Christian Religious Knowledge">Christian Religious Knowledge </option>
                            <option value="Data Processing">Data Processing </option>
                                            
                            <option value="Design and Technology">Design and Technology</option>
                            <option value="Economics">Economics</option>
                            <option value="Environment Management">Environment Management</option>
                            <option value="French">French</option>
                            <option value="Food and Nutrition">Food and Nutrition</option>
                            <option value="Fashion and Textiles">Fashion and Textiles</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Islamic Religious Studies">Islamic Religious Studies</option>
                            <option value="Litrature in English">Litrature in English</option>
                            <option value="Marketting">Marketting</option>
                            <option value="Physics">Physics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Yoruba">Yoruba</option>
                          </select>
                        </div>  



                          <div class="mb-3">
                          <select class="form-control" name="sixthSubject" id="">
                            <option value="">Select Subject</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Agriculture Science">Agriculture Science</option>
                            <option value="Animal Husbandry">Animal Husbandry </option>
                            <option value="Arabic Language">Arabic Language</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Commerce">Civic Education</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Christian Religious Knowledge">Christian Religious Knowledge </option>
                            <option value="Data Processing">Data Processing </option>
                                            
                            <option value="Design and Technology">Design and Technology</option>
                            <option value="Economics">Economics</option>
                            <option value="Environment Management">Environment Management</option>
                            <option value="French">French</option>
                            <option value="Food and Nutrition">Food and Nutrition</option>
                            <option value="Fashion and Textiles">Fashion and Textiles</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Islamic Religious Studies">Islamic Religious Studies</option>
                            <option value="Litrature in English">Litrature in English</option>
                            <option value="Marketting">Marketting</option>
                            <option value="Physics">Physics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Yoruba">Yoruba</option>
                          </select>
                        </div>  



                          <div class="mb-3">
                          <select class="form-control" name="seventhSubject" id="">
                            <option value="">Select Subject</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Agriculture Science">Agriculture Science</option>
                            <option value="Animal Husbandry">Animal Husbandry </option>
                            <option value="Arabic Language">Arabic Language</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Commerce">Civic Education</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Christian Religious Knowledge">Christian Religious Knowledge </option>
                            <option value="Data Processing">Data Processing </option>
                                            
                            <option value="Design and Technology">Design and Technology</option>
                            <option value="Economics">Economics</option>
                            <option value="Environment Management">Environment Management</option>
                            <option value="French">French</option>
                            <option value="Food and Nutrition">Food and Nutrition</option>
                            <option value="Fashion and Textiles">Fashion and Textiles</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Islamic Religious Studies">Islamic Religious Studies</option>
                            <option value="Litrature in English">Litrature in English</option>
                            <option value="Marketting">Marketting</option>
                            <option value="Physics">Physics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Yoruba">Yoruba</option>
                          </select>
                        </div>  

                          <div class="mb-3">
                          <select class="form-control" name="eightSubject" id="">
                            <option value="">Select Subject</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Agriculture Science">Agriculture Science</option>
                            <option value="Animal Husbandry">Animal Husbandry </option>
                            <option value="Arabic Language">Arabic Language</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Commerce">Civic Education</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Christian Religious Knowledge">Christian Religious Knowledge </option>
                            <option value="Data Processing">Data Processing </option>
                            <option value="Design and Technology">Design and Technology</option>
                            <option value="Economics">Economics</option>
                            <option value="Environment Management">Environment Management</option>
                            <option value="French">French</option>
                            <option value="Food and Nutrition">Food and Nutrition</option>
                            <option value="Fashion and Textiles">Fashion and Textiles</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Islamic Religious Studies">Islamic Religious Studies</option>
                            <option value="Litrature in English">Litrature in English</option>
                            <option value="Marketting">Marketting</option>
                            <option value="Physics">Physics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Yoruba">Yoruba</option>
                          </select>
                        </div>  

                          <div class="mb-3">
                          <select class="form-control" name="ninethSubject" id="">
                            <option value="">Select Subject</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Agriculture Science">Agriculture Science</option>
                            <option value="Animal Husbandry">Animal Husbandry </option>
                            <option value="Arabic Language">Arabic Language</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Studies">Business Studies</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Commerce">Civic Education</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Christian Religious Knowledge">Christian Religious Knowledge </option>
                            <option value="Data Processing">Data Processing </option>
                            <option value="Design and Technology">Design and Technology</option>
                            <option value="Economics">Economics</option>
                            <option value="Environment Management">Environment Management</option>
                            <option value="French">French</option>
                            <option value="Food and Nutrition">Food and Nutrition</option>
                            <option value="Fashion and Textiles">Fashion and Textiles</option>
                            <option value="Geography">Geography</option>
                            <option value="Government">Government</option>
                            <option value="History">History</option>
                            <option value="Islamic Religious Studies">Islamic Religious Studies</option>
                            <option value="Litrature in English">Litrature in English</option>
                            <option value="Marketting">Marketting</option>
                            <option value="Physics">Physics</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Yoruba">Yoruba</option>
                          </select>
                        </div>  
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">  
                      <select class="form-control" name="firstGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="secondGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="thirdGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="fourthGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="fifthGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="sixthGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="seventhGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="eightGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <select class="form-control" name="ninethGrade">
                        <option value="">Grade</option>
                        <option value="A1">A1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="C4">C4</option>
                        <option value="C5">C5</option>
                        <option value="C6">C6</option>
                        <option value="D7">D7</option>
                        <option value="E8">E8</option>
                        <option value="F9">F9</option>
                        <option value="ABS">Absent</option>
                      </select>
                    </div>

                  </div>
                </div>

                <div class="row">
                <h5 style="text-align: center;" >UPLOAD DOCUMENT</h5>
                  <!-- <p style="text-align: center;">If your number of sitting is <code> <b>2</b> </code>select the subject from to result </p><br><br> -->
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="">Profile Picture </label>
                      <input required type="file" class="form-control" name="profile_pic" placeholder="Examination type">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="">Jamb Result <code>or</code> DE form</label>
                      <input required type="file" class="form-control" name="jamb_result" placeholder="Examination type">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                    <label for="">Olevel Result <code>(WAEC,NECO, GCE...)</code></label>
                      <input required type="file" class="form-control" name="olevel_result" placeholder="Number of sitting">
                    </div>
                  </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-80 my-4 mb-2" name="application">Submit</button>
                </div>

                <p class="text-sm mt-3 mb-0">Already have an account? <a href="javascript:;" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <!-- <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div> -->
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>