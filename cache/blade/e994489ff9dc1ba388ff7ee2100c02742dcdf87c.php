
<?php $__env->startSection('title', 'RapidMvc'); ?>

<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rapidmvc\app\view/home.blade.php ENDPATH**/ ?>