<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>USER BLADE PHP</title>
</head>
<body>
	
	<h1>USER VIEW</h1>

	<h2>Name : {{$name}}</h2>
	<h2>Last name : {{$last_name}}</h2>

	<hr>
		<h3>alias : {{$data['alias']}}</h3>
		<h3>phone : {{$data['phone']}}</h3>
		<h3>address : {{$data['address']}}</h3>
	<hr>

	
</body>
</html>