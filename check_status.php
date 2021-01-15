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
            <?php include 'include/dashboard.php'; ?>
            <div class="container cta-100 ">
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  
                  <a href="" data-target="#blogCarousel" data-slide-to="0" class="active text-dark mr-3">Sales</a>
                  <a href="" data-target="#blogCarousel" class="text-dark mr-3" data-slide-to="1">Abuse</a>
                  <a href="" data-target="#blogCarousel" class="text-dark mr-3" data-slide-to="2">Billing</a>
                  <a href="" data-target="#blogCarousel" class="text-dark mr-3" data-slide-to="3">Support</a>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <?php $dept = $_GET['dept'];
     $subj = mysqli_query($con,"SELECT * from ticket where `dept` = 'sales'");
    echo'     
                            <div class="card-body">
                                <div class="table-responsive">
                                <center><h1 class="mt-3">Sales</h1></center>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </tfoot>
                                        <tbody>
';
    while ($fetch = mysqli_fetch_assoc($subj)) {
         $id = $fetch['id'];
                        $incode = urlencode(base64_encode( $id));
?>
                      
                                            <tr>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['ticket_id']; ?></h6></a></td>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['name']; ?></h6></a></td>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['email']; ?></h6></a></td>
                                                <?php if ($fetch['status'] == 0) {
                                                echo '<td><h6>Pending</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 1) {
                                                echo '<td><h6>  Cancelled</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 2) {
                                                echo '<td><h6>  Confirmed</h6></a></td>';
                                                } ?>
                                                </tr>
                                            

<?php    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                      <?php $dept = $_GET['dept'];
     $subj = mysqli_query($con,"SELECT * from ticket where `dept` = 'abuse'");
    echo'     
                            <div class="card-body">
                                <div class="table-responsive">
                                <center><h1 class="mt-3">Abuse</h1></center>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </tfoot>
                                        <tbody>
';
    while ($fetch = mysqli_fetch_assoc($subj)) {
         $id = $fetch['id'];
                        $incode = urlencode(base64_encode( $id));
?>
                      
                                            <tr>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['ticket_id']; ?></h6></a></td>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['name']; ?></h6></a></td>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['email']; ?></h6></a></td>
                                                <?php if ($fetch['status'] == 0) {
                                                echo '<td><h6>  Pending</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 1) {
                                                echo '<td><h6>  Cancelled</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 2) {
                                                echo '<td><h6>  Confirmed</h6></a></td>';
                                                } ?>
                                                </tr>
                                            

<?php    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                <div class="carousel-item ">
                    <div class="row">
                          
                        <!--start-->
                      <?php $dept = $_GET['dept'];
     $subj = mysqli_query($con,"SELECT * from ticket where `dept` = 'billing'");
    echo'     
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <center><h1 class="mt-3">Billing</h1></center>
                                        <thead>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </tfoot>
                                        <tbody>
';
    while ($fetch = mysqli_fetch_assoc($subj)) {
         $id = $fetch['id'];
                        $incode = urlencode(base64_encode( $id));
                $incode = urlencode(base64_encode( $id));
?>
                      
                                            <tr>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['ticket_id']; ?></h6></a></td>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['name']; ?></h6></a></td>
                                                <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['email']; ?></h6></a></td>
                                                <?php if ($fetch['status'] == 0) {
                                                echo '<td><h6>  Pending</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 1) {
                                                echo '<td><h6>  Cancelled</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 2) {
                                                echo '<td><h6>  Confirmed</h6></a></td>';
                                                } ?>
                                                </tr>
                                            

<?php    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end -->
                    </div>
                    <!--.row-->
                  </div>
                  <!-- items-->

                                  <div class="carousel-item ">
                    <div class="row">
                        <!--start-->
                      <?php $dept = $_GET['dept'];
     $subj = mysqli_query($con,"SELECT * from ticket where `dept` = 'support'");
    echo'     
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table tan(arg)able-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <center><h1>Support</h1></center>
                                        <thead>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Ticket Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                        </tfoot>
                                        <tbody>
';
    while ($fetch = mysqli_fetch_assoc($subj)) {
         $id = $fetch['id'];
                        $incode = urlencode(base64_encode( $id));
            $incode = urlencode(base64_encode($id));
?>
                                           <tr>
                     <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['ticket_id']; ?></h6></a></td>
                     <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['name']; ?></h6></a></td>
                     <td><a href="ticketform.php?id=<?php echo $incode; ?>"><h6><?php echo $fetch['email']; ?></h6></a></td>
                                                 
                                                <?php if ($fetch['status'] == 0) {
                                                echo '<td><h6>  Pending</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 1) {
                                                echo '<td><h6>  Cancelled</h6></a></td>';
                                                }
                                                else if ($fetch['status'] == 2) {
                                                echo '<td><h6>  Confirmed</h6></a></td>';
                                                } ?>
                                            </tr>
                                            
<?php    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end -->
                    </div>
                    <!--.row-->
                  </div>
                  <!-- items-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
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
