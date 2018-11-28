<!DOCTYPE html>
<html>
<head>
	<title>MyPortal</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
 
	<!-- Scripts -->
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
	
	
</head>
<body>
	<?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
		<br>
		<!-- jos havaitaan virheitä syötetyissä tiedoissa, heitetään siitä ilmoitus -->
		<?php if(count($errors)>0): ?>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="alert alert-danger">
				<?php echo e($error); ?>

				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</div>
	
</body>
</html>