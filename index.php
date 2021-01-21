<!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="<?php echo 'css/bootstrap.min.css'; ?>">
		<meta charset="utf-8" />
		<title>WordPress Theme</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row mb-5">
			<?php include('header.php'); ?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<h1>Header</h1>
							<p>Posted on <?php echo date("Y/m/d")?></p>
						</div>
					</div>
				</div>
		</div>
	</body>
</html>