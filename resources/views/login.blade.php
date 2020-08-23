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
	<h3 class="text-center p-3">API User Login</h3>
	<form action="api/login" method="post">
	@csrf	
	<input type="text" name="email" placeholder="Email" class="form-control"><br>
	<input type="password" name="password" placeholder="Password" class="form-control"><br>
	<input type="Submit" name="value" value="Login" class="btn btn-success">
	</form><br>
@foreach($errors->all() as $error)
{{$error}}
@endforeach

<b class="text-center">I Have Account </b><a href="register">Login</a>
</div>
</body>
</html>