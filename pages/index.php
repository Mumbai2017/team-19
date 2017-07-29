<?php
$conn = new mysqli('localhost','root','','team_19');
$sql = "SELECT * FROM orders where status=1";
$result = $conn->query($sql);
$i = 0;
if($result->num_rows >0)
{
    while($row = $result->fetch_assoc())
    {

$i++;
}
}

$sql1 = "SELECT * FROM orders where status=2";
$result1 = $conn->query($sql1);
$j = 0;
if($result1->num_rows >0)
{
    while($row = $result1->fetch_assoc())
    {

$j++;
}
}

$sql2 = "SELECT * FROM orders where status=3";
$result2 = $conn->query($sql2);
$k = 0;
if($result2->num_rows >0)
{
    while($row = $result2->fetch_assoc())
    {

$k++;
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sakhi Portal</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sakhi Portal</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="../logout.php">
                        <i class=" glyphicon glyphicon-log-out"></i> 
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="tables.html"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-cog fa-fw"></i> Settings</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $i;?></div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $j;?></div>
                                    <div>Pending Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $k;?></div>
                                    <div>Delivered Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div class="medium">Inventory</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Find Near By Sakhi 
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <a href="abc.html">View Nearby Sakhi</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                 
                                <div class="col-lg-12">
                                    

                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                       <script type="text/javascript">  

                                  // Load the Visualization API and the corechart package.
                                  google.charts.load('current', {'packages':['corechart']});

                                  // Set a callback to run when the Google Visualization API is loaded.
                                  google.charts.setOnLoadCallback(drawChart);

                                  // Callback that creates and populates a data table,
                                  // instantiates the pie chart, passes in the data and
                                  // draws it.
                                  function drawChart() {

                                    // Create the data table.
                                    var data = google.visualization.arrayToDataTable([
                                    ['Products','Quantity'],
                                    <?php
                                $conn = new mysqli('localhost','root','','team_19');

                                    $query = "SELECT p_id, s_quantity FROM sakhi_inventory;";
                                    $result = $conn->query($query);
                                    while($row=mysqli_fetch_array($result)){
                                        echo "['".$row['p_id']."',".$row['s_quantity']."],";    
                                    }
                                    ?>
                                    ]);

                                    // Set chart options
                                    var options = {'title':'Products vs Quantity'};

                                    // Instantiate and draw our chart, passing in some options.
                                    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                                    chart.draw(data, options);
                                  }
                                  jQuery(document).ready(function(){
                                      jQuery(window).resize(function(){
                                          drawChart();
                                      });
                                  });
                                </script>
                                    <div id="chart_div" style="width:100%; height:100%"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> List of Orders:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 1
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 2
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 3
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 4
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 5
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 6
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 7
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 8
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2"></a>
                                    Order 9
                                    <span class="pull-right text-muted small"><em>Status</em>
                                    </span>
                                </div>
                            </div>
                            <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Order Details:</h4>
                                </div>
                                <div class="modal-body">
                                <p>
                                Name:<br>
                                Address:<br>
                                Contact:<br>
                                Status:<br>
                                </p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Accept</button>
                                </div>
                                  
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Contact Sakhi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="contact">
                                <form>
                                  <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="name" class="form-control" id="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="msg">Message:</label>
                                    <textarea class="form-control" id="msg"></textarea>
                                  </div>
                                 
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Request Refill:
                        </div>
                        <div class="panel-body">
                            <form>
                                  <div class="form-group">
                                    <label for="name">Flavor:</label>
                                    <input type="name" class="form-control" id="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="msg">Quantity:</label>
                                    <input type="name" class="form-control" id="name">
                                  </div>
                                 
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                        <!-- /.panel-body -->
                        
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
