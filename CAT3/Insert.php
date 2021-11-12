<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
   
    $stu-name =$_REQUEST['name'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $address= $_REQUEST['address'];
    $submittedby = $_SESSION["username"];
    $ins_query="INSERT INTO `stuinfo`(`stu-id`, `stu_name`, `age`, `gender`, `course`, `address`) 
	VALUES ('101','yashashwini','22','female',' MCS','Bangalore')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br>
    </br>
<a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<div class="form">
<p><H1>  Student Information to INSERT.</H1></p>
<p>
   
  <a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a>
<a href="edit.php">Edit Records</a>  
<a href="delete.php">Delete Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>

<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input type="text" name="gender" placeholder="Enter gender" required /></p>
<p><input type="text" name="cource" placeholder="Enter cource" required /></p>
<p><input type="text" name="address" placeholder="Enter address" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>