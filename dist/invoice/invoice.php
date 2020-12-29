<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="invoice.css">
    <!-- <script src="invoice.js"></script> -->
</head>

<body>
    <?php

// <!-- Include Connection -->
include("../include/connection.php");
// Get Id
session_start();
$invoice_id = 0;
if (isset($_SESSION['invoice'])) {
    $invoice_id = $_SESSION['invoice'];
	$query = "SELECT * FROM sale_invoice si
	INNER JOIN tb_sale s ON si.invoice_no = s.Invoice
	INNER JOIN product p ON s.itemId = p.prod_id
	INNER JOIN customers c ON si.customer_details = c.id
	WHERE si.invoice_no = '$invoice_id' ";
	$result = mysqli_query($conn, $query);
	$row  = mysqli_fetch_array($result);
}
?>
    <header>
        <h1>Invoice</h1>
        <address>
            <p><?php echo $row['name'] ?></p>
            <p><?php echo $row['address'] ?></p>
            <p><?php echo $row['mobile_no'] ?></p>
        </address>
        <div><img alt="" src="../images/logo.png" width="100px"></div>
    </header>
    <article>
        <address>
            <p>POS Software</p>
        </address>
        <table class="meta">
            <tr>
                <th><span>Invoice #</span></th>
                <td><span><?= $invoice_id ?></span></td>
            </tr>
            <tr>
                <th><span>Date</span></th>
                <td><span><?php echo $row['invoice_date'] ?></span></td>
            </tr>
            <tr>
                <th><span>Amount Due</span></th>
                <td><span id="prefix">Rs. </span><span><?php echo $row['payment_due'] ?></span></td>
            </tr>
        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th><span>S.No</span></th>
                    <th><span>Item</span></th>
                    <th><span>Rate</span></th>
                    <th><span>Quantity</span></th>
                    <th><span>Price</span></th>
                </tr>
            </thead>
            <tbody>
                <?php
					$queries = "SELECT * FROM sale_invoice si
					INNER JOIN tb_sale s ON si.invoice_no = s.Invoice
					INNER JOIN product p ON s.itemId = p.prod_id
					WHERE si.invoice_no = '$invoice_id' ";
					$results = mysqli_query($conn, $queries);
					$sno= 0;
					while ($rows = mysqli_fetch_array($results)) {
					?>
                <tr>
                    <td><?php echo ++$sno ?></td>
                    <td><span><?php echo $rows['prod_name'] ?></span></td>
                    <td><span data-prefix>Rs. </span><span><?php echo $rows['prod_price'] ?></span></td>
                    <td><span><?php echo $rows['Qty'] ?></span></td>
                    <td><span data-prefix>Rs. </span><span><?php echo $rows['prod_price'] * $rows['Qty'] ?></span></td>
                </tr>
                <?php
				}
            ?>
            </tbody>
        </table>
        <table class="balance">
            <tr>
                <th><span>Tax</span></th>
                <td><span data-prefix>Rs. </span><?php echo $row['vat']?><span></span></td>
            </tr>
            <tr>
                <th><span>Total</span></th>
                <td><span data-prefix>Rs. </span><span><?php echo $row['total_Amount']?></span></td>
            </tr>
            <tr>
                <th><span>Amount Paid</span></th>
                <td><span data-prefix>Rs. </span><span><?php echo $row['paid_amount']?></span></td>
            </tr>
            <tr>
                <th><span>Balance Due</span></th>
                <td><span data-prefix>Rs. </span><span><?php echo $row['payment_due']?></span></td>
            </tr>
        </table>
    </article>
    <aside>
        <div>
            <p class="thanksline">Thankyou for shopping.</p>
        </div>
    </aside>
    <!-- 
// Add header to load pdf file
// $file = "file.pdf";
// header('Content-type: application/pdf'); 
// header('Content-Disposition: inline; filename="'.$file.'"'); 
// header('Content-Transfer-Encoding: binary'); 
// header('Accept-Ranges: bytes'); 
// @readfile($file);  -->

</body>

</html>