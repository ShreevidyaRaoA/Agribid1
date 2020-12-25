<!DOCTYPE html>
<html>
<head>
	<title>delete farmer account</title>
	<style type="text/css">
		
		body{
				margin:0;
			padding: 20px;
			text-align: center;
			font-family: cursive;
 background-image: linear-gradient(to right top,#27FE00,#00DE74,#00BA9C,#0094A2,#006D89,#2F4858);
background-position: center;

 min-height: 100vh;
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

<form action="del_farm.php" method="post">
	
	<div style="margin-top: 150px;">
<?php
echo "are you sure you want to delete your account?";
?><br>
	<button name="yes" class="btn">yes</button>
<button name="no" class="btn">no</button><input type="button" onclick="window.location='farmer_menu.php'"  value="<<"/>

	<center>
	<?php
session_start();
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "project";
$f_id=$_SESSION['f_id'];

$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

if (isset($_POST['yes'])) {
	$sql="DELETE FROM farm_reg WHERE f_id = '$f_id'";
	$data=mysqli_query($conn,$sql);
	if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
else{
	echo "your account is deleted";
	header("Refresh:2; url=farmer_menu.php");
}
}
if (isset($_POST['no'])) {


        header("Refresh:0; url=farmer_menu.php");
	}
?>
</center>
</div>
</form>

</body>
</html>

