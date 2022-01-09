<!DOCTYPE html>
<html lang="zxx">

<?php $level = "";
include ($level.'config.php')?>

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="<?php echo $level.css_path?>bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="<?php echo $level.css_path?>style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="<?php echo $level.css_path?>fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="<?php echo $level.css_path?>popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="<?php echo $level.css_path?>menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<?php include ($level.comp_path.'topHeader.php')?>
	

	<!-- Button trigger modal(select-location) -->
	<?php include ($level.comp_path.'selectLocation.php'); ?>
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<?php include ($level.comp_path.'login.php'); ?>
	<!-- register -->
	<?php include ($level.comp_path.'register.php'); ?>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<?php include ($level.comp_path.'header-bottom.php'); ?>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<?php include ($level.comp_path.'navigation.php'); ?>
	<!-- //navigation -->

	<!-- banner -->
	<?php include ($level.comp_path.'banner.php'); ?>
	<!-- //banner -->

	<!-- top Products -->
	<?php include ($level.comp_path.'topProducts.php') ?>
	<!-- //top products -->

	<!-- middle section -->
	<?php include ($level.comp_path.'middle-section.php') ?>
	<!-- middle section -->

	<!-- footer -->
	<?php include ($level.comp_path.'footer.php') ?>
	<!-- //footer -->
	<!-- copyright -->
	<?php include ($level.comp_path.'copyright.php') ?>
	<!-- //copyright -->

	<!-- js-files -->
	<?php include ($level.comp_path.'js-files.php') ?>
	<!-- //js-files -->
</body>

</html>