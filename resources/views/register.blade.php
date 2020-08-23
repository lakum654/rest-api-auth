<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container bg-white">
	<h3 class="text-center p-3">API User Register</h3>
	<form action="api/register" method="post">
	@csrf
	<input type="text" name="name" placeholder="Name" class="form-control"><br><br>
	<input type="text" name="email" placeholder="Email" class="form-control"><br><br>
	<input type="password" name="password" placeholder="Password" class="form-control"><br><br>
	<input type="password" name="c_password" placeholder="Confirm Password" class="form-control"><br><br>
	<input type="Submit" name="value" value="Login" class="btn btn-success">
	</form><br>
@foreach($errors->all() as $error)
{{$error}}
@endforeach

<b class="text-center">I Have Don't Account </b><a href="login">Register</a>
</div>
</body>
</html>