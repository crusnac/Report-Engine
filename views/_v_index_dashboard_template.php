<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?=APP_NAME?> | <?php if(isset($title)) echo $title; ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.css">
		<!-- Add custom CSS here -->
		<link href="/css/dashboard.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<!-- JavaScript -->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="/js/dashboard.js"></script>
	</head>
	<body>
			<!-- Sidebar -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><i class="fa fa-cogs"></i> <?=APP_NAME?></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				
				<!-- /.navbar-collapse -->
			</nav>
			<div id="page-wrapper">
				<div class="row">
				
					<div class="col-lg-2">
					<?=$sidemenu?>
					</div>
				
					<div class="col-lg-10">
						<?php if ($unprocessed_reports == '0'): ?>
							<?php else: ?>
							<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> <strong>There appears to be some unprocessed reports. <a href="/process/reports/">Process Reports</a></strong></div>
							<?php endif; ?>    
						<?php if(isset($content)) echo $content; ?>
						<?php if(isset($client_files_body)) echo $client_files_body; ?>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /#page-wrapper -->
		<!-- /#wrapper -->
	</body>
</html>