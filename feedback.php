<html>
<head>
<title>feedback</title>
<style>
body{
	 background:linear-gradient(blue,aqua,red,blue);
overflow-x:hidden;
}
.b{
position:relative;
left:200px;
top:100px;
color:yellow;
text-decoration:none;
}
.b:hover{
	text-shadow:3px 4px 20px lightblue;
	border:1px solid yellow;
	height:40px;
	width:90px;
	border-radius:8px;
color:white;
background-color:black;
}
	
.b1{
	position:relative;
left:400px;
top:43px;
color:yellow;
text-decoration:none;

}
.b1:hover{
	text-shadow:3px 4px 20px lightblue;
	border:1 px solid blue;
	height:40px;
	width:100px;
	border-radius:8px;
color:white;
background-color:black;
}
.b2{
	position:relative;
	left:580px;
	top:-14px;
	color:yellow;
	text-decoration:none;
	
}
.b2:hover{
	text-shadow:3px 4px 20px lightblue;
	border:1px solid red;
color:white;
height:40px;
	width:120px;
	border-radius:8px;
	background-color:black;
}
.b3{
	position:relative;
	left:780px;
	top:-71px;
	color:yellow;
	text-decoration:none;

	
}
.b3:hover{
	text-shadow:3px 4px 20px lightblue;
	border:1px solid lightblue;
height:40px;
	width:160px;
	border-radius:8px;	
color:white;
background-color:black;
}
.b4{
	position:relative;
	left:1000px;
	top:-128px;
	color:yellow;
	text-decoration:none;

	
}
.b4:hover{
	text-shadow:3px 4px 20px lightblue;
	border:1px solid white;
height:40px;
	width:130px;
	border-radius:8px;	
color:white;
background-color:black;
}

.o{
	position:relative;
	top:-10px;
	border:1px solid white;
	height:900px;
	width:1330px;
	border-radius:20px;
}
.n{
position:relative;
	top:20px;
    left:40px;
	font-size:30px;
	color:white;
}	
.n1{
position:relative;
	top:-520px;
    left:660px;
	font-size:30px;
	color:white;
}	

.i
{
	position:relative;
	top:-43px;
    left:250px;
	font-size:30px;
	color:white;
	border-radius:20px;
	background:transparent;
}

	.ii{
		
	position:relative;
	font-size:30px;
 color:white;
	left:-200px;
	TOP:200px;
	width:90px;
	background:transparent;
	}
.s{
		position:relative;
	font-size:30px;
 color:white;
	left:310px;
	TOP:30px;
	height:100px;
	width:800px;

	background:transparent;
}
a{
	text-decoration:none;
}
.facbook{
	position:relative;
	height:120px;
	width:120px;
	top:150px;
	left:200px;
	
	border-radius:10px;
}
.facbook:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}
.insta{
	position:relative;
	height:120px;
	width:120px;
	top:150px;
	left:500px;
	
	border-radius:10px;
}
.insta:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}
.google{
	position:relative;
	height:120px;
	width:120px;
	top:150px;
	left:800px;
	
	border-radius:10px;
}
.google:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}

div{
	background-color:black;
	height:800px;
	width:1330px;
	border-radius:10px;
}
h4{
	position:relative;
	color:white;
	font-size:25px;
	top:250px
}
h5{
	position:relative;
	color:white;
	font-size:25px;
	top:120px;
	left:950px;
}
h6{
	position:relative;
	color:white;
	font-size:80px;
	top:120px;
left:250px;
text-shadow:3px 2px 13px  red;
animation-name:av;
animation-iteration-count:10;
animation-duration:3s
}
@keyframes av{
	0%{
		color:red;
		text-shadow:3px 2px 50px  silver;
	}
	20%{
		color:blue;
		text-shadow:3px 2px 50px  yellow;
	}
	40%{
		color:aqua;
		text-shadow:3px 2px 50px  syn;
	}
	60%{
		color:yellow;
		text-shadow:3px 2px 50px  green;
	}
	80%{
		color:silver;
		text-shadow:3px 2px 50px  white;
	}
	100%{
		color:red;
		text-shadow:3px 2px 50px  blue;
	}
}
a{
	color:white;
}
	
</style></head>
<a href="home.php"><h1 class="b">Home</h1></a>
<a href="about.php"><h1 class="b1">About</h1></a>
<a href="booking.php"><h1 class="b2">Booking</h1></a>
<a href="ins1.php"><h1 class="b3">Installment </h1></a>
<a href="feedback.php"><h1 class="b4">Feedback</h1></a>
<body>
<h3 class="o">
<form method="POST">
<h2>feedback</h2>
<p class="n">name:</p>
<input class="i"type="text" placeholder="name"  name="v1" required>
<p class="n">mobile no:</p>
<input class="i"type="number" maxlength="10" min="10" placeholder="mo.no" name="v2" required>
<p class="n">date</p>
<input class="i"type="date"name="v3" required>
<p class="n">suggest now</p>
<textarea class="s" value="" rows="4" cols="2" maxlength="100" min="100" placeholder="type feedback"  name="v4" required>
</textarea>
<input class="ii" onclick="av();" type="submit" value="ok"  name="ok">
<script>
function av()
{
alert('Thank your suggest me');
}
</script> 	
</h3>
<div>
<a href="https://www.facebook.com/"><image class="facbook" src="facbook.gif"></a>
<a href=""><image class="insta" src="insta.gif"></a>
<a href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://www.google.com%3Fhl%3Den-US"><image class="google" src="google.png"></a>
<h4> whatsapp now:9575250156 mr.Monesh Phulmali</h4>

<h5><a href="https://mail.google.com/mail/u/0/#inbox">monesh@gmail.com</a></h5>

<h6>***Thank for join us***</h6>
<?php
include('conn.php');
session_start();
if(isset($_POST['ok']))
{
$b1=$_POST['v1'];
$b2=$_POST['v2'];
$b3=$_POST['v3'];
$b4=$_POST['v4'];
$query="insert into fb values('$b1','$b2','$b3','$b4');";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
}
?>
</div>
</form>
</body>
</html>