<!DOCTYPE html>
<html>
<head>
	<title>choose</title>
	<style type="text/css">
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
  overflow: hidden;

}
.main{
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);

            border-style: none;
            border-radius: 20px;
            padding: 30px;
            background-color: #ffffff7d;
            text-align: center;

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
	<div class="main">
		<h1>who are you...??</h1>
		<input type="button" onclick="window.location='farmer_login.php'" class="btn" value="Farmer"/>
		<input type="button" onclick="window.location='customer_login.php'" class="btn" value="Customer"/>
	</div>
</body>
</html>