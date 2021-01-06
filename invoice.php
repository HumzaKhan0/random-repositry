<?php session_start();
include 'include/connection.php';
$id ='';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if ($_SESSION['name'] == '') {
   header('location: login.php');
}

$id = $_GET['tickid'];
foreach ($_GET as $key => $id) {
$data2 = $_GET[$key] = base64_decode(urldecode($id));
}

// ================== return to data value ========================                            
 echo 'hello'.$_SESSION['userrole'];
?>

<!DOCTYPE html>
<html lang="en">
<?php $data = mysqli_query($con,'SELECT * from ticket where `id` = "14"');
$iname = mysqli_fetch_assoc($data); ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Invoice</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
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
                            <li class="breadcrumb-item active">INVOICE</li>
                        </ol>
                        	<div id="page-wrap">
		

		<img src="assets/img/logo.png">
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title" class="tooltip-test" title="Click to change company and CEO's Name">Company Name.
c/o CEO Name</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea readonly=""><?php echo $encrypt1 = ($data2); ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea readonly="" id="date"><?php echo date('Y-m-d'); ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$00.00</div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
	
		  <?php $tbldata ='
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr tooltip-test" title="Click to change item name"><textarea>Item Namess</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="descriptiontool tip-test" title="Click to change Description"><textarea>Description</textarea></td>
		      <td><textarea class="cost tooltip-test" title="Click to change Price">$00.00</textarea></td>
		      <td><textarea class="qty tooltip-test" title="Click to change Quantity">0</textarea></td>
		      <td><span class="price">$000.00</span></td>
		  </tr>
          ';echo $tbldata ?>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$000.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$000.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>
<?php if($_SESSION['userrole'] == 0){
		      echo '<td class="total-value"><textarea id="paid">$0.00</textarea></td>';
              } ?>
              <?php if($_SESSION['userrole'] != 0){
              echo '<td class="total-value"><textarea readonly id="paid">$0.00</textarea></td>';
              } ?>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$000.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea class="tooltip-test" title="Click to change Detailss">NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>                            
                        

                    </div>
                    <button class="mr-3 text-white" id="btnExport" style="background: maroon" name="all"><b>Export To PDF</b></button>
                </main>
                <!-- <form method="POST">
            <input type="submit" name="submit">
            </form> -->
            </div>
        </div>
        <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#page-wrap')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Invoice.pdf");
                }
            });
        });
    </script>
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
<?php if (isset($_POST['submit'])) {
   $insert = mysqli_query($con,'INSERT into invoice (name,address,phone_number)');
} ?>