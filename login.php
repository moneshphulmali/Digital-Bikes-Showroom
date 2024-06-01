<html>
<head>
<title> loginform</title>

<style>
body{
	position:fixed;
animation-iteration-count:4;
animation-duration:2s;
animation-name:av;
background-color:thistle;
}
@keyframes a{
	0%{
		background-size:cover;
		position:fixed;
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('welcome.jpg');
	}
	25%{
				background-size:cover;
		position:fixed;
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('ragi.jpg');
	}
	50%
	{
				background-size:cover;
		position:fixed;
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('home.jpg');
	}
	75%{
				background-size:cover;
		position:fixed;
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('welcome.jpg');]
	}
	100%{
				background-size:cover;
		position:fixed;
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('welcome.jpg');
}}
.r{
	position:relative;
	left:10px;
	color:black;
	font-size:18px;
     top:-30px;
	 heigth:20px;
	 width:100px;
	 border:1px solid black;
     border-radius:5px;
}
.r:hover{
	background-color:black;
	color:white;
}

.r1{
	position:relative;
	left:270px;
	color:black;
	font-size:18px;
     top:-95px;
	 heigth:20px;
	 width:50px;
	 border:1px solid black;
     border-radius:5px;
    
      }
.r1:hover{
	background-color:black;
	color:white;
   
}
a{
	text-decoration:none;
}
div{
		background-color:lightcyan;
}
.icon{
	position:relative;
	height:100px;
	width:100px;
	top:5px;
	left:130px;
	
}
.icon:hover
{
	background-color:blue;
}


div{

	
	
	border:2px solid black;
	border-radius:10px;
	position:relative;
	left:700px;
	top:-295px;

	height:390px;
	width:350px;

}
div:hover{
box-shadow:0px 2px 240px 30px green;

}
.i{
	position:relative;
	left:90px;
	top:-5px;
font-size:35px;

}

.i1{
	position:relative;
	top:-12px;
	left:90px;
	height:35px;
	border-radius:10px;
		border-color:red;
}
.i:hover{
	box-shadow:0px,0px,120px,0px yellow;
}
.i2
{
	position:relative;
	top:40px;
	left:-50px;
	height:30px;
	width:80px;
	border-radius:10px;
}
.i2:hover{
	background-color:black;
	color:white;
}

img{
	position:relative;
	height:390px;
	width:350px;
	top:100px;
	left:330px;
	border-radius:10px;
	
	
}
img:hover{
	
	box-shadow:0px 23px 260px 20px blue;
}
</style>
<body>
<img src="login.jpg">
<div>
<img class="icon" src="loginicon.png">
<form method="POST" action="">
<h1 class="i">Your Name</h1>
<input class="i1" type="text" placeholder="name" name="p1" required>
<h1 class="i">Password</h1>
<input class="i1" type="password" maxlength="8" min="8" placeholder="password" name="p2" required>

<input class="i2" onclick="av();" type="submit" value="ok" name="k">
<h6 class="r"><a href="ragi.php">Registration</a></h6>
<h6 class="r1"><a href="userreset.php">Reset</a></h6>
<script>
	function av()
{
alert('login successfully');
}
</script>
<?php
error_reporting(0);
include('conn.php');
session_start();
	if(isset($_POST['k']))
{
	$u=$_POST['p1'];
	$p=$_POST['p2'];
	    $query="select *from ragi where name='$u' and password='$p';";
	$result=mysqli_query($conn,$query);
    $data=mysqli_num_rows($result);
	if($data==1)
	{
	echo"login successfully";
	header('location:home.php');
	}
	else
	{
	echo"you have entered incorrect password";
 
}	 }
	
	?>
	</body>
</form>
</div>
</head>
<html>