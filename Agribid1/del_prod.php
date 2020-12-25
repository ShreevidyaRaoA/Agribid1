<!DOCTYPE html>
<html>
<head>
	<title>sold</title>
	<style>
		body{
				margin:0;
			padding: 20px;
			text-align: center;
			font-family: cursive;
 background-image: linear-gradient(to right top,#27FE00,#00DE74,#00BA9C,#0094A2,#006D89,#2F4858);
background-position: center;

 min-height: 90vh;
}
::placeholder{
	color: black;
	font-size: 19px;
}
.text{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px;
	margin: 8px;
}
.text input{
	border:none;
	outline: none;
	font-size: 20px;
	background: none;
	color: black;
	border-width: medium;
	border-bottom: 1px solid black;

}
.btn{
      width: 20%;
      background: none;
      cursor: pointer;
      margin: 12px;
      color:purple;
      border:2px solid #12042b;
      border-radius: 4px;
      font-weight: bold;
      font-size: 20px;

    }
    .btn:hover
    { background-image: linear-gradient(to right top,#E63946,#F7B2BD,#FFC9B5,#FFEEDB,#F1FAEE);

    }


	</style>
</head>
<body>
	<form action="del_prod.php" method="post">
		<div style="margin-top: 150px;">
		<div class="text">
			
<input type="text" name="sold" placeholder="enter the sold product name" >
		</div>
<button name="yes">sold</button><input type="button" onclick="window.location='farmer_menu.php'" value="<<"/>
	</div>
	
	<?php
	session_start();
	$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
$f_id=$_SESSION['f_id'];
	
	if (isset($_POST['yes'])) {
		$prod=$_POST['sold'];
	$s1="DELETE from prod_detail where f_id='$f_id' and prod_name='$prod'";
	$data1=mysqli_query($conn,$s1);
	if ($conn->query($s1) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
	$s2="DELETE from bid where f_id='$f_id' and prod_name='$prod'";
	$data2=mysqli_query($conn,$s2);
	if ($conn->query($s2) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
	$s3="DELETE from accepted where f_id='$f_id' and prod_name='$prod'";
	$data3=mysqli_query($conn,$s3);
	if ($conn->query($s3) === FALSE) {
    echo "Error creating table: " . $conn->error;
}


        header("Refresh:6; url=farmer_menu.php");
	}
	?>
	</form>
</body>
</html>