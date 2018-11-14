<!DOCTYPE html>
<html>
<head>
	<?php

		foreach ($css_directory as $css){
			echo $css . "\n\r\t";


		}

		//$title = '';
	 ?>
<title><?php echo $title; ?></title>

</head>
<body>
<div class="container-fluid"><!-- header-->

<div class="container-fluid  container-bg-white"><!-- logo -->
	<?php include '..\resources\views\nav.blade.php';?>
</div><!-- logo end -->
