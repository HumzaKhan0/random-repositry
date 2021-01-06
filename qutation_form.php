
<?php session_start();
ob_start();
include 'include/connection.php'; ?>

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
                        <th>Company Name</th>
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
            <script>document.getElementById("invoicenum").onkeydown=function(e){
    if(((e.keyCode < 48) || (e.keyCode > 57))&& e.keyCode != 8){
       alert ('only numeric characters are accepted');
       return false;
    } return true;
};</script>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4 text-center"><?php  ?></h1>
                        <center><h1>qutation Form</h1></center>
<center><form method="POST" enctype="multipart/form-data" role="form">
    <div class="row">
        <div class="form-group col-sm-12">
            <label for="inputName">Company Name</label>
            <input id="" type="text" name="cname" style="width: 180px;" placeholder="Company Name" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="inputName">Qutation Number</label>
            <?php $qnumb = str_shuffle($_SESSION['name'].'12345');
            $link = "qutatiion_page.php?tickid=".urlencode(base64_encode($qnumb));          
                ?>
            <input id="invoicenum" type="text" name="qnum" placeholder="qutation number" value="<?php echo $qnumb ?>" class="form-control" readonly="">
        </div>
        <div class="form-group col-sm-4">
            <label for="inputEmail">Qutation To</label>
            <input type="email" name="qto" id="inputEmail" placeholder="qutation To" value="<?php //echo $mail ?>" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="inputSubject"><b>Start Date</b></label><br>
            <?php $srt_date = date("Y-m-d");
            echo $srt_date;?>
        </div>

        <div class="form-group col-sm-5">
            <label for="inputSubject"><b>End Date</b></label><br>
            <input type="date" name="end_date">

        </div>
    </div>
            <div class="form-group col-sm-5">
        </div>
                    <div class="form-group col-sm-8">
            <center><button type="submit" name="submit">Submit</button></center>
            </div>

</form>
</center>
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
<?php if (isset($_POST['submit'])) {
    $qto = $_POST['qto'];
    //echo $qto;
    $cname  = $_POST['cname'];
    $name = $_SESSION['name'];
    //echo $name;
    $qnum = $_POST['qnum'];
//echo $qnum;
    $end_date = $_POST['end_date'];
    
    //echo $end_date;
    if (empty($qto) || empty($end_date)) {
        echo "<script>
alert ('Please Fill out the fields')
        </script>";
    }
    else{
    $insert = mysqli_query($con,"INSERT into qutation (`company_name`,`name`,`qutation_number`,`qutation_to`,`srt_date`,`end_date`) values ('$cname','$name','$qnum','$qto','$srt_date','$end_date')");
    if ($insert) {
    $select = mysqli_query($con,"SELECT * from qutation where `qutation_number` = '3m514aza2h'");
$array = mysqli_fetch_array($select);
//echo $array['id'];
$idget = mysqli_query($con,"SELECT * from qutation where `qutation_number` = '$qnum'");
$show = mysqli_fetch_array($idget);
$_SESSION['qtnumb'] = $show['company_name'];
header('location:'.$link);
    }
else if(!$insert)
{
    echo 'not inserted';
}
}
} ?>
</html>
