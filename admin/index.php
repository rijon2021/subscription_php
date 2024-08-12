
<?php 
require_once('includes/config.php');
session_start(); 

//Code for Registration 
if(isset($_POST['search_student']))
{
    $admissionNo=$_POST['admission_no'];
    $query=mysqli_query($con, "select * from students where AdmissionNo='$admissionNo'");

    $row=mysqli_num_rows($query);
    
    if($row>0)
    {
        while($result=mysqli_fetch_array($query))
        {
            $_POST['StudentId'] = $result['StudentId'];
            $_POST['AdmissionNo'] = $result['AdmissionNo'];
            // $_SESSION['AdmissionNo'] = $result['AdmissionNo'];
            $_POST['FullName'] = $result['FullName'];
            $_POST['ClassID'] = $result['ClassID'];
            $_POST['ClassName'] = $result['ClassName'];
            $_POST['RollNo'] = $result['RollNo'];
            $_POST['RegistrationNo'] = $result['RegistrationNo'];
        }

        
        // $fsdf = $query[admission_no]
    } 
// else{
//     $msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')");
// }

}

?>
<?php print_r($_POST); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Subscription</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-dark bg-dark w-100">
        <!-- Navbar Brand-->
        <div><a class="navbar-brand ps-3" href="index.php">Subscription System</a></div>
        <div class="text-end pe-3">
            <a href="login.php" class="btn btn-primary">Login Admin</a>

        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Search Student </h4>
                            <div class="row">
                                <!-- <div class="col-md-6 mb-2">
                                    <label for="Year">Session <span class="required-star">*</span></label>
                                    <select class="form-control" id="Year" required>
                                        <option value="">Choose...</option>
                                        <option value="2017">2017-2018</option>
                                        <option value="2018">2018-2019</option>
                                        <option value="2019">2019-2020</option>
                                        <option value="2020">2020-2021</option>
                                        <option value="2021">2021-2022</option>
                                        <option value="2022">2022-2023</option>
                                        <option value="2023">2023-2024</option>
                                        <option value="2024">2024-2025</option>
                                        <option value="2025">2025-2026</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="class">Class <span class="required-star">*</span></label>
                                    <select class="form-control" id="class" required>
                                        <option value="">Choose...</option>
                                        <option value="Eleven">Eleven</option>
                                        <option value="Eleven">Twelve</option>
                                        <option value="Eleven">Degree</option>
                                        <option value="Eleven">Honours</option>
                                        <option value="Eleven">Masters</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="firstName">SSC Registration No <span
                                                class="required-star">*</span></label>
                                        <input type="text" name="ssc_roll" class="form-control" id="ssc_roll"
                                            placeholder="" required>
                                    </div>
                                </div> -->
                                <form method="post">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="firstName">Admission ID</label>
                                            <input type="text" name="admission_no" class="form-control" id="admission_no"
                                                placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button type="submit" name="search_student" class="btn btn-primary mt-3"><i class="fa fa-search"></i> Search
                                            Student</button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-none">
                                    <div class="student-data mt-3">
                                        <div class="table-responsive">
                                            <h5>Student Information</h5>
                                            <table class="table table-bordered table-dark-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 120px;">Admission No/SSC/HSC Roll</th>
                                                        <td style="width: 5px;">:</td>
                                                        <td>
                                                            <span id="lblAdmissionNo">20240082</span>
                                                        </td>
                                                        <td colspan="3" style="text-align: center;">
                                                            <div id="ForLeftSideMenuList_divImage">
                                                                <img class="img-responsive"
                                                                    style="width:80px;height:100px;"
                                                                    src="https://islampurcollege.edu.bd/Images/studentAdmissionImages/34852.Jpeg"
                                                                    alt="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 120px;">Name</th>
                                                        <td style="width: 5px;">:</td>
                                                        <td>
                                                            <span id="lblStudentName">Sahalom</span>
                                                        </td>
                                                        <th style="width: 120px;">Father Name</th>
                                                        <td style="width: 5px;">:</td>
                                                        <td>
                                                            <span id="lblFathersName">Kamal</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 120px;">Year</th>
                                                        <td style="width: 5px;">:</td>
                                                        <td>
                                                            <span id="lblYear">2024</span>
                                                        </td>
                                                        <th style="width: 120px;">Class</th>
                                                        <td style="width: 5px;">:</td>
                                                        <td>
                                                            <span id="lblClass">Eleven</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 120px;">Group</th>
                                                        <td style="width: 5px;">:</td>
                                                        <td>
                                                            <span id="lblGroup">Science</span>
                                                        </td>
                                                        <th style="width: 120px;">Class Roll</th>
                                                        <td style="width: 5px;">:</td>
                                                        <td>
                                                            <span id="lblClassRoll"></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 order-md-2 mb-4">
                        <form method="post" action="checkout.php"> 
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="">Payment Info</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <h6 class="text-info mb-0">Subscription validation Class: Eleven <br>
                                    </h6>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h5 class="my-0">Yearly Subscription Fee</h5>
                                        <p class="text-muted mb-0">1. Subscription Fee</p>
                                        <p class="text-muted mb-0">2. SMS Fee</p>
                                        <p class="text-muted mb-0">3. Server Fee</p>
                                    </div>
                                    <h5 class="text-dark">52</h5>
                                </li>

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Payment Charge</h6>
                                        <p class="text-muted">Payment charge for minimum amount</p>
                                    </div>
                                    <h5 class="text-dark">10</h5>
                                </li>

                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <h4 class="text-primary">Total (BDT)</h4>
                                    <h4 class="text-primary"><strong>62 TK</strong></h4>
                                </li>
                            </ul>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label ms-2" for="same-address"> I Agree with <a href=""
                                        class="text-info">Terms and
                                        Comdition</a> </label>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" name="submit" class="btn btn-info btn-lg btn-block" id="sslczPayBtn"><img class="me-2"
                                        src="../../../../assets/images/theme/ssl-logo.png" alt=""> <strong> Pay
                                        Now</strong> </button>
                            </div>
                            </form> 
                        </div>

                    </div>
                    <footer class="my-5 pt-5 text-muted text-center text-small">
                        <!-- <p class="mb-1">&copy; 2024 Web Support BD</p> -->
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#">Terms and Condition</a></li>
                            <li class="list-inline-item"><a href="#">Refund Policy</a></li>
                        </ul>
                    </footer>
                </div>
            </main>
            <?php include_once('includes/footer.php');?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>