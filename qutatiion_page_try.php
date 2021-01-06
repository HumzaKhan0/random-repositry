<?php include 'include/connection.php'; 
$id = $_GET['tickid'];
foreach ($_GET as $key => $id) {
$data2 = $_GET[$key] = base64_decode(urldecode($id));
echo $data2;
// $fetch = $con,"SELECT * from qutation where `qutation_id` = 'asdh2153hi4'"
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="
sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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
<body>
<?php $select = mysqli_query($con,"SELECT * from qutation where `qutation_number` = '$data2'");
$get = mysqli_fetch_assoc($select); ?>				
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
                                                        <table class="table-bordered" style="float: right;"><tr><th scope="col">Qutation Date</th><th scope="col">Expiry Date</th><th >Qutation Number</th></tr><tr><td><?php echo date('y.m.d'); ?></td><td><input type="date" class="border-0" name="expdate" value="<?php echo $get['end_date'] ?>"></td><td><input type="text" class="border-0" name="qnum" value="124deff345"></td></tr></table>
                                                    </div>
                                                </div>
                                            </div>


<div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
		    <div class="col-lg-5 col-md-5 col-sm-5 mt-5 bg-primary text-white"><b>Technology</b></div>
                                   <input class="mt-3" type="text" name="technology">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex flex-row-reverse">
                                                    <div class="form-group">
		    <div class="col-lg-12 col-md-12 col-sm-12 mt-5 d-flex justify-content-end bg-primary text-white"><b>Features</b></div>
                                                        <input class="mt-3" type="text" name="features">
                                                    </div>
                                                </div>
                                            </div>

<div class="form-row"> <div class="col-md-6"> <div class="form-group"> <div
class="col-lg-5 col-md-5 col-sm-5 mt-5 bg-primary
text-white"><b>Requirement</b></div> <input class="mt-3" type="text"
name="requirement"> </div> </div> <div class="col-md-6 d-flex
flex-row-reverse"> <div class="form-group"> <div class="col-lg-12 col-md-12
col-sm-12 mt-5 d-flex justify-content-end bg-primary text-white"><b>Payment
Method</b></div> <select name="status" id="inputPriority" style="width: 180px"
value="<?php echo $status ?>" class="form-control mt-3"> <option value="Fund
Transfer"> Fund Transfer </option> <option value="Direct Deposit"
selected="selected"> Direct Deposit </option> <option value="Money Transfer">
Money Transfer </option> </select> </div> </div> </div> </div> 

<div class="col"></div><div class="col text-center mb-5">  <button type="submit" name="submit" class="btn blue">Submit</button></div><div class="col"></div>
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
echo $sdate;
echo $expdate;
echo $qnum;
echo $technology;
echo $features;
echo $requirement;
echo $paymeth;
$update = mysqli_query($con,"UPDATE qutation SET `company` = '$name', `email` = '$email', `password` = '$password' Where `id` = '$id'");
} ?>

</div>
</body>
</html>