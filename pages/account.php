<?php $level = "../";
include_once ($level."config.php");
$isIndex = false;
$isAbout = false;
$isAccount = true;
$isCheckout = false;
$isContact = false;
$isFaqs = false;
$isHelp= false;
$isPayment = false;
$isPrivacy = false;
$isProduct = false;
$isProduct2 = false;
$isSearch = false;
$isSingle = false;
$isSingle2 = false;
$isTerms = false;
echo $isAccount;
session_start();

include_once ($level."layout.php");
?>