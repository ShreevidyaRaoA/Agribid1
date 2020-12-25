<!DOCTYPE html>
<html>
<head>
	<title>mssg</title>
</head>
<body>
	<form method="post" action="accept_mssg.php">
			<?php
			session_start();
      $servername = "localhost";
      $username = "root";
      $dbpassword = "";
      $dbname = "project";
      $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
      $c_id=$_SESSION['c_id'];
      $sql="select phone from cust_reg where c_id='$c_id'";
         $data=mysqli_query($conn,$sql);
     
      $total=mysqli_num_rows($data);
      while ($res=mysqli_fetch_array($data)) {
      	$p=$res['phone'];

      }
			?>
			<input type="number" name="phone" value="<?php echo $p?>">
			<textarea name="message" placeholder="message">congratulations</textarea>
			<button name="submit">send</button>
	</form>
</body>
</html>

