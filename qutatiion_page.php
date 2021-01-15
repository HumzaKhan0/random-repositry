
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="
sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    
    <style type="text/css">
    th{
        background-color: rgb(90,90,90);
        color: white;
    }
    body{
        background-color: rgb(236,236,236);
    }
.row{
    background-color: white;
}
.btn {
  border-radius: 10px;
  padding: 5px 15px;
  font-size: 22px;
}

.blue {
  box-shadow: 0px 5px 0px 0px #3C93D5;
    background-color: #55acee;
}

.blue:hover {
  transition: 0.5s;
  background-color: #3C93D5;
}

</style>

    </head>
    <body class="sb-nav-fixed">
  <?php
  


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


                </div>
        <div id="layoutSidenav">
            <?php include 'include/dashboard.php'; ?>

            <?php $qtnumb = $_SESSION['qtnumb'];
echo $qtnumb;
 $select = mysqli_query($con,"SELECT * from qutation where `company_name` = '$qtnumb'");
$get = mysqli_fetch_assoc($select); 
$id = $get['id'];
$pm = "";
if (isset($_GET['id'])) {
$pm = $get['payment_method'];    
}

?>
  
<div class="row w-75 d-flex mx-auto col-md-* mt-5 mb-5 justify-content-center">
    <div class=" col-lg-11 mt-5 col-md-12 col-sm-12 bg-primary"><h1 class="text-center text-white bg-primary"><?php echo $get['company_name']; ?></h1></div>
    <div class="col-lg-11">

<form method="POST">
    <div class="col-lg-12">
        <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-5">
                                                        <div><h1 class="text-primary">Price Quote</h1></div>
                                                        <label class="large mb-1" for="inputFirstName"><b>Start date:</b> <?php echo date('Y.m.d'); ?></label>
                                                            
                                                    </div>
                                                </div>
     <div class="col-md-6">
                                                    <div class="form-group mt-5 d-flex justify-content-end">
                                                        <table class="table-bordered" style="float: right;"><tr><th scope="col">Qutation Date</th><th scope="col">Expiry Date</th><th >Qutation Number</th></tr><tr><td><?php echo date('y.m.d'); ?></td><td><input type="date" class="border-0" name="expdate" value="<?php echo $get['end_date'] ?>"></td><td><input type="text" class="border-0" name="qnum" value="<?php echo $get['qutation_number'];?>"></td></tr></table>
                                                    </div>
                                                     </div>
    </div>


<div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
            <div class="col-lg-5 col-md-5 col-sm-5 mt-5 bg-primary text-white"><b>Technology</b></div>
                                   <input class="mt-3" type="text" name="technology" value="<?php echo $get['technology'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex flex-row-reverse">
                                                    <div class="form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5 d-flex justify-content-end bg-primary text-white"><b>Features</b></div>
                                                        <input class="mt-3" type="text" name="features" value="<?php echo $get['feature'] ?>">
                                                    </div>
                                                </div>
                                            </div>
            <div class="form-row"> <div class="col-md-6"> <div class="form-group"> <div
class="col-lg-5 col-md-5 col-sm-5 mt-5 bg-primary
text-white"><b>Requirement</b></div> <input class="mt-3" type="text"
name="requirement" value="<?php echo $get['requirement'] ?>"> </div> </div> <div class="col-md-6 d-flex
flex-row-reverse"> <div class="form-group"> <div class="col-lg-12 col-md-12
col-sm-12 mt-5 d-flex justify-content-end bg-primary text-white"><b>Payment
Method</b></div> <?php if (empty($pm)) { ?><select name="status" id="inputPriority" style="width: 180px"
value="<?php echo $status ?>" class="form-control mt-3"> <option value="Fund
Transfer"> Fund Transfer </option> <option value="Direct Deposit"
selected="selected"> Direct Deposit </option> <option value="Money Transfer">
Money Transfer </option> </select><?php } else if(!empty($pm)){?><input class="mt-3" type="text"
name="requirement" value="<?php echo $get['payment_method'] ?>"><?php } ?> </div> </div> </div>
                    <?php if (isset($_GET['id'])) { } else{?><div class="col"></div><div class="col text-center mb-5">  <button type="submit" name="submit" class="btn blue">Submit</button></div><div class="col"></div> <?php } ?>
</form> 
<?php if(isset($_POST['submit'])){
$qdate = date('y.m.d');
$expdate = $_POST['expdate'];
$qnum = $_POST['qnum'];
$sdate = date('Y.m.d');
$technology = $_POST['technology'];
$features = $_POST['features'];
$requirement = $_POST['requirement'];
$paymeth = $_POST['status'];
$update = mysqli_query($con,"UPDATE qutation SET `technology` = '$technology',`feature` = '$features' , `requirement` = '$requirement', `payment_method` = '$paymeth' Where `id` = '$id'");
} ?>
</div>
</body>
</html>