<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Lab05</title>
</head>
<body>
	<h1>VIP Members</h1>
	<form action = "member_add.php" method ="post">
		First Name: <input type="text" name="fname"><br>
		Last Name: <input type="text" name="lname"><br>
		Gender: <input type="radio" name="gender" value="M" checked="default">Male <input type="radio" name="gender" value="F">Female</br>
		E-mail Address: <input type="text" name="email"><br>
		Phone Number: <input type="text" name="phone"><br>
		<input type="submit" name="submit" value="post"> <input type="reset" value="reset" />
	</form>
	<p><a href="vip_member.php">Return to Home Page</a></p>
</body></html>