<?php
$level = "../";
include_once($level . "config.php");
include_once($level . "dbConnection.php");

$isIndex = false;
$isBillList = false;
$isUpdateBill = false;
$isProductList = false;
$isAddProduct = false;
$isUpdateProduct = true;
$isCategoriesList = false;
$isAddCategories = false;
$isUpdateCategories = false;
$isAccountList = false;
$isAddAccount = false;
$isUpdateAccount = false;

if ($id = $_GET['id'] != '') {
    include_once($level . "layout.php");
} else {
?>
    <script>
        window.location = "productList.php";
        setTimeout(window.alert("Chưa chọn sản phẩm"), 1000);
    </script>
<?php
}
?>