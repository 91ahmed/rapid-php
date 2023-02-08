<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Repository</th>
					<th>Author</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $users->repo }}</td>
					<td>{{ $users->author }}</td>
					<td>{{ $users->email }}</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>