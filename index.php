<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  
  <title>Kalkulator</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/kalkulator.css" rel="stylesheet">
</head>
<body class>

<div class="container">
<div class="header">
	<div class="jumbotron">
		<h1>Prosty kalkulator w PHP</h1>
	</div>
</div>
	<div class="row">
		<div class="lg-col-12 sm-col-12">
			<form action="" method="POST">
				<input type="text" name="liczba1"/>
				<select name="dzialanie">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
					</select>
				<input type="text" name="liczba2"/>
				<input type="submit" value='Oblicz' name="OBLICZ">
			</form>

<?php
require_once './classes/Kalkulator.php';

$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
$dzialanie = $_POST['dzialanie'];
$kalk = new Kalkulator($liczba1, $liczba2, $dzialanie);
echo $kalk->oblicz();
?>

		</div>
	</div>
</div>
</body>