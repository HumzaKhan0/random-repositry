<?php session_start();
include 'include/connection.php';
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
                    <?php
if(mysqli_num_rows($result) > 0)
{
    $output .= '<div class="table-responsive">
                    <table class="table table bordered" id="myTable">
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                        </tr>';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
            <tr>
                <td>'.$row["name"].'</td>
            </tr>
        ';
    }
    $output .= '</table>
    </div>';
}
else
{
    echo 'Data Not Found';
} ?>

<script>
$(document).ready(function () {

$(function(){
    $("#myTable").css("display","none");
})
                                $("#myInput").on("keyup", function () {
                                    var value = $(this).val().toLowerCase();

                                    if(value.length > 0){
                                       $("#myTable").css("display","inline-block");
                                      $("#myTable tr").filter(function () {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > 0)
                                    });
                                    }else{
                                          $("#myTable").css("display","none");

                                    }
                                    
                                });
                            });
</script>
                </div>
        <div id="layoutSidenav">
            <?php include 'include/dashboard.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 text-center"><?php  ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-black"><a href="index.php">Index</a>\<a href="#">Sales</a></li>
                        </ol>
                        <div class="row">

    <?php $dept = $_GET['dept'];
     $subj = mysqli_query($con,"SELECT * from ticket where `dept` = '$dept'");
    echo'     
                            <div class="card-body">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Response</th>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Response</th>
                                        </tfoot>
                                        <tbody>
';
    while ($fetch = mysqli_fetch_assoc($subj)) {
        $id = $fetch['id'];
?>
                      
                                            <tr>
                                                <td><h6><?php echo $fetch['ticket_id']; ?></h6></a></td>
                                                <td><h6><?php echo $fetch['name']; ?></h6></a></td>
                                                <td><h6><?php echo $fetch['email']; ?></h6></a></td>
                                                <td><div class="dropdown">
  <a href="ticketform.php?id=<?php echo $fetch['id'] ?>" class="btn bg-dark text-white">
    Response
  </a>
</div></td>
                                                </tr>
                                            

<?php    } ?>
                                        </tbody>
                                    </table>
                                </div>
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
