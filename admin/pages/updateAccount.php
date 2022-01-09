<?php
$level = "../";
include_once($level . "config.php");
include_once($level . "dbConnection.php");

$isIndex = false;
$isBillList = false;
$isUpdateBill = false;
$isProductList = false;
$isProductListSearch = false;
$isAddProduct = false;
$isUpdateProduct = false;
$isCategoriesList = false;
$isAddCategories = false;
$isUpdateCategories = false;
$isAccountList = false;
$isAddAccount = false;
$isUpdateAccount = true;
$isProductListSearch = false;
$isStatic = false;
$isStatic_result = false;

if ($id = $_GET['id'] != '') {
    include_once($level . "layout.php");
} else {
?>
    <script>
        window.location = "accountList.php";
        setTimeout(window.alert("Chưa chọn tài khoản"), 1000);
    </script>
<?php
}
?>