<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login to Studee WebApp</title>
<link rel="icon" href="favicon.png">
<style>
   
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:0;
border: 0.2px solid #ffffffff;
padding:10px 40px 25px;
margin-top:120px;
box-shadow: 0 0 20px rgba(0,0,0,0.15);
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
h1{
	color: #40739e;
}
input[type=submit]{
width:100%;
background-color:#40739e;
color:#fff;
border:2px solid #40739e;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Student login</h1>
<form action="function.php" method="POST" style="text-align:center;">
	<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
	<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
	<input type="submit" value="Login" name="submit">
</form>
</body>
<script>
</script>
</html>