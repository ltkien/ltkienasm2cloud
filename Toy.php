<?php
$con = pg_connect("host=ec2-54-157-149-88.compute-1.amazonaws.com
dbname=d7li5vh6npno94
port=5432
user=zuqmehsapjptmv
password=623913fc950b42d76791b758a5f0146ddb4b104e5af583b34628a354935751e9
sslmode=require");

$query = "select id, toy_name, toy_price, atn_store, toy_quantity, toy_description from toy ;";


$result = pg_query($con, $query);
$count = pg_num_rows($result);

echo ("hi");
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ATN shop</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.php"><strong><i class="icon fas fa-store"></i> ATN store</strong></a>
				
		        <div id="sideNav" href="">
		            <i class="fa fa-bars icon"></i> 
		        </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    
                  
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV LEFT  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="admin.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
					 
					
                    <li>
                        <a  href="ATNShopRevenue.php"><i class="fa fa-fw fa-file"></i> ATN shop revenue</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> ATN shop warehouse<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="ATN1warehouse.php">ATN shop 1</a>
                            </li>
                            <li>
                                <a href="ATN2warehouse.php">ATN shop 2</a>
                            </li>
                            <li>
                                <a href="ATN3warehouse.php">ATN shop 3</a>
                            </li>
                            <li>
                                <a href="ATN4warehouse.php">ATN shop 4</a>
                            </li>
							</ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> ATN shop employees<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="ATN1employees.php">ATN shop 1</a>
                            </li>
                            <li>
                                <a href="ATN2employees.php">ATN shop 2</a>
                            </li>
                            <li>
                                <a href="ATN3employees.php">ATN shop 3</a>
                            </li>
                            <li>
                                <a href="ATN4employees.php">ATN shop 4</a>
                            </li>
							</ul>
                    </li>

                    <li>
                        <a class="active-menu" href="Toy.php"><i class="fa fa-desktop"></i> Toys</a>
                    </li> 
                    
    
                    
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
            <h1 class="page-header">
                Toys <small> </small>
            </h1>				
		</div>

        <!-- /. Main  -->
   

        <table id="view-data" class="table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Toy</th>
            <th>Price ($)</th>
            <th>Store</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          	
		if ($count > 0) {
            while ($row = pg_fetch_assoc($result)) {
          ?>
              <tr>
                <td>
                  <?php echo $row['id']; ?>
                </td>
                <td>
                  <?php echo $row['toy_name']; ?>
                </td>
                <td>
                  <?php echo $row['toy_price']; ?>
                </td>
                <td>
                  <?php echo $row['atn_store']; ?>
                </td>
                <td>
                  <?php echo $row['toy_quantity']; ?>
                </td>
                <td>
                  <?php echo $row['toy_description']; ?>
                </td>
                <td>
                  <div class="btn-group" data-toggle="buttons"><a href="/toydelete.php?id=$result[id]" class="btn btn-primary btn-sm">Delete</a></div>
                </td>
              </tr>
          <?php
            }
          } else {
            echo "<script>alert('Connect fail!');</script>" . pg_errormessage($query);
          }
          ?>
        </tbody>
      </table>





    </div>  
    
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    
	
	 
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>
