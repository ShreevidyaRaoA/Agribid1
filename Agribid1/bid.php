<!DOCTYPE html>
<html>
<head>
	<title>bid</title>
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
	<h1>bidding</h1>
		<p><?php
session_start();
echo "Hello, ";
echo $_SESSION['name'];
echo " bid for the necessary product";


?></p>
	<form action="bid.php" method="post">
		<input type="text" name="q" placeholder="search via product name">
		<button name="click" class="btn">search</button>  <button name="back"><<</button>
    <?php
if(isset($_POST['back'])){

  header("location: button_page.php");
}
    ?>
	</form>
<?php
  $servername = "localhost";
      $username = "root";
      $dbpassword = "";
      $dbname = "project";
      
      $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
      if (isset($_POST['click'])) {
        $s=$_POST['q'];
        

        $sql="SELECT t1.f_name, t2.f_id,t2.min_price,t2.quantity,t2.details,t2.prod_name FROM farm_reg t1, prod_detail t2
WHERE t1.f_id = t2.f_id and t2.prod_name like '%$s%'";
       $data=mysqli_query($conn,$sql);
     
      $total=mysqli_num_rows($data);

?>
 <div>
<form action="bid.php" method="post">
  <table align="center" class="table table-responsive">
    <thead>
      <tr>
      <th>farmer id</th> <th>farmer name</th> <th>min_price&nbsp</th> <th>quantity&nbsp</th><th>details</th>
    </tr>
    </thead>
    <tbody>
      
        <?php  while ($res=mysqli_fetch_array($data)) {
        $id=$res['f_id'];
        $min=$res['min_price'];
        $qt=$res['quantity'];
        $pn=$res['prod_name'];
        $details=$res['details'];
        $_SESSION['pn']=$pn;
        $fn=$res['f_name'];
        
       ?>
 
    <tr>
      <td>
        <input type="radio" name="select" value="<?php echo $id;?>"><?php echo $id?>
        
      </td>
      <td>
        <?php echo $fn?>
      
      </td>
      <td>
        <?php echo $min?>
      </td>
      <td>
        <?php echo $qt?>
      </td>
      <td><?php echo $details?>
      </td>

    </tr>


  <?php }?>
  <input type="number" name="bid" placeholder="bid price" required="">
  <button name="done">submit</button>

  </tbody>
    </table>
   
       
  
  <?php }?>
 </div>
 
<?php
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);


  if (isset($_POST['done'])) {
$id=$_POST['select'];
$prod_name=$_SESSION['pn'];
$bid_price=$_POST['bid'];
$c_id=$_SESSION['c_id'];

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO bid (f_id,c_id,prod_name,bid_price) values('$id','$c_id','$prod_name','$bid_price')";


if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
else{
  echo nl2br("you have bid successfully\n");

}

        $sql="SELECT max(bid_price) as bid_price,c_id,prod_name from bid where f_id='$id' and prod_name='$prod_name' order by bid_price ";
       $data=mysqli_query($conn,$sql);
      $total=mysqli_num_rows($data);
        while ($res=mysqli_fetch_array($data)) {
          echo nl2br("bid more for that product again.\n The heighest bid for ".$prod_name." is done by ");
          echo $res['c_id']." for Rs.".$res['bid_price'];

        header("Refresh:5; url=bid.php");
        }
}
?>
</form>
</body>
</html>

