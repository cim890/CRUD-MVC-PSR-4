<!DOCTYPE html>
<html>
<head>
	
	<title>.::WEBHADE | WEBSITE SAYA::.</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="<?php echo ASSETS_URL ?>img/ico.png">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto" media="all"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL ?>css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL ?>css/responsive.css" media="all"/>
	
</head>
<body>
	<header>
		<h1 class="judul">Halaman Admin</h1>
	</header>

	<?php  echo $this->loadView('menu'); ?>
		</header>
			<?php if(isset($content)){
				echo $content;
				} ?>

<footer id="footer">
		<div class="copyright">Copyright &copy; arospace.co.id. All Right Reserved</div>
	</footer>
</body>
</html>