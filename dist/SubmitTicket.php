<?php include 'include/connection.php'; ?>
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
    <link href="./ticket_css/style.css" rel="stylesheet"><!-- 
    <link rel="shortcut icon" href="https://www.hosterpk.com/wp-content/themes/hosterpk/32x32.ico"> -->
    <link rel="stylesheet" id="RMFtooltip-css-css" href="./ticket_css/responsive-tooltip.css" type="text/css" media="all">

y
<!-- META TAGS -->
<!-- Styling -->
<link href="./ticket_css/css" rel="stylesheet">
    <link href="./ticket_css/all.css" rel="stylesheet">
<link href="./ticket_css/fontawesome-all.min.css" rel="stylesheet">
<link href="./ticket_css/custom.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="./Submit Ticket - HosterPK Pvt Ltd_files/scripts.min.js.download"></script>


    

</head>
<body data-phone-cc-input="" class="">
<div class="mm-page"><div id="main-body">
    <div class="container">
        <div class="row">
            <div style="margin-left: auto; margin-right: auto; width: 95%; margin-top:10px;">

                                <!-- Container for main page display content -->
<?php
$name = '';
$mail = '';
$subj = '';
$dept = '';
$priority = '';
$msg = '';
$id = "";
if(isset($_GET['id'])){
    $id= $_GET['id'];
}                                        
?>                                                            
                    


<form method="POST" enctype="multipart/form-data" role="form">
<?php $data = mysqli_query($con,"SELECT * from ticket where `id` = '$id'");
                             $get = mysqli_fetch_assoc($data);
if(isset($_GET['id'])){
    $name = $get['name'];
    $mail = $get['email'];
    $subj = $get['subject'];
    $dept = $get['dept'];
    $priority = $get['priority'];
    $msg = $get['message'];
}                                                         

                             ?>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="inputName">Name</label>
            <input type="text"  name="name" id="inputName" value="<?php echo $name ?>" class="form-control tooltip-test" title="Tooltip">
        </div>
        <div class="form-group col-sm-5">
            <label for="inputEmail">Email Address</label>
            <input type="email" name="email" id="inputEmail" value="<?php echo $mail ?>" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-10">
            <label for="inputSubject">Subject</label>
            <input type="text" name="subject" id="inputSubject" value="<?php echo $subj ?>" class="form-control">

        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-3">
            <label for="inputDepartment">Department</label>
            <select name="dept" id="inputDepartment" class="form-control" value="<?php echo $dept ?>" onchange="refreshCustomFields(this)">
                                    <option value="sales">
                        Sales
                    </option>
                                    <option value="abuse">
                        Abuse
                    </option>
                                    <option value="billing">
                        Billing
                    </option>
                                    <option value="support" selected="selected">
                        Support
                    </option>
                            </select>
        </div>
                <div class="form-group col-sm-3">
            <label for="inputPriority">Priority</label>
            <select name="priority" id="inputPriority" value="<?php echo $priority ?>" class="form-control">
                <option value="High">
                    High
                </option>
                <option value="Medium" selected="selected">
                    Medium
                </option>
                <option value="Low">
                    Low
                </option>
                </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputMessage">Message</label>
        <div class="md-editor" id="1606768371469"><textarea name="message" id="inputMessage" rows="12" class="form-control markdown-editor md-input" data-auto-save-name="client_ticket_open" style="resize: vertical;"><?php echo $msg; ?></textarea><div class="md-fullscreen-controls"><a href="https://www.hosterpk.com/clientarea/submitticket.php?step=2&amp;deptid=1#" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a></div></div>
    </div>

    <div class="row form-group">
        <div class="col-sm-12">
            <label for="inputAttachments">Attachments</label>
        </div>
        <div class="col-sm-9">
            <?php 
            if (isset($_GET['id']))
            {
echo ('<img src="'.$get["screenshot"].'" width="200" onclick="window.open(this.href, "_blank", "left=20,top=20,width=500,height=500,toolbar=1,resizable=0"); return false;">

<div class="form-group col-sm-3" style="float: right;">
            <label for="inputPriority"><b>Status</b></label>
            <select name="status" id="inputPriority" style="width: 200px" value="<?php echo $status ?>" class="form-control">
                <option value="2">
                    Completed
                </option>
                <option value="1" selected="selected">
                    Pending
                </option>
                <option value="0">
                    Cancelled
                </option>
            </select>
        </div>
    ');
            }
else{echo '       <input type="file" name="image" id="inputAttachments" class="form-control">
<div class="col-xs-12 ticket-attachments-message text-muted">
            Allowed File Extensions: .jpg, .gif, .jpeg, .png, .doc, .xls, .docx, .xlsx, .pdf
        </div>';}
            ?>
     
            <div id="fileUploadsContainer"></div>
        </div>

        



    </div>

    <p class="text-center">
        <?php if(isset($_GET['id'])) {
      
            echo '<button type="submit" name="alter" class="btn btn-primary mr-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Update</button>';

                        echo '<button type="button" class="ml-5 btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Reply</button>';
        } 
else {
                echo '        <input type="submit" name="submit" id="openTicketSubmit" value="Submit" class="btn btn-primary">';
}
        ?>
    </p>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo $mail ?>">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <!-- <input type="text" class="form-control" name="msg" id="message-text" style="height: 150px"> -->
          <input type="text" name="mssg">
          </div>
        <?php $mssg = $_POST['mssg'];
        echo $mssg;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="mailto:<?php echo $mail?>?subject=reply&message=<?php $msg ?>"><button type="button" class="btn btn-primary">Send message</button></a>
      </div>
    </div>
  </div>
</div>
</form>


    
<!--
<script type="text/javascript" src="https://www.hosterpk.com/wp-content/themes/hosterpk/js/jquery-2.1.1.min.js"></script>
-->
<!--  --><?php 

 if(isset($_GET['id'])) {
   if (isset($_POST['alter'])) {
         $name = $_POST['name'];
    $email = $_POST['email'];
    $subj = $_POST['subject'];
    $dept = $_POST['dept'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $msg = $_POST['message'];
    $tickid = $get['ticket_id'];
    $image_name = $get['screenshot'];
   $update = mysqli_query($con, "UPDATE ticket SET `name` = '$name', `email`='$email',`subject`='$subj', `dept`='$dept',`priority`='$priority',`status`='$status',`message`='$msg',`ticket_id`='$tickid' where id = '$id'");
if ($update) {
echo '<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Record has been updated successfully
</div>
';  }
else if (!$update) {
echo'<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Record was not updated <i>please recheck!</i>
</div>';
}
}
}
else{
    if (isset($_POST['submit'])) {

    $name = $_POST["name"];    
    $email = $_POST['email'];
    $subj = $_POST['subject'];
    $dept = $_POST['dept'];
    $priority = $_POST['priority'];
    $msg = $_POST['message'];
    $ticket_id = "";
    $tickid = str_shuffle($subj.'12345');

$image_name = $_FILES['image']['name'];
                $tmp_image_dir = $_FILES['image']['tmp_name'];
                $uploads = 'uploads/';
$images = $uploads.$image_name;
            if(empty($image_name) )
                        {
                          if (empty($name) || empty($email) || empty($subj) || empty($msg)) {
                           echo "<script> alert('Please fill out the fields'); </script>";
                          }
                          else{
   $insert = mysqli_query($con,"INSERT into ticket (name,email,subject,dept,priority,message,ticket_id,status) values('$name','$email','$subj','$dept','$priority','$msg','$tickid','pending')");
   if ($insert) {
echo $success = '<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Your mesage has been send successfully we will reach you soon!
</div>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Your ticket id is <strong>'.$tickid.'</strong>
</div>';
   }
   else if (!$insert) {
 echo $nosuccess = '<div class="alert alert-danger" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <strong>Error!</strong> Your compain was not send <i>please recheck!</i>
 </div>';
    echo "not done";
}

}
                        }
                        else if(!empty($image_name)) {

               if(move_uploaded_file($tmp_image_dir,$uploads.$image_name))
                        {

 if (empty($name) || empty($email) || empty($subj) || empty($msg)) {
                           echo "<script> alert('Please fill out the fields'); </script>";
                          }
                          else{      
       $insert = mysqli_query($con,"INSERT into ticket (`name`,`email`,`subject`,`dept`,`priority`,`message`,`screenshot`,`ticket_id`) values('$name','$email','$subj','$dept','$priority','$msg','$images','$tickid')");
if ($insert) {
echo '<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Your mesage has been send successfully we will reach you soon!
</div>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Your ticket id is <strong>'.$tickid.'</strong>
</div>';  }
else if (!$insert) {
echo '<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Your compain was not send please recheck!
</div>';
}
            else
            {
                echo "not uploaded";
            }  
}
}
else{
  echo "move upload issue";
}
}
       }

                           }    // tmp_dir       , uploads/file-name
?>