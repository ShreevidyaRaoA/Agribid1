<!DOCTYPE html>
<html>
<head>
	<title>bid details</title>
		<style>
				body{
			margin:0;
			padding: 0;
			text-align: center;
			font-family: cursive;

 background-image: linear-gradient(to right top,#27FE00,#00DE74,#00BA9C,#0094A2,#006D89,#2F4858);
background-position: center;
 min-height: 100vh;

	}
	table, th, td {
  border: 1px solid black;
height: 20px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  
}

#table_style td, #table_style th {
  border: 1px solid black;
  padding: 4px;
}

#table_style tr:nth-child(even){background-color: #0cdbc7a1;}

#table_style tr:hover {background-color:#0cdbc7a1 ;}

#table_style th {
  text-align: left;
  background-color: #09b40975;
  color: white;
}
	input{
		background: transparent;
		border:2px solid black;
		border-radius: 4px;
		font-size: 20px;
    margin-bottom:  20px;
	}
	::placeholder{
		color: purple;
	}
.btn{
      width: 7%;
      background: none;
      cursor: pointer;
      
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
	<h1>bid list</h1>
			
	<form action="bid_details.php" method="post">
		<input type="text" name="q" placeholder="search via product name">
		<button name="click" class="btn">search</button>
	</form>
  <form action="farmer_menu.php" method="post">
    
    <button name="back"><<</button>

  </form>
		<?php
		session_start();
  $servername = "localhost";
      $username = "root";
      $dbpassword = "";
      $dbname = "project";
      $f_id=$_SESSION['f_id'];
      $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
      if(isset($_POST['back'])){
  header("location: farmer_menu.php");
}
            if (isset($_POST['click'])) {
        $s=$_POST['q'];

        $sql="SELECT * from bid where f_id='$f_id' and prod_name like '%$s%' order by bid_price desc limit 3";
       $data=mysqli_query($conn,$sql);
      $total=mysqli_num_rows($data);
      ?>

      <div>
<form action="bid_details.php" method="post">
  <table align="center" id="table_style">
    <thead>
      <tr>
      <th>customer id</th> <th>bidded price</th>
    </tr>
    </thead>
    <tbody>
        <?php
        while ($res=mysqli_fetch_array($data)) {
        	$c_id=$res['c_id'];
        	$bid_price=$res['bid_price'];
        $prod=$res['prod_name'];
        $_SESSION['prod_name']= $prod;
        
      ?>
         <tr>
      <td>
        <input type="radio" name="select" required="" value="<?php echo $c_id;?>"><?php echo $c_id?>
        
      </td>
      <td><?php echo $bid_price?></td>
 
    </tr>


  <?php }}?>
</tbody>
</table>
<button name="done" >submit</button>
<?php 
if (isset($_POST['done'])) {
  $id=$_POST['select'];
  $_SESSION['c_id']=$id;
  $_SESSION['f_id']=$f_id;
  echo $f_id;
  $prod= $_SESSION['prod_name'];
  
    $sql2="select *from farm_reg where f_id='$f_id'";
   $data=mysqli_query($conn,$sql2);
      $total=mysqli_num_rows($data);
        while ($res=mysqli_fetch_array($data)) {
        $f_name= $res['f_name'];
        $city= $res['city'];
        $state= $res['state'];

      }
      $sql = "INSERT INTO accepted (f_name,f_id,prod_name,c_id,address) values('$f_name','$f_id','$prod','$id','$address')";
      if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
else {

        header("Refresh:3; url=bid_details.php");
}
}
?>
</form>

</body>
</html>