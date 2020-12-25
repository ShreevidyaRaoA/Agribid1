
<!DOCTYPE html>
<html>
<head>
  <title>crop shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Handlee&display=swap" rel="stylesheet"1>
<style>
  body{
  height: 100%;
  margin: 0;
 font-family: 'Handlee', cursive;
 background-image: url(sketch1.png);
 height: 100vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position:relative;
}
ul{
  float: left;
  list-style-type: none;
  font-size: 20px;
  margin: 25px;
}
ul li{
  display: inline-block;
}
ul li a{
  text-decoration: none;
  color:black;
  font-weight: bold;
  padding: 10px 30px;
  border:3px solid #ffc107;

}
ul li a:hover{
  background-color: #124b7963;
  transition: 0.6s ease;
}

.title{
  position: absolute;
  font-size: 20px;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
  border: 3px solid #f1f1f1;
  padding: 20px;
  background-color: rgba(0,0,0, 0.4);

}


</style>
</head>
<body>
     <div>
      <ul>
        
        <li><a href="" style="text-decoration:none" onclick="openPage()">About</a></li>
        <li><a href="" style="text-decoration:none" onclick="openPage()">Contact</a></li>
        <li><a href="choose.php" onclick="openPage()">LOGIN</a></li>
        

      </ul>
    </div>
    <div class="title">
      <h1>WELCOME TO AGRIBID</h1>
      <p>"Home Of The Freshest Produce"</p>
    </div>
  
</body>
</html>
