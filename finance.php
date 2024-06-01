<html>
<head>
<title>
finance</title>
<style>
body{
overflow-x:hidden;
overflow-y:hidden;
background-color:lightblue;
}
h1{
	position:relative;
	top:-5px;
	height:80px;
	width:1368px;
	background-color:black;
	color:white;
	left:-10px;
	text-align:center;
	font-size:60px;
	}
  .i1{
 position:relative;
 height:40px;
 width:360px;
 top:160px;
 left:280px;
 border:2px solid black;
  font-size:20px;
  border-radius:10px;

  }

.i2{
 position:relative;
 height:40px;
 width:360px;
 top:230px;
 left:-85px;
 border:2px solid black;
 font-size:20px;
  border-radius:10px;
  }

.i3{
 position:relative;
 height:40px;
 width:360px;
 top:300px;
 left:-450px;
border:2px solid black;
font-size:20px;
  border-radius:10px;

  }
.i4{
 position:relative;
 height:40px;
 width:360px;
 top:325px;
 left:278px;
border:2px solid black;
font-size:20px;
  border-radius:10px;

  }
  .i5{
 position:relative;
 height:40px;
 width:360px;
 top:120px;
 left:320px;
border:2px solid black;
font-size:20px;
  border-radius:10px;

  }
  .i6{
 position:relative;
 height:40px;
 width:360px;
 top:185px;
 left:-45px;
border:2px solid black;
font-size:20px;
  border-radius:10px;

  }
.i7{
 position:relative;
 height:40px;
 width:360px;
 top:215px;
 left:685px;
border:2px solid black;
font-size:20px;
  border-radius:10px;

  }
.i8{
 position:relative;
 height:40px;
 width:360px;
 top:285px;
 left:321px;
border:2px solid black;
font-size:20px;
  border-radius:10px;

  }
.i9{
 position:relative;
 height:40px;
 width:160px;
 top:360px;
 left:-130px;
border:2px solid black;
font-size:20px;
  border-radius:15px;
  background-color:blue;
  color:white;
  }
h2{
position:relative;
left:530px;
top:-130px;
font-size:60px;
color:brown;
}
.im{
	position:relative;
	height:60px;
	width:60px;
    top:-280px;
	background-color:orange;
	border-radius:50%;
	left:20px;
}
.im:hover{
	box-shadow:0px 0px 80px 0px black;
}
</style>
</head>
<body>
<h1> Digital Bike Showroom </h1>

<form method="POST">
<input class="i1" type="text" maxlength="10" min="10" placeholder="Mobile no" name="t1" required=""> 
<input class="i2" type="text" placeholder="Name" name="t2" required="">
<input class="i3" type="text" placeholder="Last Name" name="t3" required="">
<input class="i4" type="email" placeholder="Email id" name="t4" required="">
<input class="i5" type="text" maxlength="6" min="6" placeholder="Pincode" name="t5" required="">
<select class="i6" type="text" placeholder="Bike Name" name="t6" required="">
<option value="hf delux">hf delux</option>
<option value="honda shine">honda shine</option>
<option value="pulser">pulser</option>
<option value="activa">activa</option>
<option value="xl tvs">xl tvs</option>
<option value="auro">auro</option>
</select>

<input class="i7" type="text" placeholder="Aadhar no" maxlength="12"  min="12" name="t7" required="">
<input class="i8" type="text" maxlength="10" min="10" placeholder="PAN Card no" name="t8" required="".>
<input  class="i9" onclick="av();" type="Submit"  value="Submit" name="k">
<h2> Apply Now</h2>

<a href="home.php"><image class="im" src="back.png"></a>
<script>
function av()
{
alert("applying successfully");
}
</script>
<?php
include("conn.php");
error_reporting(0);
session_start();
if(isset($_POST['k']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];
$f=$_POST['t6'];
$g=$_POST['t7'];
$h=$_POST['t8'];
$query="insert into finance values('$a','$b','$c','$d','$e','$f','$g','$h');";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
}
?>
</form>
</body>

</html>


