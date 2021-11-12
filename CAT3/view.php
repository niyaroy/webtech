<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><H1>  Student Information to VIEW</H1></p>
<p>
   
  <a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View </a>
<a href="edit.php">Edit </a>  
<a href="delete.php">Delete </a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Stu-name</strong></th>
<th><strong>Age</strong></th>
<th><strong>gender</strong></th>
<th><strong>cource</strong></th>
<th><strong>address</strong></th>
<th><strong>edit</strong></th>
<th><strong>delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from stuinfo ORDER BY id desc";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["age"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>"> Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>"> Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>