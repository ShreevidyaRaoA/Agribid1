<!DOCTYPE html>
<html>
<head>
	<title>
		customer login form
	</title>
  <style>
    
     *{
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: cursive;
}
body{
  min-height: 100vh;
  background-position: center;
  background-size: cover;
 background-image: linear-gradient(to right top,#27FE00,#00DE74,#00BA9C,#0094A2,#006D89,#2F4858);
  text-align: center;

}
.login-box{
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  
            border-style: none;
            border-radius: 20px;
            padding: 20px;
            background-color: #ffffff7d;

}
.textbox{

  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px;
  margin: 8px;
}
.textbox input{
  border:none;
  outline: none;
  font-size: 20px;
  background: none;
  color: black;
  border-width: medium;
  border-bottom: 1px solid black;

}
::placeholder{
  color: black;
}
.btn{
      width: 50%;
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
    <div class="login-box">
      <ins class="underline"><h2>login</h2></ins>
      <form method="post" action="customer_login.php">
        <div class="textbox">
        <input type="text" placeholder="customer's id" name="id" value="" required="">
      </div>
      <div class="textbox">
        <input type="password" placeholder="password" name="pass" value="" required="">
      </div>
      <div><button name="click" class="btn" >log-in</button>
      </div>
      <div>
        Don't have an account?<a href="reg_customer.php" onclick="openPage()">register</a>
      </div>
      </form>
      <form action="choose.php" method="post">
        
        <button name="back"><<</button>
      </form>
      <?php
      session_start();
      $servername = "localhost";
      $username = "root";
      $dbpassword = "";
      $dbname = "project";
      $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
      if(isset($_POST['back'])){
  header("location: farmer_menu.php");
}
      if(isset($_POST['click']))
      {
      $id=$_POST['id'];


      $pass=$_POST['pass'];
      $sql="select * from cust_reg where c_id='$id' and c_password='$pass'";
      $data=mysqli_query($conn,$sql);
      $total=mysqli_num_rows($data);

      while ($res=mysqli_fetch_array($data)) {
        $name=$res['c_name'];
        $id=$res['c_id'];
        if($total!=0){
          echo "logged in ";
          $_SESSION['name']=$name;
            $_SESSION['c_id']=$id;
            echo $_SESSION['c_id'] ;
            
        header("Refresh:3; url=button_page.php");
          exit;
        }
        else{
         echo "<font color=red><palign=center>incorrect</p></font> ";
         exit();

        header("Refresh:3; url=customer_login.php");
        }
      }
      }


      ?>
    </div>
</body>
</html>
