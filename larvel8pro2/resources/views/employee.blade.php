<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee</title>
</head>
<body>
	

	<h1>Welcome to employees</h1>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Salary</th>
				<th>Department</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $employee)
			<tr>
				<th>{{ $employee->id }}</th>
				<th>{{ $employee->name }}</th>
				<th>{{ $employee->email }}</th>
				<th>{{ $employee->phone }}</th>
				<th>{{ $employee->salary }}</th>
				<th>{{ $employee->department }}</th>
			</tr>
			@endforeach
		</tbody>
	</table>


</body>
</html>