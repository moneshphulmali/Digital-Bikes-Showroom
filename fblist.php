<html>
<head>
<title>fblist</title>
<style>
body{
	
 background:linear-gradient(blue,aqua,red,blue);
overflow-x:hidden;
}
.b{
position:relative;
left:100px;
top:100px;
color:yellow;
text-decoration:none;
}
.b:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
	height:40px;
	width:90px;
	border-radius:8px;
color:white;
background-color:black;
}
	
.b1{
	position:relative;
left:300px;
top:45px;
color:yellow;
text-decoration:none;

}
.b1:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
	height:40px;
	width:155px;
	border-radius:8px;
color:white;
background-color:black;
}
.b2{
	position:relative;
	left:600px;
	top:-14px;
	color:yellow;
	text-decoration:none;
	
}
.b2:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
color:white;
height:40px;
	width:200px;
	border-radius:8px;
	background-color:black;
}
.b3{
	position:relative;
	left:880px;
	top:-71px;
	color:yellow;
	text-decoration:none;

	
}
.b3:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
height:40px;
	width:170px;
	border-radius:8px;	
color:white;
background-color:black;
}
.b4{
	position:relative;
	left:1200px;
	top:-130px;
	color:yellow;
	text-decoration:none;

	
}
.b4:hover{
	text-shadow:3px 4px 20px lightblue;
	border:2px dotted yellow;
height:40px;
	width:100px;
	border-radius:8px;	
color:white;
background-color:black;
}
a{
	text-decoration:none;
}
table,th ,td{
	border:1px solid white;
}
table {
	border-collapse:collapse;
	width:100%;
}
th{
color:black;
font-size:30px;
}
td{
color:white;
font-size:25px;
text-align:center;
}


</style></head>
<body>
<a href="adminhome.php"><h1 class="b">Home</h1></a>
<a href="bookinglist.php"><h1 class="b1">Bookinglist</h1></a>
<a href="inslist.php"><h1 class="b2">Installmentlist</h1></a>
<a href="fblist.php"><h1 class="b3">Feedbacklist </h1></a>
<a href="welcome.php"><h1 class="b4">Logout </h1></a>
<?php
include("conn.php");
$query="select *from fb;";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
if($table>0)
{
?>
<table>
<tr>
<th>name</th>
<th>mobile_no</th>

<th>date</th>
<th>suggestions</th>
</tr>
<?php
while($rows=mysqli_fetch_assoc($data))
{
echo"<tr>
<td>".$rows['name']."</td>
<td>".$rows['mobile_no']."</td>
<td>".$rows['date']."</td>
<td>".$rows['suggestions']."</td>
</tr>";
}
}
else
{
	echo"data not enter";

}



?>
</table>
</form>
</table>
</body>
<html>