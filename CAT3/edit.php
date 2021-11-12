<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from stuinfo where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><H1>  Student Information to UPDATE.</H1></p>
<p>
   
  <a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a>
<a href="edit.php">Edit Records</a>  
<a href="delete.php">Delete Records</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
    $id=$_REQUEST['id'];
    $stu-name =$_REQUEST['name'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $address= $_REQUEST['address'];
    $submittedby = $_SESSION["username"];
$update="update new_record set trn_date='".$trn_date."',
name='".$name."', age='".$age."',
submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value = "<?php echo $row['id'];?>"/>
<p>
<input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>"/></p>
<p>
<input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['age'];?>"/></p>

<p>
<input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['gender'];?>"/></p>

<p>
<input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['cource'];?>"/></p>

<p>
<input type="text" name="age" placeholder="Enter Age" 
required value="<?php echo $row['address'];?>"/></p>

<p><input name="submit" type="submit" value="Update"/></p>s
</form>
<?php } ?>
</div>
</div>
</body>
</html>