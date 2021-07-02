<h1>Login Page</h1>
<form action="sub" method="post">
	@csrf

	<input type="text" name="Username" placeholder="Enter user id" >
	<br>
	<span style="color:red">@error('Username'){{$message}}@enderror</span>
	<br><br>
	<input type="password" name="Password" placeholder="Enter user password">
	<br>
	<span style="color:red">@error('Password'){{$message}}@enderror</span>
	<br><br>
	<button type = "submit">Login</button>
</form>