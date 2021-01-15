<?php session_start();
include 'include/connection.php';
$id ='';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if ($_SESSION['name'] == '') {
   header('location: login.php');
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
        <title>ticket dashboard</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
  <?php
  $search = '';
  $query = "
    SELECT * FROM ticket 
    WHERE name LIKE '%".$search."%'
    "; 

  $output = '';
if(isset($_POST["query"]))
{ 
    $search = $_POST[''];
    $query = "
    SELECT * FROM ticket 
    WHERE name LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM ticket ORDER BY id ASC";
}
$result = mysqli_query($con, $query);    ?>

        
                    <div class="table-responsive">

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
                </div>
        <div id="layoutSidenav">
            <?php include 'include/dashboard.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                                                    
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary mb-4">
                                    <?php $code = mysqli_query($con,"SELECT * from ticket where `status` = '2' and `dept` = 'sales'");
$count = mysqli_num_rows($code);
$query = mysqli_query($con,"SELECT * from ticket where `status` = '0' and `dept` = 'sales'");
$cancel = mysqli_num_rows($query);
                                     ?>
                                    <div class="card-body sb-nav-link-icon text-white"><a class=" text-white" href="getrecord.php?dept=sales"><b>Sales</b></a> | Completed:&nbsp;<?php echo $count; ?> | Pending:&nbsp;<?php echo $cancel; ?></div>

                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <?php $code = mysqli_query($con,"SELECT * from ticket where `status` = '2' and `dept` = 'abuse'");
$count = mysqli_num_rows($code);
$query = mysqli_query($con,"SELECT * from ticket where `status` = '0' and `dept` = 'abuse'");
$cancel = mysqli_num_rows($query);
                                     ?>
                                <div class="card bg-warning mb-4">
                                    <div class="card-body text-white"><a class="text-white " href="getrecord.php?dept=abuse"><b>Abuse</b></a> | Completed:&nbsp;<?php echo $count; ?> | Pending:&nbsp;<?php echo $cancel; ?></div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <?php $code = mysqli_query($con,"SELECT * from ticket where `status` = '2' and `dept` = 'billing'");
$count = mysqli_num_rows($code);
$query = mysqli_query($con,"SELECT * from ticket where `status` = '0' and `dept` = 'billing'");
$cancel = mysqli_num_rows($query);
                                     ?>
                                <div class="card bg-success mb-4">
                                    <div class="card-body text-white"><a class=" text-white" href="getrecord.php?dept=billing"><b>Billing</b></a> | Completed:&nbsp;<?php echo $count; ?> | Pending:&nbsp;<?php echo $cancel; ?></div>
      
                                </div> </div>
                                                             
                                 <div class="col-xl-3 col-md-6">
                                    <?php $code = mysqli_query($con,"SELECT * from ticket where `status` = '2' and `dept` = 'support'");
$count = mysqli_num_rows($code);
$query = mysqli_query($con,"SELECT * from ticket where `status` = '0' and `dept` = 'support'");
$cancel = mysqli_num_rows($query);
                                     ?>
<div class="card bg-danger mb-4"> <div
class="card-body text-white"><a href="getrecord.php?dept=support" class="text-white"><b>Support</b></a> | Completed:&nbsp;<?php echo $count; ?> | Pending:&nbsp;<?php echo $cancel; ?></div> 
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
