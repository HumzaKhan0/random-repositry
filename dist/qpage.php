
<?php session_start();
include 'include/connection.php';
$id = $_GET['tickid'];
foreach ($_GET as $key => $id) {
$data2 = $_GET[$key] = base64_decode(urldecode($id));
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
        <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" / -->>
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
            <?php include 'include/dashboard.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                  <?php $con = mysqli_connect("localhost","root","","assrsoft"); ?>
<!DOCTYPE html>
<!-- saved from url=(0068)https://www.hosterpk.com/clientarea/submitticket.php?step=2&deptid=1 -->
<html lang="en" class="webkit chrome   win  js landscape pc"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Submit Ticket</title>


    <link href="./ticket_css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./ticket_css/jquery.mmenu.all.css" rel="stylesheet" media="screen">
    <link href="./ticket_css/looper.css" rel="stylesheet" media="screen">
    <link href="./ticket_css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="./ticket_css/fonts.css" rel="stylesheet" type="text/css">
    <link href="./ticket_css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://www.hosterpk.com/wp-content/themes/hosterpk/32x32.ico">
    <link rel="stylesheet" id="RMFtooltip-css-css" href="./ticket_css/responsive-tooltip.css" type="text/css" media="all">

<!-- META TAGS -->
<!-- Styling --><link href="./ticket_css/css" rel="stylesheet">
    <link href="./ticket_css/all.css" rel="stylesheet">
<link href="./ticket_css/fontawesome-all.min.css" rel="stylesheet">
<link href="./ticket_css/custom.css" rel="stylesheet">


<script src="./Submit Ticket - HosterPK Pvt Ltd_files/scripts.min.js.download"></script>

<script charset="utf-8" class="lazyload" src="./Submit Ticket - HosterPK Pvt Ltd_files/resource.php"></script><link charset="utf-8" class="lazyload" href="./ticket_css/resource(1).php" rel="stylesheet" type="text/css"><style type="text/css">.lz_chat_link, .lz_chat_file, .lz_chat_mail, .lz_chat_human{color: #4078c7 !important;}.lz_chat_fill{fill: #4989e1 !important;}.lz_chat_bg{background: #4989e1 !important;}:root{--sc-color: #4078c7;--pc-color: #4989e1;}#lz_overlay_chat .lz_form_check:checked + .lz_form_check_label:before {content: "";background: radial-gradient(#4989e1 35%, #f1f1f1 45%, #fafafa 100%);}</style></head>
<body data-phone-cc-input="" class="">
<div class="mm-page"><div id="main-body">
    <div class="container">
        <div class="row">
            <div style="margin-left: auto; margin-right: auto; width: 95%; margin-top:10px;">
    <div class="row">
    <h3>Company Name</h3>
    </div>
    <div class="row">
     <h3 class="col-sm-12">Description</h3>
     <p class="col-sm-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class="row">
    <h3 class="col-lg-12">invoice number</h3>
    <p class="col-sm-5"><b><?php echo $encrypt1 = ($data2); ?></b></p>
    </div>

    <div class="row form-group">
       
    </div>

    <p class="text-center">
    <input type="submit" name="submit" id="openTicketSubmit" value="Submit" class="btn btn-primary">
    </p>

</form>


        </main>
                
            </div>
        </div>

    </body>
</html>