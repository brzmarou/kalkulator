<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  
  <title>Kalkulator</title>
  	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/kalkulator.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="assets/js/lib/jquery-3.1.1.min.js"></script>

</head>
<body>

<div class="container wyrownanie">
<div class="header">
	<div class="jumbotron">
		<h1>Prosty kalkulator w PHP <i class="fa fa-calculator" aria-hidden="true"></i></h1>
	</div>
</div>
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="">
			<form action="" method="POST">
				<div class="form-group">
					<input class="form-control" type="text" name="liczba1"/>
				</div>
				<div class="form-group">
					<select class="form-control" name="dzialanie">
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
					</select>
				</div>
				<div class="form-group">	
					<input class="form-control" type="text" name="liczba2"/>
				</div>
				<div class="form-group">
					<input class="btn btn-lg btn-info" type="submit" value='Oblicz' name="OBLICZ">
				</div>
			</form>

			<?php
			require_once './classes/Kalkulator.php';

			$liczba1 = isset($_POST['liczba1']) ? $_POST['liczba1']: '';
			$liczba2 = isset($_POST['liczba2']) ? $_POST['liczba2']: '';
			$dzialanie = isset($_POST['dzialanie']) ? $_POST['dzialanie']: '';
			$kalk = new Kalkulator($liczba1, $liczba2, $dzialanie);
			echo $kalk->oblicz().'</h1>';
			?>
			</div>
		</div>
	</div>
</div>
</body>