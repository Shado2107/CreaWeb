@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../bootstrap-gallery.css">

	
	</head>
	
	<body>
		<div class="container">

			<h1>portfolio</h1>

			<h2></h2>
			
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<a href="img/1.png" class="thumbnail">
						<img src="img/1.png" alt="creazione studio" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="img/2.jpg" class="thumbnail">
						<img src="img/2.jpg" alt="creazione studio" />
					</a>
				</div>
				
				<div class="col-xs-6 col-sm-3">
					<a href="img/3.png" class="thumbnail">
						<img src="img/3.png" alt="creazione studio" />
					</a>
				</div>
				
				<div class="col-xs-6 col-sm-3">
					<a href="img/4.jpg" class="thumbnail" >
						<img src="img/4.jpg" alt="creazione studio" />
					</a>
				</div>
				
				<div class="col-xs-6 col-sm-3">
					<a href="img/5.png" class="thumbnail">
						<img src="img/5.png" alt="creazione studio" />
					</a>
				</div>

				<div class="col-xs-6 col-sm-3">
					<a href="img/6.png" class="thumbnail">
						<img src="img/6.png" alt="creazione studio" />
					</a>
				</div>

			</div>
			
			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="../bootstrap-gallery.js"></script>
		
		<script>
		$(document).ready(function() {
			$('a.custom-selector').bootstrapGallery();
		});
		</script>
	</body>
</html>

@endsection