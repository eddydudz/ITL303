<?php
$page = (isset($_GET['loadpage']) && $_GET['loadpage'] != '') ? $_GET['loadpage'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<title>Final Turn</title>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
<div id="container">
	<div id="header">
		<div id="shop-name"><h1>Final Turn</h1></div>
		<div id="navigation">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?loadpage=about">About</a></li>
				<li><a href="index.php?loadpage=services">Services</a></li>
				<li><a href="index.php?loadpage=contact">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
	<?php
		switch($page){
			case 'about': 
				require_once 'about.php';
				break;
			;
			case 'services': 
				require_once 'services.php';
				break;
			;
			case 'contact': 
				require_once 'contact.php';
				break;
			;
		}
	?>
	</div>
</div>
</body>
</html>