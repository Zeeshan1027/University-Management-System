<?php
	session_start();
	require "php/config.php";
	require_once "php/functions.php";
	$user = new login_registration_class();
	$sid = $_SESSION['sid'];
	$sname = $_SESSION['sname'];
	
	if(!$user->getsession()){
		header('Location: st_login.php');
		exit();
	}
?>

<?php 
$pageTitle = "Courses Registered";
include "php/headertop.php";
?>
<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<h3 style="font-size:18px;text-align:center;background:#1abc9c;color:#fff;padding:10px;margin:0">Courses Registered</h3>
<div class="Table_Head">
<center>
<table border="1">
<thead>
<tr id="Row1">
<th>S.No.</th>
<th>Course Code</th>
<th>Course Name</th>
<th>Credits</th>
</tr>
</thead>
</div>
<tbody>
<tr>
<td>1</td>
 
<td>CSE4015</td>
<td>Human Computer Interaction</td>
<td>4</td>
</tr>
<tr>
<td>2</td>
<td>CSE4001</td>
<td>Software Engineering</td>
<td>4</td>
</tr>
<tr>
<td>3</td>
<td>CSE3501</td>
<td>Information Security and Anlaysis</td>
<td>4</td>
</tr>
<tr>
<td>4</td>
<td>CSE3013</td>
<td>Artificial Intelligence</td>
<td>4</td>
</tr>
<tr>
<td>5</td>
<td>CSE3002</td>
<td>Internet and Web Programming</td>
<td>4</td>
</tr>
</tbody>
</table>
<br>
<br>
</center>
</body>
</html>
<?php include "php/footerbottom.php";?>
