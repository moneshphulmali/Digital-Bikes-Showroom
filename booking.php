<html>
<head><title> booking</title>
<style>
body{
overflow-x:hidden;
background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('b.jpg'); 
background-size:cover;
}
div{
	position:relative;
height:740px;
width:1320px;
border:1px solid lightblue;
left:-3px;
top:10px;
border-radius:10px;

}
p{
	position:relative;
	font-size:40PX;
	text-align:center;
color:lightblue;
top:-35px;
}

h1{
	position:relative;
	top:40px;
	left:80px;
	color:white;
	font-size:30px;
 
}
.i{
	position:relative;
	left:400px;
	top:-10px;
	height:40px;
	width:210px;
	border-radius:10px;
	font-size:25px;
	border:1px solid white;
	background:transparent;
		color:white;

}
.p{
	position:relative;
	left:700px;
	top:-405px;
	
}
.ii
{
	position:relative;
	left:970px;
	top:-465px;
	height:40px;
	width:210px;
	border-radius:10px;
		font-size:25px;
		border:1px solid white;
		background:transparent;
		color:white;

}
.i1{
	position:relative;
	left:400px;
	top:-310px;
	height:40px;
	width:100px;
	border-radius:2px;
	font-size:30px;
	background:transparent;
	color:white;
border:1px solid white;
}

.home
{
	font-size:30px;
	color:white;
	position:relative;
	top:-100px;
	left:300px;
	border:1px solid white;
height:40px;
	width:80px;

}
.home:hover{
	text-shadow:3px 4px 20px lightblue;
	box-shadow:0px 0px 80px 0px blue; 
	border:1px solid white;
	height:40px;
	width:80px;
	background-color:white;
color:black;
}
.instollment{
	font-size:30px;
	color:white;
	position:relative;
	top:-190px;
	left:900px;
	border:1px solid white;
	height:40px;
	width:147px;
}
.instollment:hover{
	box-shadow:0px 0px 80px 0px blue; 
	text-shadow:3px 4px 20px lightblue;
	background-color:white;
color:black;
}
a{
text-decoration:none;
}
.b{
position:relative;
left:200px;
top:100px;
color:yellow;
text-decoration:none;
font-size:25px;
}
.b:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
	height:30px;
	width:70px;
	border-radius:8px;
color:white;
background-color:black;
}
	
.b1{
	position:relative;
left:400px;
top:53px;
color:yellow;
text-decoration:none;
font-size:25px;
}
.b1:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
	height:30px;
	width:80px;
	border-radius:8px;
color:white;
background-color:black;
}
.b2{
	position:relative;
	left:600px;
	top:7px;
	color:yellow;
	text-decoration:none;
	font-size:25px;
}
.b2:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
color:white;
height:30px;
	width:95px;
	border-radius:8px;
	background-color:black;
}
.b3{
	position:relative;
	left:790px;
	top:-38px;
	color:yellow;
	text-decoration:none;
font-size:25px;
	
}
.b3:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
height:30px;
	width:130px;
	border-radius:8px;	
color:white;
background-color:black;
}
.b4{
	position:relative;
	left:1000px;
	top:-85px;
	color:yellow;
	text-decoration:none;
font-size:25px;
	
}
.b4:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
height:30px;
	width:105px;
	border-radius:8px;	
color:white;
background-color:black;
}

</style>
<body>
<a href="home.php"><h1 class="b">Home</h1></a>
<a href="about.php"><h1 class="b1">About</h1></a>
<a href="booking.php"><h1 class="b2">Booking</h1></a>
<a href="ins1.php"><h1 class="b3">Installment </h1></a>

<a href="feedback.php"><h1 class="b4">Feedback</h1></a>


<div>
<form method="POST">

<p>BOOKING</p>
<h1>Name</h1>
<input class="i" type="text"placeholder="Name" name="d1" required>
<h1>Address</h1>
<input class="i" type="text"placeholder="Address" name="d2" required>
<h1>Date</h1>
<input class="i" type="date" placeholder="Date" name="d3" required>
<h1>E_mail</h1>
<input class="i" type="email"placeholder="E_mail" name="d4" required>
<h1 class="p">Bike_name</h1>
<select class="ii" type="text"placeholder="Bike-name" name="d5" required>
<option value="hf delux">hf delux</option>
<option value="honda shine">honda shine</option>
<option value="pulser">pulser</option>
<option value="activa">activa</option>
<option value="xl tvs">xl tvs</option>
<option value="auro">auro</option>
</select>
<h1 class="p">Mobile_no</h1>
<input class="ii" type="text" maxlength="10" min="10" placeholder="Mobile_no" name="d6" required>
<h1 class="p">Delivery_date</h1>
<input class="ii" type="date" placeholder="Delivary_date" name="d7" required>
<h1 class="p">Time</h1>
<input class="ii" type="time" placeholder="Time" name="d8" required>

<input class="i1" type="Submit" onclick="av();" name="ok" value="ok">
</div>
<a href="home.php"> <h5 class="home">Home</h5></a>
<a href="ins1.php"> <h5 class="instollment">Installment</h5></a>
<script>
function av()
{
alert('Booking successfully');
}
</script>
<?php
include("conn.php");
session_start();
if(isset($_POST['ok']))
{
$i1=$_POST['d1'];
$i2=$_POST['d2'];
$i3=$_POST['d3'];
$i4=$_POST['d4'];
$i5=$_POST['d5'];
$i6=$_POST['d6'];
$i7=$_POST['d7'];
$i8=$_POST['d8'];

$query="insert into booking values('$i1','$i2','$i3','$i4','$i5','$i6','$i7','$i8');";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
}
?>
</table>
</form>
</body>
</html>