<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::js([
		'angular.js', 
		'angular-route.js',
		'angular-animate.js',
		'angular-resource.js',
		'angular-cookies.js',
		]); ?>
	<style>
		body { margin: 40px; }

		[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
			display: none !important;
			}

	</style>
	<?php  // echo Security::js_fetch_token() ?>
</head>
<body ng-app="spaApp">
	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr>
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12" class="ng-cloack">
 
		
			<?php echo $content; ?>
			<ng-view></ng-view>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="https://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
	<script>
		//window.token = fuel_csrf_token(); 
		//console.log(window.token);
	</script>
	 

	<?php echo Asset::js([
		// Modules
		'app.js', 
		'app.config.js',
		
		// Services
		'app.services.js', 
		'app.people-list.component.js',
		// Components
		'app.book-module.js',
		'app.news-module.js',
		
		'app.book-list.component.js',
		'app.news-list.component.js',
		
		
		]); ?>

</body>
</html>
