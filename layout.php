<!DOCTYPE html>
<html lang="en">

<head>
	<?php include($level . comp_path . 'headTitle.php') ?>
</head>

<body>
	<?php

	// <!-- top-header -->
	include($level . comp_path . 'topHeader.php');

	// <!-- Button trigger modal(select-location) -->
	include($level . comp_path . 'selectLocation.php');
	// <!-- //shop locator (popup) -->

	// <!-- modals -->
	// <!-- log in -->
	include($level . comp_path . 'login.php');
	// <!-- register -->
	include($level . comp_path . 'register.php');
	// <!-- //modal -->
	// <!-- //top-header -->

	// <!-- header-bottom-->
	include($level . comp_path . 'header-bottom.php');
	// <!-- shop locator (popup) -->
	// <!-- //header-bottom -->
	// <!-- navigation -->
	include($level . comp_path . 'navigation.php');
	// <!-- //navigation -->


	if ($isIndex == true) {
		// <!-- banner -->
		include($level . comp_path . 'banner.php');
		// <!-- //banner --> 

		// <!-- top Products -->
		include($level . comp_path . 'topProducts.php');
		// <!-- //top products -->
	}
	
	if($isAccount == true) {
		// <!-- account -->
		include_once($level . comp_path . "account/account.php");
		// <!-- //account -->
	}

	if ($isAbout == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'about/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'about/page.php');
		// <!-- //page -->
		// <!-- about page -->
		include($level . comp_path . 'about/About.php');
		// <!-- //about page -->
	}

	if ($isCheckout == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'checkout/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'checkout/page.php');
		// <!-- //page -->
		// <!-- checkout page -->
		include($level . comp_path . 'checkout/Checkout.php');
		// <!-- //checkout page -->
	}

	if ($isContact == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'contact/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'contact/page.php');
		// <!-- //page -->

		// <!-- contact -->
		include($level . comp_path . 'contact/contact.php');
		// <!-- //contact -->

		// <!-- map -->
		include($level . comp_path . 'contact/map.php');
		// <!-- //map -->	
	}

	if ($isFaqs == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'faqs/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'faqs/page.php');
		// <!-- //page -->

		// <!-- Faqs -->
		include($level . comp_path . 'faqs/Faqs.php');
		// <!-- //Faqs -->	
	}

	if ($isHelp == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'help/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'help/page.php');
		// <!-- //page -->
		// <!-- help page -->
		include($level . comp_path . 'help/Help.php');
		// <!-- //help page -->
	}

	if ($isPayment == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'payment/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'payment/page.php');
		// <!-- //page -->
		// <!-- payment page -->
		include($level . comp_path . 'payment/Payment.php');
		// <!-- //payment page -->
	}

	if ($isPrivacy == true) {
		//  <!-- banner-2 -->
		include($level . comp_path . 'privacy/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'privacy/page.php');
		// <!-- //page -->
		// <!-- privacy page -->
		include($level . comp_path . 'privacy/Privacy.php');
		// <!-- //privacy page -->
	}

	if ($isProduct == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'product/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'product/page.php');
		// <!-- //page -->
		// <!-- top Products page -->
		include($level . comp_path . 'product/Product.php');
		// <!-- //top Products page -->
	}

	if ($isProduct2 == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'product2/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'product2/page.php');
		// <!-- //page -->
		// <!-- top Products page -->
		include($level . comp_path . 'product2/Product2.php');
		// <!-- //top Products page -->
	}

	if ($isSearch == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'search/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'search/page.php');
		// <!-- //page -->
		// <!-- search page -->
		include($level . comp_path . 'search/Search.php');
		// <!-- //search page -->
	}

	if ($isSingle == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'single/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'single/page.php');
		// <!-- //page -->
		// <!-- Single page -->
		include($level . comp_path . 'single/Single.php');
		// <!-- //Single page -->
	}

	if ($isSingle2 == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'single2/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'single2/page.php');
		// <!-- //page -->
		// <!-- Single page -->
		include($level . comp_path . 'single2/Single2.php');
		// <!-- //Single page -->
	}

	if ($isTerms == true) {
		// <!-- banner-2 -->
		include($level . comp_path . 'terms/banner-2.php');
		// <!-- //banner-2 -->
		// <!-- page -->
		include($level . comp_path . 'terms/page.php');
		// <!-- //page -->

		// <!-- terms -->
		include($level . comp_path . 'terms/Terms.php');
		// <!-- //terms -->
	}

	// <!-- middle section -->
	include($level . comp_path . 'middle-section.php');
	// <!-- //middle section -->

	// <!-- footer -->
	include($level . comp_path . 'footer.php');
	// <!-- //footer -->
	// <!-- copyright -->
	include($level . comp_path . 'copyright.php');
	// <!-- //copyright -->

	// <!-- js-files -->
	include($level . comp_path . 'js-files.php');
	// <!-- //js-files -->

	?>
</body>

</html>