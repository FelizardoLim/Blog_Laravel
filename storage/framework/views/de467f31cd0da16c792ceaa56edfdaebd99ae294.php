<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Landing Page</title>
	<!-- navbar dropdown script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- javascript bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<!-- font style -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<!-- navbar -->
	<?php echo $__env->make('partials/navbarmain', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- main -->
	<div class="container">
		<div class="row">
		<!-- main left -->
			<div class="col-sm-6 col-sm-offset-1">
				<div class="media">
					<div class="media-left">
						<img class="media-object" src="" alt="">
					</div>
					<div class="media-body">
						<nav>
							<ul class="nav navbar-nav">
								<li><a class="glyphicon glyphicon-book" aria-hidden="true" href="#"></a></li>
								<li><a class="glyphicon glyphicon-picture" aria-hidden="true" href="#"></a></li>
								<li><a class="glyphicon glyphicon-facetime-video" aria-hidden="true" href="#"></a></li>
								<li><a class="glyphicon glyphicon-cloud" aria-hidden="true" href="#"></a></li>
							</ul>
						</nav>
					</div>
				</div>
				<?php echo $__env->make('article/display', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		<!-- main right -->
			<div class="col-sm-4">
				<h4>Trending Blogs</h4>

			</div>
		</div>
	</div>
<!-- Footer -->
	<?php echo $__env->make('partials/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>