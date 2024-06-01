<html>
<head><title>welcome</title>
<style>
body{
	position:fixed;
background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('uhome.jpg');
	background-size:cover;
	}
.s{
position:relative;
letter-spacing:5px;
left:380px;
top:15px;
font-size:100px;
COLOR:white;
}
.s1
{
	position:relative;
	left:430px;
	top:10px;
	font-size:50px;
	color:aqua;
}
.f{
position:relative;
left:500px;
top:30px;
font-size:30px;
animation-duration:1.5s;
animation-iteration-count:1;
animation-name:f;
height:40px;
width:160px;
padding:2px;
border-radius:2%;
border:1px solid white;
color:lime;
}
@keyframes f{
	from{left:0px; top:-300px;}
	to{left:500px; top:30px;}
}
.f:hover{
color:black;
text-shadow:1px 0px white;
box-shadow:1px 1px  2px 2px blue;
background-color:white;
}
.f1{
position:relative;
left:700px;
top:-45px;
font-size:30px;
animation-duration:1.5s;
animation-iteration-count:1;
animation-name:f1;
height:40px;
width:170px;
padding:2px;
border-radius:2%;
border:1px solid white;
color:lime;
}
@keyframes {
	from{left:1370px; top:-255px;}
	to{left:700px; top:-45px;}
}

.f1:hover{
color:black;
text-shadow:1px 0px white;
box-shadow:1px 1px  2px 2px blue;
background-color:white;
}

.f2{
position:relative;
left:500px;
top:30px;
font-size:30px;
animation-duration:1s;
animation-iteration-count:1;
animation-name:f;
height:40px;
width:160px;
padding:2px;
border-radius:2%;
border:1px solid white;
color:lime;
}
@keyframes f{
	from{left:0px; top:300px;}
	to{left:500px; top:30px;}
}
.f2:hover{
color:black;
text-shadow:1px 0px white;
box-shadow:1px 1px  2px 2px blue;
background-color:white;
}
.f3{
position:relative;
left:700px;
top:-45px;
font-size:30px;
animation-duration:1s;
animation-iteration-count:1;
animation-name:f1;
height:40px;
width:170px;
padding:2px;
border-radius:2%;
border:1px solid white;
color:lime;
}
@keyframes f1{
	from{left:1370px; top:250px;}
	to{left:700px; top:-45px;}
}

.f3:hover{
color:black;
text-shadow:1px 0px white;
box-shadow:1px 1px  2px 2px blue;
background-color:white;
}

a{
	text-decoration:none;
}
.s1{
position:relative;

	top:10px;
left:430px;


animation-duration:1s;
animation-iteration-count:1;
animation-name:d1;
}
@keyframes d1{
	from{left:430px; top:250px;}
	to{left:430px; top:10px;}
}

</style>
</head>
<body>
<div class="b">
<h1 class="s"><b>WELCOME</b></h1>
<h2 class="s1"> Digital Bike Showroom<h2>
<a href="login.php"><p class="f">User   login</p></a>
<a href="ragi.php"><p class="f1">Registration</p></a>
<a href="adminlogin.php"><p class="f2">Admin  login</p></a>
<a href="adminregi.php"><p class="f3">Registration</p></a>
</div>
</body>
</html>