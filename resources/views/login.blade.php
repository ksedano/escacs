<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	@section('content')
		<form id="login" action="/login" method="post">
			@csrf
			<h3>Login</h3>
			<label>Usuario: </label><input type="text" name="user" placeholder="Usuario"><br>
			<label>Email: </label><input type="mail" name="mail" placeholder="Email"><br>
			<input type="submit" name="submit" value="Entra">
			@stop
		</form>
	@show
</body>
</html>