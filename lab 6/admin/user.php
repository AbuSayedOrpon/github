<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lab 6 Practice</title>

	<link rel="stylesheet" type="text/css" href="../css/user.css">
</head>
<body>
	
	<!-- Menu section Starts -->
			<div class="welcome">
				<img src="https://cdn-icons-png.flaticon.com/512/456/456212.png">	
				<h1>Welcome ,<?php echo $_SESSION['name']; ?></h1>
				
			</div>

	<div class="menu">
		<div class="wrapper">
			<ul>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">View Profile</a></li>
				<li><a href="#">Edit Profile</a></li>
				<li><a href="changepassword.php">Change Password</a></li>
				<li><a href="../index.php">Logout</a></li>
				
			</ul>
		</div>
	</div>
	<!-- Menu section Ends -->









	<!-- Footer section Starts -->
	<div class="footer">
		<div class="wrapper">
			<p class="text-center">2021 All rights Developed By -<a href="Abu Sayed/">000</a></p>
		</div>
		
	</div>
	<!-- Footer section Ends -->


</body>
</html>

<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>