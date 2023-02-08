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
					<td><?php echo e($users->repo); ?></td>
					<td><?php echo e($users->author); ?></td>
					<td><?php echo e($users->email); ?></td>
				</tr>
			</tbody>
		</table>
	</body>
</html><?php /**PATH C:\xampp\htdocs\Rapidmvc\app\view/home.blade.php ENDPATH**/ ?>