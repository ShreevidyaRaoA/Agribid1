<!DOCTYPE html>
<html>
<head>
	<title>choose</title>
	<style >
		body{
  height: 100%;
  margin: 0;
 font-family: 'Handlee', cursive;
 background-image: linear-gradient(to right top,#27FE00,#00DE74,#00BA9C,#0094A2,#006D89,#2F4858);
 height: 100vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
#pop{
  height: 280px;
  width: 550px;
  position: fixed;
  bottom: 50%;
  right: 50%;
  border:2px solid black;
  padding: 10px;
  border-radius: 20px;
  background-image: linear-gradient(to right top,#27FE00,#00DE74,#00BA9C,#0094A2,#006D89,#2F4858);
  text-align: center;
  }

.main{
				text-align: center;
				position:absolute;
				top: 50%;
      			left: 50%;
      			transform: translate(-50%,-50%);
      			
      			border-style: none;
      			border-radius: 20px;
      			padding: 20px;
            background-color: #ffffff7d

   }
   h1{
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

    }
    .btn:hover
    { background-image: linear-gradient(to right top,#E63946,#F7B2BD,#FFC9B5,#FFEEDB,#F1FAEE);

    }

	</style>
</head>
<body>
	<form action="button_page.php">
   <div class="main">

    <input type="button" onclick="window.location='customer_login.php'" style="float: left;" value="<<"/>
    <h1>what you want...??</h1>
    <input type="button" onclick="window.location='notify.php'" class="btn" value="Notification"/>
    <input type="button" onclick="window.location='bid.php'" class="btn" value="start bidding"/>

    <input type="button" onclick="window.location='del_cust.php'" class="btn" value="delete account"/>
        <input type="button" onclick="window.location='update_cust.php'" class="btn" value="edit account"/>

  </div> 
 
  </form>
  
</body>
</html>