<html>
<title>
</title>
<head>
<link rel="stylesheet" href="css/bootstrap.css"/>
    <style>
        *{
            margin:0px;
        padding:0px;
        font-family:Monotype Corsiva;
        }
		 #container ul{
            list-style:none;
   }
   #container ul li{
       background-color:rgb(0,0,0,0.5);
       width:100px;
       border:2px solid black;
	   border-radius:20px;
       height:30px;
       display:block;
	   float:left;
       text-align:center;
       overflow:hidden;
	   margin-left:100px;
       color:aqua;
       font-size:20px;
       margin-top:30px;
   }
   #container ul li:hover{
       background-color:#388222;
   }
.box{
            height:100px;
            width:100%;
            background:rgb(0,0,0,0.5);
			border:2px solid black;
			border-radius:20px;
        }
.box1{height:100px;
  width:50%;
  margin-left:300px;
  margin-top:10px;
  background:rgb(0,0,0,0.5);
  border-radius:20px;
border:2px solid blue;
}
  
</style>
</head>
<body>
  <div id="container">
  <div class="box">
	<h1 style="text-align:center;margin-left:20px;color:black;margin-top:20px;">ADMIN-PANEL<h1>
	</div>
	<div class="box1"><ul>
	<a href="table1.php" ><li>update</li>
	<a href="table.php" ><li>delete</li>
	<a href="admin dashboard.php" ><li>add</li>
	</ul></div>
</body>
</html>
