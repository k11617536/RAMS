<?php 
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UMak ADMIN</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand">
           &nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/logo.png"  class="img-fluid" alt="">
            <a class="navbar-brand" href="index-admin.html"><b>UMAK ADMIN</b></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            
            <!-- Navbar-->
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <div class="media-body  ml-2  d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">ADMIN <?php echo htmlspecialchars($_SESSION["email"]); ?>&nbsp;</span>
                          </div>
                        <i class="fas fa-user fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                      </span>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right " >
                    <div class="dropdown-header noti-title">
                      <h8 class="text-overflow m-0">Welcome!</h8>
                    </div>
                    <a class="dropdown-item" href="#!"><i class="fa fa-gear" style="font-size:24px"></i> Settings</a>
                    <a class="dropdown-item" href="#!">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="admin_logout.php">Logout</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>



 

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="index-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                            
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                           
                    </div> -->
                    
                </nav>
            </div>
            
            
            
            
            
            
            <div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">DEPARTMENT</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-7">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total of Concerns </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                
                                        <p> <?php 
										          $server = "localhost";
                                                  $username = "root";
                                                  $password = "";
                                                  $dbname = "concerndb";

                                                  $con = mysqli_connect($server,$username,$password,$dbname); 

												  $query =  "SELECT concern FROM tblstudent ORDER BY id";
                                                  $query_run = mysqli_query($con,$query);

                                                  $row =  mysqli_num_rows($query_run);
                            
                                                  echo '<h1> '.$row.'</h1>';?> 
									   </p>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Pending Concerns</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                
                                        <p> <?php 
										          $server = "localhost";
                                                  $username = "root";
                                                  $password = "";
                                                  $dbname = "concerndb";

                                                  $con = mysqli_connect($server,$username,$password,$dbname); 

												  $query =  "SELECT concern FROM tblstudent ORDER BY id";
                                                  $query_run = mysqli_query($con,$query);

                                                  $row =  mysqli_num_rows($query_run);
                            
                                                  echo '<h1> '.$row.'</h1>';?>  </p>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Processed Concern</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                
                                        <p><?php 
										          $server = "localhost";
                                                  $username = "root";
                                                  $password = "";
                                                  $dbname = "concerndb";

                                                  $con = mysqli_connect($server,$username,$password,$dbname); 

												  $query =  "SELECT concern FROM tblstudent ORDER BY id";
                                                  $query_run = mysqli_query($con,$query);

                                                  $row =  mysqli_num_rows($query_run);
                            
                                                  echo '<h1> '.$row.'</h1>';?> </p>
                                      
                                    </div>
                                </div>
                            </div>
                            
                       
                        </div> 

<!-- table -->


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Student Table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>E-mail</th>
                                                <th>Contact Number</th>
                                                <th>College</th>
												<th>Program</th>
												<th>Concern</th>
												<th>Message</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID Number</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>E-mail</th>
                                                <th>Contact Number</th>
                                                <th>College</th>
												<th>Program</th>
												<th>Concern</th>
												<th>Message</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php
												require_once "dbconn.php";
												$sql = "SELECT * FROM tblstudent";
                                                
												if($result = $pdo->query($sql)){
                                                  if($result->rowCount() > 0){

												while($row = $result->fetch()){
												echo "<tr>";
												echo "<td>".$row['umakid']. "</td>";
												echo "<td>".$row['fname']. "</td>";
												echo "<td>".$row['lname']. "</td>";
												echo "<td>".$row['email']. "</td>";
												echo "<td>".$row['connum']. "</td>";
												echo "<td>".$row['college']. "</td>";
												echo "<td>".$row['program']. "</td>";
												echo "<td>".$row['concern']. "</td>";
												echo "<td>".$row['message']. "</td>";
												
												}
												
												unset($result);
                                                } else{
                                                echo "<p class='lead'><em>No records were found.</em></p>";
												 }
												}else{
                                                echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                     							}
												?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>






                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
