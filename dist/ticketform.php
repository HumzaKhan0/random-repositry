<?php $con = mysqli_connect("localhost","root","","assrsoft"); 
if (isset($_GET['uid'])) {
$id = $_GET['uid'];
}
$id = '';

echo $id;
$klogin = mysqli_query($con,"SELECT * FROM reg where `id` = '$id'");
$get = mysqli_fetch_array($klogin); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
                <div id="layoutSidenav">
            <?php include 'include/dashboard.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Ticket</a></li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php include 'SubmitTicket.php' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
