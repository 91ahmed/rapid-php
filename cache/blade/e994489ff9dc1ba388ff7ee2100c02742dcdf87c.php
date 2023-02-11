
<?php $__env->startSection('title', 'RapidMvc'); ?>

<?php $__env->startSection('content'); ?>
		<h1>Rapid Mvc</h1>
		<p style="font-weight: 300;">
		PHP framework for easy and rapid development.
		</p>

		<ul>
			<!--
			<li>
				<span style="color: #E15948;">@author</span> 
				<span style="color: #FFF;font-weight: 400;"><?php echo e($rapid->author); ?></span>
			</li>
			<li>
				<span style="color: #E15948;">@github</span> 
				<a href="<?php echo e($rapid->link); ?>"><span style="color: #4CB7A6;font-weight: 400;"><?php echo e($rapid->repo); ?></span></a>
			</li>
			-->
		</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Rapidmvc\app\view/home.blade.php ENDPATH**/ ?>