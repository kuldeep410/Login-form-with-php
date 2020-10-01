<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style type="text/css">
		body {
			background-color: red;
			margin: 0px;
		}
	.uni {
 		width: 500px;
 		height: auto;
 		padding: 20px 30px;
 		background-color: #fff;
 		border-radius: 10px;
 		box-shadow: 0 0 20px 0 #000;
 		margin-left: 150px;
 		margin-top: 150px;	
 		position: relative;
	}
	.user-img
	{
		width: 80px;
		height: 80px;
		background-size: 100%;
		position: absolute;
		top:-22px;
		right: 250px;
	}	
	.form_input
	{
		text-align: center; 
		padding: 8px 0px;
		border: 1px;
		background-color: #d3d3d3;
		border-radius: 5px;
	}
	#sub
	{
		border-radius: 10px;
		height: 50px;
		width: 200px;
		font-weight: bold;
		font-size: 30px;
		background-color: blue;
		border: none;
	}
	#user
	{
		border-radius: 10px;
		height: 40px;
		width: 300px;
		font-weight: normal;
		font-size: 30px;
		background-color: pink;	
		text-align: center;
	}
	#email
	{
		border-radius: 10px;
		height: 40px;
		width: 300px;
		font-weight: normal;
		font-size: 30px;
		background-color: pink;	
		text-align: center;
	}
	#pass
	{
		border-radius: 10px;
		height: 40px;
		width: 300px;
		font-weight: normal;
		font-size: 30px;
		background-color: pink;	
		text-align: center;
	}
	#conf
	{
		border-radius: 10px;
		height: 40px;
		width: 300px;
		font-weight: normal;
		font-size: 30px;
		background-color: pink;	
		text-align: center;
	}
	#sub:hover
	{
		cursor: pointer;
		color: pink;
	}

	</style>
</head>
<body>
<form method="POST" action="helperlogin.php" enctype="multipart/form_input">
		<center>
	<div class="uni">
	<label><center><h1>Create Profile</h1></center></label>
	<img src="gkt.png" class="user-img">
	<div class="form_input">
		<input type="text" name="username" placeholder="User name" id="user">
	</div>
	<div class="form_input">
		<input type="password" name="password" placeholder="Password" id="pass">
	</div>
	<div class="form_input">
		<input type="password" name="conf_password" placeholder="Conf_password" id="conf">
	</div>
	<div class="form_input">
		<input type="submit"value="Submit" id="sub">
		<div>
		<a href="http://localhost/phpmysql/signinsocial.php" style="list-style-type: none;"><h6>You have created Account</h6></a>
		</div>
	</div>
</div>
</center>
</form>
</body>
</html>