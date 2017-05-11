<!DOCTYPE html>
<?php 
	include 'db.php';
	include 'core.php';
?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Excel To Mysql Database Using PHP </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">
		<?php $base_url = 'http://'.$_SERVER['SERVER_NAME'].'/';?>
		<link rel="stylesheet" href="<?php echo $base_url;?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $base_url;?>css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php echo $base_url;?>css/bootstrap-custom.css">


	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Import Excel To Mysql Database Using PHP</a>
				
			</div>
		</div>
	</div>