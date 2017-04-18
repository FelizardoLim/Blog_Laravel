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
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<!-- font style -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<!-- navbar -->
	@include ('partials/navbarmain')
<!-- main -->
	<div class="container">
		<div class="row">
		<!-- main left -->
			<div class="col-sm-6 col-sm-offset-1">
				<div class="media">
					<div class="media-left">
						<img class="media-object user_avatar" src="{{ asset('img/'.Auth::user()->profile->avatar_src) }}" alt="">
					</div>
					<div class="media-body">
						<nav>
							<ul class="nav navbar-nav">
								<li><a class="glyphicon glyphicon-book" aria-hidden="true" data-toggle="modal" data-target="#create_article"></a></li>
								@include ('article/create')
								<li><a class="glyphicon glyphicon-picture" aria-hidden="true" href="#"></a></li>
								<li><a class="glyphicon glyphicon-facetime-video" aria-hidden="true" href="#"></a></li>
								<li><a class="glyphicon glyphicon-cloud" aria-hidden="true" href="#"></a></li>
							</ul>
						</nav>
					</div>
				</div>
				@include ('article/display')
			</div>
		<!-- main right -->
			<div class="col-sm-3 col-sm-offset-1">
				<h4>Trending Blogs</h4>
				<p>Sample text Sample text Sample text Sa</p>
			</div>
		</div>
	</div>
<!-- Footer -->
	@include ('partials/footer')
</body>
</html>