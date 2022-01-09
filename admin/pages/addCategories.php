<?php
$level = "../";
include_once($level."config.php");
include_once($level."dbConnection.php");


$isIndex = false;
$isBillList = false;
$isUpdateBill = false;
$isProductList = false;
$isAddProduct = false;
$isUpdateProduct = false;
$isCategoriesList = false;
$isProductListSearch = false;
$isAddCategories = true;
$isUpdateCategories = false;
$isAccountList = false;
$isAddAccount = false;
$isUpdateAccount = false;
$isStatic = false;
$isStatic_result = false;
include_once($level."layout.php");