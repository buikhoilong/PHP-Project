<?php
$level = "../";
include_once($level . "config.php");
include_once($level . "dbConnection.php");

$isIndex = false;
$isBillList = false;
$isUpdateBill = true;
$isProductList = false;
$isAddProduct = false;
$isProductListSearch = false;
$isUpdateProduct = false;
$isCategoriesList = false;
$isAddCategories = false;
$isUpdateCategories = false;
$isAccountList = false;
$isAddAccount = false;
$isUpdateAccount = false;
$isProductListSearch = false;
$isStatic = false;
$isStatic_result = false;

if ($id = $_GET['id'] != '') {
    include_once($level . "layout.php");
} else {
?>
    <script>
        window.location = "billList.php";
        setTimeout(window.alert("Chưa chọn hoá đơn"), 1000);
    </script>
<?php
}
?>