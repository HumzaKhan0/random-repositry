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


<body>
           <?php //include 'include/dashboard.php'; ?>
	<div class="ml-5 mr-5">
<h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">INVOICE</li>
                        </ol>
		<!-- <div id="identity">
		
              <textarea id="address"><?php echo $iname['name']; ?> 
3rd Floor, 172/L Rahat Jo Dero,Office # C5, Tariq Rd, P.E.C.H.S Block 2 Karachi,
75400

Phone: (021) 123456789</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="assets/img/logo.png" alt="logo" />
            </div>
		
		</div> -->
		<div class="row">
		<div class="col-sm-11">
		<img id="image" src="assets/img/logo.png" alt="logo" />
		</div>
		<div class="col-sm-1 mt-5 float-right">
		<textarea readonly="" style="float: right;"><?php echo date('Y-m-d'); ?></textarea><br>
	</div>
		</div>
		<div style="clear:both"></div>
		
		<div id="customer">

            <table id="meta">
                <tr>
                    <td style="border: transparent;"><b>Qutation No:000123</b></td>
                </tr>
                <!-- <tr>
                    <td class="meta-head">Date</td>
                    <td><textarea readonly="" id="date"><?php echo date('Y-m-d'); ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr> -->

            </table>
		
		</div>
            <textarea id="customer-title">Attn: Mr.Steve Widget</textarea><br>
<p style="float: left;"><b>We reference to yur discussion we are pleased to quote our prices as followed</b></p>
		
		<table id="items">
		<form method="POST">
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
<?php $tbldata = '		  <tr class="item-row">
<td class="item-name"><div class="delete-wpr tooltip-test" title="Click to change item name"><textarea>Item Name</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
		      <td><textarea class="cost">$650.00</textarea></td>
		      <td><textarea  readonly=""  class="qty">1</textarea></td>
		      <td><span class="price">$650.00</span></td>
		  </tr>
		  '.$tbldata;
		          if(isset($_POST['addrow']))
        {
        $tbldata .='<tr class="item-row">
<td class="item-name"><div class="delete-wpr tooltip-test" title="Click to change item name"><textarea>Item Name</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>to check</textarea></td>
		      <td><textarea  class="cost">$94.00</textarea></td>
		      <td><textarea readonly="" class="qty">1</textarea></td>
		      <td><span class="price">$746.00</span></td>
		  </tr>';
          } 
		  ?>
		  <?php echo $tbldata; ?>
		  <!-- <tr class="item-row">
<td class="item-name"><div class="delete-wpr tooltip-test" title="Click to change item name"><textarea>Item Name</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea  class="cost">$75.00</textarea></td>
		      <td><textarea readonly="" class="qty">1</textarea></td>
		      <td><span class="price">$225.00</span></td>
		  </tr> -->
	  
		  <tr id="hiderow">
		    <td colspan="5"><button class="border-0 bg-transparent " type="submit" name="addrow" href="javascript:;" title="Add a row">Add a row</button></td>
		  </tr>
		  

		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>
		
		</form>
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	<button class="mr-3 text-white" id="btnExport" style="background: maroon" name="all"><b>Export To PDF</b></button>
	</div>
	
</body>
        <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#items')[0], {
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
</html>