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
	<div class="container">
		<h3 class="text-center">Welcome to API Home</h3>
		<form action="details" method="get">
		<label>Enter the Valid Token</label>
		<input type="text" name="authToken" placeholder="Insert Valid Token." class="form-control"><br>
		<input type="submit" value="Check" class="btn btn-success">
	</form>

		{{ $myToken ?? '' }}
	</div>
</body>
</html>