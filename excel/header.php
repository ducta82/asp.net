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
		<link rel="stylesheet" href="<?php echo $base_url;?>css/bootstrap-custom.css">
		<script type="text/javascript" src="<?php echo $base_url;?>js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url;?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url;?>js/application.js"></script>
		<script type="text/javascript"><!--
		/*function exec_refresh() {
		    //window.status = "Đang chuyển tới..." + myvar;
		    //myvar = myvar + " ."; 1000
		    var timerID = setTimeout("exec_refresh();", 8000);
		    if (timeout > 0) {
		        timeout -= 1;
		    }
		    else {
		        clearTimeout(timerID);
		        window.status = "";
		        window.location = "Lai_suat_TG_VND_TC.aspx";
		    }
		}
		//var myvar = "";
		var timeout = 20;
		exec_refresh();*/
		</script>
	</head>
	<body>    