<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="post"s>
{{csrf_field()}}
	<input type="text" name="username"  placeholder="name"><br>
	<input type="password" name="password" placeholder="pass"><br>
	<input type="submit" name="submit">



</form>
</body>
</html>